<!DOCTYPE html>
<html lang="en" class="no-js" ng-app="Angular">
<head>
	<title>Angular Test</title>


</head>
<body>
	<h1>Aman</h1>

	[<a href="#!home">Home</a>]
	[<a href="#!about">About</a>]
	[<a href="#!contact">Contact Us</a>]

	<div ng-controller="test">
		<div ng-repeat="item in data">
			<ul>
				<li>{{item.name}}</li>
				<li>{{item.class}}</li>
			</ul>
		</div>
	</div>


	<script type="text/javascript" src="<?php echo base_url() ?>bower_components/angular/angular.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>bower_components/angular-route/angular-route.js"></script>
	<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.2/angular.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/app.js"></script>

</body>
</html>
