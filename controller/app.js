var app = angular.module("myApp", [
    'ngRoute'
]);

app.config(function ($routeProvider) {
    $routeProvider
    .when("/",
        {
            templateUrl: './view/viewers/home.php',
            controller: 'homeCtrl'
        }).when("/donate", {
        templateUrl: './view/viewers/donate.php',
        controller: 'donateCtrl'
    }).when("/help", {
        templateUrl: './view/viewers/help.php',
        controller: 'helpCtrl'
    }).when("/report", {
        templateUrl: './view/viewers/report.php',
        controller: 'reportCtrl'
    })
        .otherwise({
            redirectTo: '/'
        });
});
app.controller('pageCtrl', ['$scope', '$http','$location',function($scope ,$http,$location ){


    // test 
        const lct = $location.path() ;
        console.log('asd ='+lct)
        if ( lct == '/'){
            
            $('#nav-item-1').tab('show');
        } else if ( lct == '/report') {
            
        }
        else if ( lct == '/help') {
            
        }
        else if ( lct == '/donate') { 

        }
    // test

 
}]);
