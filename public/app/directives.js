var directive = angular.module('app.directives',['app.factories'])
.filter('pagination', [function()
{
	return function(input, start)
	{
		start = +start;
		if(start>0) {
			return input.slice(start);
		}else {
			return input;
		}
	};
}]);;	