<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0">
    <channel>
        <title>Box UK Great Quotes</title>
        <link>http://<?=$this->data['baseUrl']?></link>
        <description>The best quotes from Box UK history</description>

        <?php foreach ($this->data['quotes'] as $quote) { ?>
          <item>
            <title>Quote #<?= $quote['id'] ?></title>
            <link>http://<?=$this->data['baseUrl']?>/quote/<?= $quote['id'] ?></link>
            <description><![CDATA[<?= $quote['quote'] ?>]]></description>
          </item>
        <?php } ?>
    </channel>
</rss>
