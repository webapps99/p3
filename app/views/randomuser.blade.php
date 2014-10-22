@extends("master")

@section("title")

	Generate Random Users

@stop

@section("content")

<a href='/'>&larr; Home</a>

	<br>

	<div class="directions">

		<h1>Faker - Generate Random Users</h1>

	</div>

@stop

@section("form")


<h5><strong>What is Faker?</strong></h5><p>Faker is a PHP library that generates fake data for you. Whether you need to bootstrap your database,
create good-looking XML documents, fill-in your persistence to stress test it, or anonymize data taken
from a production service, Faker is for you.<br><br>

	<div id="fillerform">

		{{ Form::open(array("url" => "randomuser", "method" => "GET")) }}

			{{ Form::label("count", "How many users would you like returned (1-100)?"); }}
			<br>
			{{ Form::text("count", Input::get("count")); }}

			<br>
			<br>

			{{ Form::checkbox("email", "email", Input::get("email"), array("id"=>"email")); }}
			{{ Form::label("email", "Include Email"); }}

			<br>

			{{ Form::checkbox("address", "address", Input::get("address"), array("id"=>"address")); }}
			{{ Form::label("address", "Include Address"); }}

			<br>

			{{ Form::checkbox("country", "country", Input::get("country"), array("id"=>"country")); }}
			{{ Form::label("country", "Include Country"); }}

			<br>
			<br>

			{{ Form::submit("SUBMIT", array("class" => "btn btn-success btn-lg", "name" => "submit")); }}

			<br>
			<br>

		{{ Form::close() }}

	</div>

@stop


@section("output")

			<div id="outputarea">

                <div id="actualoutput">

					<?php require(app_path()."/php/randomuser.php"); ?>

               </div>

			</div>

@stop
