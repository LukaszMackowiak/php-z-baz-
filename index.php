<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bookstore";

// create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// check connection
if (!$conn){
    die ("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";
print '<br>';

// send query to database
$query = mysqli_query($conn, 'SELECT * FROM books');
print_r($query);
print '<br>';
print '<br>';

// fetch data from database
//$data = mysqli_fetch_array($query);
//print_r ($data);
//print '<br>';

//while ($verse = mysqli_fetch_row($query)){
//    print_r($verse);
//    print '<br>';
//    print '<br>';
//}

//fetch data assoc
while ($all_data = mysqli_fetch_assoc($query)){
    print_r($all_data);
    print '<br>';
}

// close connection
mysqli_close($conn);

?>