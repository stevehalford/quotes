<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <title>Hello World</title>
    </head>
    <body ng-app="App">
        <div class="app">
            <div class="container" ng-view=""></div>
        </div>

        <script src="bower_components/jquery/jquery.js"></script>
        <script src="bower_components/angular/angular.js"></script>
        <script src="bower_components/angular-route/angular-route.js"></script>
        <script src="app/app.js"></script>
        <script src="app/controllers.js"></script>
        <script src="app/services.js"></script>
    </body>
</html>
