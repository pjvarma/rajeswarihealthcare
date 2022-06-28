<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "localcare", "zd0wTE00-{yv","localcare");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Name = mysqli_real_escape_string($link, $_REQUEST['name']);
$Mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);
$Email = mysqli_real_escape_string($link, $_REQUEST['email']);
$Package = mysqli_real_escape_string($link, $_REQUEST['package']);
$Address = mysqli_real_escape_string($link, $_REQUEST['address']);
 
// Attempt insert query execution
$sql = "INSERT INTO user_data (name, mobile, email,package,address) VALUES ('$Name', '$Mobile', '$Email','$Package','$Address')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

