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

	<div id="wrapper">

		@yield("content")

		@yield("form")

		<div class="clearboth">
		</div>

		@yield("output")

	</div>

</body>

</html>
