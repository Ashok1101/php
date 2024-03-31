<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CRUD Operations</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<h2>CRUD Operations</h2>

<form id="crudForm" enctype="multipart/form-data">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>
    
    <label for="state">State:</label><br>
    <select id="state" name="state" required>
        <option value="">Select State</option>
    </select><br>
    
    <label for="city">City:</label><br>
    <input type="text" id="city" name="city" required><br>
    
    <label for="age">Age:</label><br>
    <input type="number" id="age" name="age" min="18" required><br>
    
    <label for="document">Document (PDF):</label><br>
    <input type="file" id="document" name="document" accept=".pdf" required><br>
    
    <button type="submit">Submit</button>
</form>

<div id="response"></div>

<script>
$(document).ready(function(){
    // Fetch states via AJAX
    $('#city').change(function(){
        var city = $(this).val();
        $.ajax({
            url: 'fetch_states.php',
            type: 'post',
            data: {city: city},
            success: function(response){
                $('#state').html(response);
            }
        });
    });

    // Submit form via AJAX
    $('#crudForm').submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: 'submit_form.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response){
                $('#response').html(response);
            }
        });
    });
});
</script>

</body>
</html>


