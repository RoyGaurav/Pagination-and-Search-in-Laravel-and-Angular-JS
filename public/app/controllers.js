angular.module('app.controllers',['app.directives','app.factories'])
.controller('HomeController', ['$scope','$http','data',function($scope,$http,data) {
	$scope.currentPage = 1;
	$scope.lastPage = 1;
	$scope.moviesData = [];
	$scope.pageSize = 15;
	data.index(function(response){
		$scope.movies = response.data;
		$scope.currentPage = $scope.movies.current_page;
		$scope.lastPage = $scope.movies.last_page;
		$scope.moviesData = angular.fromJson(response.data.data); 
	},function(response){
		console.log(response);
	});

	$scope.pageChange = function(currentPage,lastPage) {
		$scope.currentPage = currentPage;
		$scope.lastPage = lastPage;
	}

	$scope.loadmore = function(currentPage,lastPage) {
		data.loadmore(currentPage,function(response){
			var moviesDataLength = $scope.moviesData.length/15;
			if(moviesDataLength === (currentPage-1) && moviesDataLength != lastPage) {
				$scope.movies = response.data;
				$scope.currentPage = $scope.movies.current_page;
				$scope.lastPage = $scope.movies.last_page;
				$scope.moviesData = $scope.moviesData.concat(angular.fromJson(response.data.data));	
			}else {
				//angular pagination
				$scope.currentPage = currentPage;
			}
		},function(response){

		});
	}
	$scope.loadData = function() {
		data.index(function(response){
			$scope.movies = response.data;
			$scope.currentPage = $scope.movies.current_page;
			$scope.lastPage = $scope.movies.last_page;
			$scope.moviesData = angular.fromJson(response.data.data); 
		},function(response){
			console.log(response);
		});
	}

	/*$rootScope.$watch(
	function() {
		if($scope.keyword.length>2) {
			return true;
		}else {
			return false;
		}
	},
	function(){

	});
*/
	$scope.searchInLaravel = function(keyword) {
		if(keyword.length>2) {
			data.search(keyword,function(response){
				console.log(response.data);
				$scope.moviesData = angular.fromJson(response.data);
				$scope.currentPage = 1;
				$scope.lastPage = Math.ceil($scope.moviesData.length/15);
			},function(response){

			});
		}else {
			console.log('dddd');
			$scope.loadData();
		}
	}
}]);
