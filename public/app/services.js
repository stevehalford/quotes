var app = angular.module("App");

app.factory('QuotesService', function($http) {
    return {
        get: function() {
            return $http.get('/api/quotes');
        }
        add: function(name) {

        },
        remove: function(name) {

        }
    };
});
