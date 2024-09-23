<?php
// Define the relative path to the batch file from the current directory
$batFilePath = __DIR__ . '/version/server_1.182/run.bat'; // Path relative to the PHP file's location

// Execute the batch file and capture the output and return status
$output = '';
$return_var = 0;

// Execute the batch file using the relative path
exec($batFilePath, $output, $return_var);

// Check if the batch file was executed successfully
if ($return_var === 0) {
    // Success message
    echo "The batch file was executed successfully.<br>";
    echo "<pre>" . implode("\n", $output) . "</pre>";  // Display the output from the batch file if any
} else {
    // Failure message
    echo "Failed to execute the batch file. Error code: $return_var.<br>";
    echo "<pre>" . implode("\n", $output) . "</pre>";  // Display the output from the batch file if any
}

// Optionally, redirect to YouTube
// header("Location: https://www.youtube.com");
// exit;
?>
