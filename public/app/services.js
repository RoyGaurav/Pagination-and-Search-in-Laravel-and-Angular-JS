angular.module('app.factories',[])
.factory('data',['$http',function($http){
	return {
		index: function(success,error){
			$http({
				method:'GET',
				url:'http://localhost:8000/api/movie',
			}).then(function(response) {
				success(response);
			},function(response) {
				error(response);
			});
		},
		loadmore: function(page,success,error){
			$http({
				method:'GET',
				url:'http://localhost:8000/api/movie?page='+page,
			}).then(function(response) {
				success(response);
			},function(response) {
				error(response);
			});
		},
		search: function(keyword,success,error){
			$http({
				method:'GET',
				url:'http://localhost:8000/api/movie/search?q='+keyword,
			}).then(function(response) {
				success(response);
			},function(response) {
				error(response);
			});
		}
	};
}]);