<?php

// PHP - Random Quote Generator by Christina Lopez

// Created multi-dimensional array following steps in Treehouse
// Used PHP 5.4 [] syntax for mutli-dimensional arrays
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

//Created getRandomQuote() function to randomize quotes from multi-dimensional array
//Referenced guide on "Getting a random element from an array"
//Guide by zgulde on GitHubGist: https://gist.github.com/zgulde/9ca9e46d87085e471039

function getRandomQuote($quotes) {
    $randomQuote = $quotes[array_rand($quotes)];
    return $randomQuote;

};

//Created printQuote() function to format quotes
//Empty string variable created to store formatted string
//used conditionals (if statements) to format strings

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
