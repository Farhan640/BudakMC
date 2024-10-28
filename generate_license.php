<?php
// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method Not Allowed
    echo "Error: Only POST method is allowed.";
    exit();
}

// Your PHP logic to handle the form submission
// Path to the file containing the codes
$codeFile = 'codes.txt';

// Function to get the first available code and remove it from the file
function getLicenseCode($file) {
    // Read the contents of the file into an array
    $codes = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Check if there are codes left
    if (count($codes) > 0) {
        // Get the first code
        $assignedCode = $codes[0];

        // Remove the assigned code from the array
        array_shift($codes);

        // Write the remaining codes back to the file
        file_put_contents($file, implode(PHP_EOL, $codes) . PHP_EOL);

        // Return the assigned code
        return $assignedCode;
    } else {
        return null; // No more codes available
    }
}

// Get the code
$licenseCode = getLicenseCode($codeFile);

if ($licenseCode !== null) {
    // Redirect to the thank you page with the code as a URL parameter
    header("Location: thank_you.php?code=" . urlencode($licenseCode));
    exit();
} else {
    // If no codes are available, display an error message
    echo "No more codes are available. Please contact support.";
}
?>
