<!DOCTYPE html>
<html data-ng-app="sampleApp">
    <head>
    	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
        <title>AngularJS</title>
	    <!-- Bootstrap Core CSS -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- CUSTOM CSS -->
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body data-ng-controller="SimpleController">
    	<div class="container">
	    	<!-- Placeholder for AngularJS view -->
	        <div data-ng-view=""></div>
	        <h3>Drap and Drop with AngularJS</h3>
			<div class="typesDemo row">

				<div ng-repeat="list in lists" class="col-md-4">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">List of <%list.label%> (max. <%list.max%>)</h3>
						</div>
						<div class="panel-body" ng-include="'types.php'"></div>
					</div>
				</div>

			</div>
			
			<div class="row">
				<div class="col-md-8" view-source="types"></div>
				
			    <div class="col-md-4">
			        <div class="panel panel-default">
			            <div class="panel-heading">
			                <h3 class="panel-title">List Models</h3>
			            </div>
			            <div class="panel-body">
			                <pre class="code"><%modelAsJson%></pre>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
    	<!-- AngularJS -->
        <script src="js/angular.min.js"></script>

        <script src="../angular-drag-and-drop-lists.js"></script>
        <!-- ANGULARJS DEPENDENCY FOR ROUTING -->
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-route.js"></script>
        <!-- jQuery -->
        <script src="js/jquery-3.1.0.min.js"></script>
        <!-- Bootstrap Core JS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- AngularJS App -->
        <script src="js/app.js"></script>
        <!-- AngularJS Controller -->
        <script src="js/controller.js"></script>
    </body>
</html>