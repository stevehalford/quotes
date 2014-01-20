var app = angular.module("App");

app.controller("HomeController", function($scope, $location, QuotesService) {
    QuotesService.get().success(function(data) {
        $scope.quotes = data.quotes;
    });
});
