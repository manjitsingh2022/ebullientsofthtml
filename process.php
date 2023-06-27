<?php
// Retrieve the form data
$name = $_POST['dzFirstName']." ". $_POST['dzLastName'];
$email = $_POST['dzEmail'];
$phone = $_POST['dzPhoneNumber'];
$message = $_POST['dzMessage'];

$file = 'enquiries.csv'; // Name of the CSV file
$headers = ['Name', 'Email', 'Phone', 'Message']; // Column headers
if (!file_exists($file)) {
    $csvContent = implode(',', $headers) . "\n";
    file_put_contents($file, $csvContent);
}

$data = [$name, $email, $phone ,$message]; // Data to append

$csvContent = implode(',', $data) . "\n";

file_put_contents($file, $csvContent, FILE_APPEND);

echo "Data appended to the CSV file successfully!";
?>


