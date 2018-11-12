<?php

// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

$quotes[] = [
     'quote' => "To realize one's destiny is a person's only obligation.",
     'source' => "Paolo Coelho",
     'citation' => "The Alchemist",
     'year' => '1988',
];
$quotes[] = [
     'quote' => "I have not failed. I've just found 10,000 ways that won't work.",
     'source' => "Thomas Edison",
];
$quotes[] = [
     'quote' => "There is no greater agony than bearing an untold story inside you.",
     'source' => "Maya Angelou",
     'citation' => "I Know Why the Caged Bird Sings",
     'year' => '',
];
$quotes[] = [
     'quote' => "Everything you can imagine is real.",
     'source' => "Pablo Picasso",
];
$quotes[] = [
     'quote' => "It is never too late to be what you might have been.",
     'source' => "Mary Anne Evans AKA George Eliot (penname)",
];
$quotes[] = [
     'quote' => "Just think happy thoughts and you’ll fly.",
     'source' => "J.M. Barrie",
     'citation' => "Peter Pan",
     'year' => "1904",
];
$quotes[] = [
     'quote' => "Do not let your fire go out, spark by irreplaceable spark in the
     hopeless swamps of the not-quite, the not-yet, and the not-at-all.
     Do not let the hero in your soul perish in lonely frustration for the life
     you deserve and have never been able to reach. The world you desire can be won.
     It exists.. it is real... it is possible... it's yours.",
     'source' => "Ayn Rand",
     'citation' => "Atlas Shrugged",
     'year' => "1957",
];

//testing my array
//echo $quotes[1]['quote'];

//testing random array index
/*
$randomIndex = array_rand($quotes);
$randomNumber = $quotes[$randomIndex];
echo $randomNumber;
*/

//WIP testing display of array items
/*
echo $quotes[0]['quote'] . " " . " - " . $quotes[0]['source'];
echo $quotes[1]['quote'] . " " . " - " . $quotes[1]['source'];
echo $quotes[2]['quote'] . " " . " - " . $quotes[2]['source'];
echo $quotes[3]['quote'] . " " . " - " . $quotes[3]['source'];
*/

// Create the getRandomQuote function and name it getRandomQuote

//Testing functions
/*
function getRandomQuote($array) {
    $randIndex = array_rand($array);
    $randElement = $array[$randIndex];
    echo $randElement;
};
*/
function getRandomQuote($quotes) {
    $randIndex = array_rand($quotes);
    $randElement = $array[$randIndex];
    return $randElement;
};


/*
getRandomQuote();  //calling getRandomQuote function
echo $randomQuote;  //display quote
*/

// Create the printQuote funtion and name it printQuote
function printQuote() {
  
};
?>
