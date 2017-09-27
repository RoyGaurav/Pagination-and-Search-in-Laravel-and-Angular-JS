angular.module('app',[
	'ui.router',
	'app.controllers',
	'app.factories'
	])
.config(['$stateProvider','$locationProvider','$httpProvider','$urlRouterProvider',function($stateProvider,$locationProvider,$httpProvider,$urlRouterProvider) {
	
	$urlRouterProvider.otherwise('/');
	$stateProvider.state('homePage',{
		url: '/',
		views: {
			'mainView': {
				templateUrl: 'views/home.html',
				controller: 'HomeController'
			}
		}		
	});
	$locationProvider.html5Mode(true);
}]);