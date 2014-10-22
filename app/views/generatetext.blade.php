@extends("master")


@section("title")

	Generate Text

@stop

@section("content")

<a href='/'>&larr; Home</a>

	<br>

	<div class="directions">

		<h1 align="center">Lorem Ipsum Generator</h1>

	</div>

@stop

@section("form")


<h3>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</h3>
"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."<br><br>

<h5><strong>What is Lorem Ipsum?</strong></h5><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
 and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
 typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
 Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><br>

<h5><strong>Why do we use it?</strong></h5><p>It is a long established fact that a reader will be distracted by the readable content
 of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
 as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web
 page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still
 in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>



	<div id="fillerform">

		{{ Form::open(array("url" => "generatetext", "method" => "GET")) }}

			{{ Form::label("count", "How many paragraphs would you like returned (1-100)?"); }}
			<br>
			{{ Form::text("count", Input::get("count")); }}

			<br>
			<br>

			{{ Form::radio("paraglength", "short", Input::get("paraglength")=="short", array("id"=>"short")); }}
			{{ Form::label("short", "Short"); }}

			<br>

			{{ Form::radio("paraglength", "medium", Input::get("paraglength")=="medium", array("id"=>"medium")); }}
			{{ Form::label("medium", "Medium"); }}

			<br>

			{{ Form::radio("paraglength", "long", Input::get("paraglength")=="long", array("id"=>"long")); }}
			{{ Form::label("long", "Long"); }}

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

		<p id="actualoutput">

		@if(isset($paragraphs))
			@foreach($paragraphs as $paragraph)
				<p>{{ $paragraph }}</p>
			@endforeach
		@endif

		@if(isset($warnings))
			<p id="warning">{{ $warnings }}</p>
		@endif



	</div>

@stop
