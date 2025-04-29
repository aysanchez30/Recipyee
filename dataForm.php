// Ava Sanchez //
// Date: 4/23/2025 //

<?php
define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASS', '');
define ('DB_NAME', 'dataForm');
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die('Connection Failed ' . $conn->connect_error);
}
if ($_SERVER ['REQUEST_METHOD'] == 'POST') 
{
$fname = $_POST['input1'];
$lname = $_POST['input2'];
$email = $_POST['input3'];
$sub = $_POST['input4'];
$query = $conn->prepare("INSERT INTO user_inquiries (FirstName, LastName, EmailAddress, Subjects) 
VALUES (?, ?, ?, ?)");
$query->bind_param("ssss", $fname, $lname, $email, $sub);
$query->execute();
$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>


        <script>


        </script>
    </head>    

    <body>
    <form id="form1" method="POST">

       
        <h1>Contact Us</h1>
        <h5>First Name</h5>
        <input name="input1" placeholder="First Name..." style="border-radius: 3px;">
        <h5>Last Name</h5>
        <input name="input2" placeholder="Last Name..." style="border-radius: 3px;">
        <h5>Email</h5>
        <input name="input3" placeholder="Email..." style="border-radius: 3px;">
        <h5>Subject</h5>
        <textarea name="input4" placeholder="Subject..." style="border-radius: 3px;" rows="5" cols="30"></textarea>
        <br>
        <button name="button1" type="submit" style="width: 100px; height: 20px; margin-top: 1rem;">Submit</button>
        
    </form>
    </body>



</html>