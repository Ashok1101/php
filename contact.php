<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Contact Us</title>
  </head>
  <body>
<?php
$con = mysqli_connect('localhost', 'root', '','db_contact');//ultra Qr_I[iL!PDVgOlGX

// database connection code
if(isset($con))//$_POST['txtName']
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

if (!$con){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}
// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['fldEmail'];
$txtPhone = $_POST['fldPhone'];
$txtMessage = $_POST['fldMessage'];


// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// // insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	mysqli_connect_error($con);	
}

?>
<fieldset>

<form name="frmContact" class="needs-validation " method="post" >
<p>
<label for="Name">Your Name </label>
<input type="text" class="form-control" name="txtName" id="txtName"
placeholder="Name" value=""" required>
<div class="invalid-feedback">
Valid first name is required.
</div>
</p>

<p>
<label for="email">Your Email</label>
<input type="text" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email" value="" required>
</p>
<p>
<label for="phone">Your Phone</label>
<input type="text" class="form-control" name="txtPhone" id="txtPhone"
placeholder="Phone" value="" required>
</p>
<p>
<label for="message">Message</label>
<textarea name="txtMessage" class="form-control" id="txtMessage"
placeholder="Message" required></textarea>
</p>
<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Click me to Contact" class="btn btn-primary btn-lg btn-block">
</p>
</form>
</fieldset>
  </body>
</html>