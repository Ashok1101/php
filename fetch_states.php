<?php
$conn = mysqli_connect("localhost", "root", "", "candidate-details");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$city = $_POST['city'];
$sql = "SELECT DISTINCT state FROM cities WHERE city = '$city'";
$result = mysqli_query($conn, $sql);

$options = '<option value="">Select State</option>';
while($row = mysqli_fetch_assoc($result)){
    $options .= '<option value="'.$row['state'].'">'.$row['state'].'</option>';
}

echo $options;

mysqli_close($conn);
?>