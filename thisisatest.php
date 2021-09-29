
<?php

// 1. Write a function for following feature 
// i. Test the number is even or odd, return true if the number given are even 	
// bool is_even(int x);

function is_even($number)
{
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}



// ii. Test the number is prime, return true if number given are prime number 
// bool is_prime(int x);


// 0





// iii. Capitalize the first character of each word, left the follow word untouched “in as on is are were” 
// string cap_first_char(string x);

function cap_first_char($x)
{
    $splitted = explode(" ", $x);
    for ($x = 0; $x < count($splitted); $x++) {
        $currentWord = $splitted[$x];
        if (
            $currentWord != "in" && $currentWord != "as" && $currentWord != "on" && $currentWord != "is" && $currentWord != "are" && $currentWord != "were"
        ) {
            $firstCharInCurrentWord = $currentWord[0];
            $capFirstChar = strtoupper($firstCharInCurrentWord);
            $restOfCurrentWord = substr($currentWord, 1);
            $currentWordRevised = $capFirstChar . $restOfCurrentWord;
            $splitted = str_replace($currentWord, $currentWordRevised, $splitted);
        }
    }
    return join(" ", $splitted);
}



// 2. Write PHP function to complete the following code 
// i. Function join_array 
// - Input two array concatenate them into one 
// - Return the concatenate array

function join_array($arr1, $arr2)
{
    $tempStr = join(" ", $arr1) . " " . join(" ", $arr2);
    $split = explode(" ", $tempStr);
    return $split;
}




// ii. Function print_in_frame - Print content of an array into a box frame - Example result : 
// array = Array("Hello", "World", "in", "a", "frame"); print_in_frame(array); 


// 0







// 3. What is the sequence and step to use cURL in PHP


// 1 create a varieble for url
// 2 create a curl session by passing the url into curl_init and save in a variable
// 3 set options for the curl using curl_setopt
// 4 perform a cURL session by passing the cURL variable into curl_exec
// 5 close a cURL session




// 4. How to post json data using cURL in HTTP? Please write a short code for this.

$url = "https://reqbin.com/echo/post/json";

$curl = curl_init($url);
//set url
curl_setopt($curl, CURLOPT_URL, $url);
//set http options
curl_setopt($curl, CURLOPT_POST, true);
//want string back
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//creating headers data
$headers = array(
    "Content-Type: application/json",
);
//set the headers
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
// create body data to send in json
$data = '{"username":"kimi","password":"passtest"}';
// set the post data
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
// dont check if ssl exist
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
// dont verify peers' ssl
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
// execute curl statement
$resp = curl_exec($curl);
//close curl session
curl_close($curl);




// 5. How to create controllers and models using Laravel framework.

// cmd for automatically create model and controller
//  php artisan make:model Product -mc





// 6. What’s the use of models in Laravel

// Model in laravel is part of MVC design pattern to better structure the code. 
// Model in this case is the make up of business data. Model stores data and its related logic




// 7. Whats the major different between web and api route?

// Web is stateful, it contain things related to web page, it can contains session, cookies, csrf token. 
// Api is stateless, api mostly deals with data like json and it doesnt store users' sessions and cookies






?>
