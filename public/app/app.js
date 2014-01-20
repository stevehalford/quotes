var app = angular.module(
    "App",
    [
        'ngRoute'
    ]
);

app.config(function($routeProvider) {
    $routeProvider.when('/', {
        templateUrl: 'app/templates/home.html',
        controller: 'HomeController'
    });
});
