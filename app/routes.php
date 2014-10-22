<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//Landing page for Application

Route::get('/', function()
{
    return View::make('hello');


});


//Route to Lorem Ipsum text generator

Route::get('/generatetext', function()
{

    // If form has not been submitted yet, just return the view
    if(!Input::get('submit')) {
        return View::make('generatetext');
    }

    // Form has been submitted

    // Instantiate a new "Generate" object from our Generate class I created in /app/php/Generate.php
    $generate = new Generate();

    // Check for warnings...
    $warnings = $generate->checkForWarnings(Input::get('count'));

    // If there are warnings, return the View with warnings
    if($warnings) {
        return View::make('generatetext')->with('warnings', $warnings);
    }

    // Get paragraphs
    $paragraphs = $generate->getParagraphs(Input::get("paraglength"), Input::get("count"));

    // Return the view with the paragraphs
    return View::make('generatetext')
        ->with('paragraphs', $paragraphs);

});


//Route to Faker random user generator

Route::get('/randomuser', function()
{
    return View::make('randomuser');
});



