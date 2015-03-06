'use strict';
/* APP */

var budgetHelpApp = angular.module('budgetHelpApp', ['ngRoute', 'budgetHelpControllers', 'ui.bootstrap']);

budgetHelpApp.config(['$routeProvider',
    function($routeProvider){
        $routeProvider.
            when('/admin/orcarmento', {
                templateUrl: 'partial/solicitar-orcamento.html',
                controller: 'BudgetSolicitationCtrl'
            }).
            when('/admin', {
                templateUrl: 'partial/logar.html',
                controller: 'BudgetLoginCtrl'
            }).
            otherwise({
                redirectTo: '/'
            })
    }
]);