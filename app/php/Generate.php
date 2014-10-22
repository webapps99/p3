<?php


//Updated /app/start/global.php with /app/php path for global access to class files
class Generate {

    /* Check for errors in input of count in generatetext form */
    public function checkForWarnings($count) {

        //make sure that the user has entered a number in the text field.
        if (!preg_match ("/[\d]+/", $count)) {
            return "PLEASE ENTER A NUMBER!";
        }

        //make sure that the user has entered a number less/equal than 100 in
        elseif ($count > 100) {
            return "PLEASE ENTER A SMALLER NUMBER!";
        }

        //make sure that the user has entered a number greater than 0
        elseif ($count <= 0) {
            return "PLEASE ENTER A NUMBER <br>GREATER THAN ZERO!";
        }


    }

    public function getParagraphs($length, $count) {

        //create a new instance of the LoremIpsum class
        $generator = new LoremIpsum();

        //short paragraphs
        if ($length == "short") {

            $generator -> setSentenceStDev(1); //std deviation of words in a sentence
            $generator -> setSentenceMean(6);  //mean word length of a sentence
            $generator -> setParagraphStDev(1); //std deviation of sentences in a paragraph
            $generator -> setParagraphMean(3); //mean # of sentences per paragraph

        }

        //medium-length paragraphs

        elseif ($length == "medium") {

            $generator -> setSentenceStDev(1);
            $generator -> setSentenceMean(9);
            $generator -> setParagraphStDev(2);
            $generator -> setParagraphMean(7);

        }

        //long paragraphs

        elseif ($length == "long") {

            $generator -> setSentenceStDev(3);
            $generator -> setSentenceMean(12);
            $generator -> setParagraphStDev(5);
            $generator -> setParagraphMean(20);

        }

        //call the getParagraphs method, passing in the number of paragraphs
        //the user requested
        $paragraphs = $generator->getParagraphs($count);

        return $paragraphs;

    }


}
