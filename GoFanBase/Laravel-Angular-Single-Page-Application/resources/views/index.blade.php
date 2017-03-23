<!DOCTYPE html>
<html ng-app="myApp" ng-controller="myController">
  <head>
    <meta charset="utf-8">
    <title>GoFanBase Laraval SPA using Angular</title>
    <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
    <style>
    #custom-search-input {
        margin:0;
        margin-top: 10px;
        padding: 0;
      }

      #custom-search-input .search-query {
          padding-right: 3px;
          padding-right: 4px \9;
          padding-left: 3px;
          padding-left: 4px \9;
          margin-bottom: 0;
          -webkit-border-radius: 3px;
          -moz-border-radius: 3px;
          border-radius: 3px;
      }

      #custom-search-input button {
          border: 0;
          background: none;
          padding: 2px 5px;
          margin-top: 2px;
          position: relative;
          left: -28px;
          margin-bottom: 0;
          -webkit-border-radius: 3px;
          -moz-border-radius: 3px;
          border-radius: 3px;
          color:#D9230F;
      }
    </style>
  </head>
  <body>
    <div class="container">
			<div class="row">
				<h1>DVD Search</h1>
        <p> This Angular Laravel Single Page Application is built as my test for GoFanBase.</p>
        <p> It searches through a mySQL database of DVDs that is used in my upper division web development class. </p>
				<form ng-controller="myController as mc" ng-submit="mc.search()" >
		           <div id="custom-search-input">
	                    <div class="input-group col-md-12">
		                        <input ng-model="form.title" type="text" class="search-query form-control" placeholder="Search" name="dvdTitle" >
	                    	<span class="input-group-btn">
	                            <button class="btn btn-danger" type="">
	                                <span class=" glyphicon glyphicon-search"></span>
	                            </button>
	                        </span>
	                    </div>
	               </div>
	              <button class="btn btn-danger" style="margin-top:20px" type="submit" ng-click="search()">Search</button>
	            </form>
			</div>
      <h2>DVD Results:</h2>
		</div>
    <div ng-view></div>
    <script type="text/javascript" src="{{ URL::asset('bower_components/angular/angular.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower_components/angular-route/angular-route.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/app.js')}}"></script>
  </body>
</html>
