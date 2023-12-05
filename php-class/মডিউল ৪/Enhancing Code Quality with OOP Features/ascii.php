<?php

// $asciiNumber = " L";
// $acciiResult = ord($asciiNumber);
// echo $acciiResult;


$ascciWord=" accha vai (Ekta Meye Hero Ke Like Kore Na Hira(Dimonds) Ke Like Kore";
for($i=0; $i<strlen($ascciWord); $i++){
    $Result = ord($ascciWord[$i]). " ";
    echo $Result;
} 

// $asciiWord = "1000110100111111001001100011111000100111010011001";
// $asciiArray = explode(' ', trim($asciiWord));

// foreach ($asciiArray as $asciiChar) {
//     $result = chr($asciiChar);
//     echo $result;
// }


// $asciiWord = "1000110100111111001001100011111000100111010011001";
// $asciiArray = explode(' ', trim($asciiWord));

// foreach ($asciiArray as $binaryChar) {
//     $asciiCode = bindec($binaryChar);
//     $result = chr($asciiCode);
//     echo $result;
// }


// $binaryString = "1000110100111111001001100011111000100111010011001";
// $binaryArray = str_split($binaryString, 8); // Split the binary string into chunks of 8 characters

// foreach ($binaryArray as $binaryChar) {
//     $asciiCode = bindec($binaryChar); // Convert binary to decimal
//     $result = chr($asciiCode); // Convert decimal to ASCII
//     echo $result;
// }

// Example using cURL
// $api_key = 'your_api_key';
// $phone_number = '1234567890';
// $api_url = 'https://api.example.com/lookup?phone=' . $phone_number . '&api_key=' . $api_key;

// $ch = curl_init($api_url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $response = curl_exec($ch);
// curl_close($ch);

// // Process the response
// $data = json_decode($response, true);


// Choose a Service/API:

// There are several services and APIs that offer phone number information lookup. Examples include Twilio, NumVerify, and Whitepages.
// Sign Up and Get API Key:

// Sign up for the chosen service and obtain the API key or credentials required for authentication.
// Install Necessary Libraries:

// If the service provides a PHP SDK or library, install it using Composer or download and include it in your project.
// Make API Request:

// Use the API key and the appropriate endpoint to make a request to the service, passing the phone number as a parameter.