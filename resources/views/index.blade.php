<!DOCTYPE html>
<html ng-app="app">
<head>
	<base href="/">
  	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<title>Pagination/Search Example</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
	<style type="text/css">
		td,th {
			width: 100%;
			white-space: nowrap;
			font-size: 13px;
		}
	</style>
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-12" ui-view="mainView" autoscroll="false">

		</div>
	</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.4/angular.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.6.4/angular-sanitize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/1.0.3/angular-ui-router.min.js"></script>
	<script type="text/javascript" src="/app/app.js"></script>
	<script type="text/javascript" src="/app/controllers.js"></script>
	<script type="text/javascript" src="/app/directives.js"></script>
	<script type="text/javascript" src="/app/services.js"></script>
</body>
</html>