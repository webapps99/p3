@extends("master")

@section("header")

	<header>



	</header>

@stop

@section("content")

	<br>

	<div id="welcome">

		<p id="welcometext">Hello! This site was designed to help developers by generating random content and/or
		random users. These resources are commonly used when testing websites.
		<br>
		<br>Select an option below:</p>

	</div>


	<br>
	<br>
	<br>


@stop

@section("form")

	<table>

		<tr>
			<td>Generate Text:</td>
			<td>Generate Random Users:</td>
		</tr>
                    <!--custombutton is the style sheet caption used for the button(see /css/stylesheet.css-->
		<tr>

			<td>{{ link_to("generatetext", "Generate Text", array("class" => "btn btn-success custombutton")) }}</td>
			<td>{{ link_to("randomuser", "Random Users", array("class" => "btn btn-success custombutton")) }}</td>

	</table>

@stop




