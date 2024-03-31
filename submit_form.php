<?php
$conn = mysqli_connect("localhost", "root", "", "candidate-details");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$age = $_POST['age'];
if ($age < 18) {
    echo "You must be 18 years or older to submit your information.";
    die;
}

// Upload document
$document_name = $_FILES['document']['name'];
$document_tmp_name = $_FILES['document']['tmp_name'];
$document_path = "uploads/" . $document_name;

if(move_uploaded_file($document_tmp_name, $document_path)){
    $name = $_POST['name'];
    $state = $_POST['state'];
    $city = $_POST['city'];

    $sql = "INSERT INTO candidates (name, state, city, age, document) VALUES ('$name', '$state', '$city', $age, '$document_name')";
    if(mysqli_query($conn, $sql)){
        echo "Data saved successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
} else{
    echo "ERROR: Could not upload document.";
}

mysqli_close($conn);
?>