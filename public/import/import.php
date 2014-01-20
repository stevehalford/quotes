<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../../vendor/autoload.php';

$app = new \Slim\Slim(array(
    'mode' => 'development',
    'log.level' => \Slim\Log::DEBUG
));

require '../../config.php';

$filecontent = file_get_contents("great_quotes.md");

$quotes = explode('--', $filecontent);

foreach (array_reverse($quotes) as $quote) {

    if ($quote != '') {
        $quoteObject = new Quote();

        $quoteObject->quote = trim($quote);

        if (!$quoteObject->save()) {
            echo 'Could not save:<br/>'.$quote;
        }
    }
}

echo 'All done!';
