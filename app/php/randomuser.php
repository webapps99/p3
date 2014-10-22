<?php



//only perform the logic if the user has pressed the submit button
if (Input::get("submit")) {

    //if the user's requested number of users falls within the given parameters,
    //retrieve the user's request
    if (Input::get("count") > 0 && Input::get("count") <=100) {

        //create a new instance of the Faker class
        $faker = Faker::create();


        for ($i=1; $i<=Input::get("count"); $i++) {

            //generate a user name
            echo "<span id=\"userdatalabel\">Name: </span>".$faker -> name, "<br>";


            //if the user has requested to include email, generate an email
            if (Input::get("email")) {

                echo "<span id=\"userdatalabel\">Email: </span>".$faker->email, "<br>";
            }

            //if the user has requested to include an address, generate an address
            if (Input::get("address")) {

                echo "<span id=\"userdatalabel\">Address: </span>".$faker -> address, "<br>";

            }

            //if the user has requested to include a country, generate a country
            if (Input::get("country")) {

                echo "<span id=\"userdatalabel\">Country: </span>".$faker -> country ($maxNbChars = 200), "<br>";

            }

            //create spacing
            echo "<br>";
            echo "<br>";

        }

    }
    //Input error, show warning
    else{ echo "<span id=\"warning\">Please enter a number greater than 0 or equal/less than 100! </span>";}


}

