<?php

// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

//quotes to inspire the budding developer at difficult times
$quotes[] = [
     'quote' => 'To realize one\'s destiny is a person\'s only obligation.',
     'source' => 'Paolo Coelho',
     'citation' => 'The Alchemist',
     'year' => '1988',
];
$quotes[] = [
     'quote' => 'I have not failed. I\'ve just found 10,000 ways that won\'t work.',
     'source' => 'Thomas Edison',
];
//left the year empty b/c I was going to find date and enter later
//used to test conditionals
$quotes[] = [
     'quote' => 'There is no greater agony than bearing an untold story inside you.',
     'source' => 'Maya Angelou',
     'citation' => 'I Know Why the Caged Bird Sing',
     'year' => '',
];
$quotes[] = [
     'quote' => 'Everything you can imagine is real.',
     'source' => 'Pablo Picasso',
];
$quotes[] = [
     'quote' => 'It is never too late to be what you might have been.',
     'source' => 'Mary Anne Evans, penname George Eliot',
];
$quotes[] = [
     'quote' => 'Just think happy thoughts and you\'ll fly.',
     'source' => 'J.M. Barrie',
     'citation' => 'Peter Pan',
     'year' => '1904',
];
$quotes[] = [
     'quote' => 'The world you desire can be won.
     It exists.. it is real... it is possible... it\'s yours.',
     'source' => 'Ayn Rand',
     'citation' => 'Atlas Shrugged',
     'year' => '1957',
];

//testing random array index
/*
$randomIndex = array_rand($quotes);
$randomNumber = $quotes[$randomIndex];
echo $randomNumber;
*/


// Create the getRandomQuote function and name it getRandomQuote

//testing getRandomQuote function (long version)
/*
function getRandomQuote($quotes) {
    $randIndex = array_rand($quotes);
    $randElement = $quotes[$randIndex];
    return $randElement;
};
*/

function getRandomQuote($quotes) {
    $randomQuote = $quotes[array_rand($quotes)];
    return $randomQuote;

};

// Create the printQuote funtion and name it printQuote
function printQuote($quotes) {
    $quote = getRandomQuote($quotes);
    $htmlString = "";

    if (!empty($quote['quote'])) {
      $htmlString = "<p class=\"quote\">" . $quote['quote'] . "</p>" .
      "<p class=\"source\">" . $quote['source'] . "</p>";
    };
    if (!empty($quote['citation'])){
      $htmlString = "<p class=\"quote\">" . $quote['quote'] . "</p>" .
      "<p class=\"source\">" . $quote['source'] . "<span class=\"citation\">" .
      $quote['citation'] . "</span></p>";
    };
    if (!empty($quote['year'])){
      $htmlString = "<p class=\"quote\">" . $quote['quote'] . "</p>" .
      "<p class=\"source\">" . $quote['source'] . "<span class=\"citation\">" .
      $quote['citation'] . "</span>" . "<span class=\"year\">" . $quote['year'] .
      "</span></p>";
    };

    echo $htmlString;
};

printQuote($quotes);

?>
