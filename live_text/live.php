<!DOCTYPE html>
<html>
<head>
    <title>Read and Append Text File</title>
</head>
<body>

<?php
$filePath = 'data.txt';

// Check if the file exists
if (file_exists($filePath)) {
    // Read the content of the file
    $fileContent = file_get_contents($filePath);

    // Display the content on the webpage
    echo "<pre>$fileContent</pre>";
} else {
    // Display an error message if the file does not exist
    echo "The specified file does not exist.";
}

// Append data to the file
$data = 'Hello World';

// Open the file in append mode
$fileHandle = fopen($filePath, 'a');

// Check if the file is opened successfully
if ($fileHandle) {
    // Write the data to the file
    fwrite($fileHandle, $data . PHP_EOL); // PHP_EOL represents the end of a line for cross-platform compatibility

    // Close the file handle
    fclose($fileHandle);

    echo "Data appended successfully.";
} else {
    echo "Error opening the file for appending.";
}
?>

</body>
</html>
