<html>
    <style>
        body{
            background-image: url("https://cdn0.tnwcdn.com/wp-content/blogs.dir/1/files/2018/03/screener_1521017380872-796x419.jpg");
            background-repeat: no-repeat;
            background-size:cover;
            font-size:4vh;


        }
    </style>
<head>
    <title>TrackResponse</title>
    <link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
</head>    
<body topmargin="20%"> 
 
    <div style="font-family: 'Space Mono', monospace; background-color:#666666; margin: auto;
  width: 50%;
  border: 3px solid BLACK;
  padding: 10px;
  border-radius:30px">

<?php
$lat=$_POST["cdlat"];
$lon=$_POST["cdlon"];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname="track";
$conn = new mysqli($servername, $username,$password, $dbname);
$query = "SELECT id FROM users";
$result = mysqli_query($conn, $query);

if (empty($result)) {
    $query = "CREATE TABLE users (
                          id int(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                          lat VARCHAR(100),
                          lon VARCHAR(100)
                          )";
    $result = mysqli_query($conn, $query);
}

if ($conn->connect_error) {
die("cant access:" . $conn->connect_error);
}

$sql = "INSERT INTO users(lat,lon)
VALUES('$lat','$lon');";
if ($conn->query($sql) === true) {
    echo "Hey! <br>" . "<center>You Have Been Tracked"."<br>"."Latitude ". $lat ."<br>". "Longitude " . $lon."</center>";
} else {
    echo "Unable to Add values" . $sql . "<br>" . $conn->error;
}
?>

</div>

</body>
</html>