<!DOCTYPE html>

<html lang="en">

<head>
	<title>@yield('title', "A Developer's Best Friend - Generate Random Text and Users")</title>
	<meta charset="UTF-8">
	<meta name="description" content="This site generates Random Text and Random User Information">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

</head>

<body>
     <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a id="nav-far-left" class="navbar-brand" href="/">Chris Nystrom - DWA15 P3</a>
            </div>
    <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li id="navhome"><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li id="navlorem"><a href="/generatetext"><span class="glyphicon glyphicon-pencil"></span> Generate Text</a></li>
                <li id="navfaker"><a href="/randomuser"><span class="glyphicon glyphicon-user"></span> Random Users</a></li>
              </ul>
     </div><!--/.nav-collapse -->
    </div>
</div>

<br>
<br>
	<div id="wrapper">

		@yield("content")

		@yield("form")

		<div class="clearboth">
		</div>

		@yield("output")

	</div>



</body>

</html>
