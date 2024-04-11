<?php
	$servername="localhost";
	$username="hospital_jnd";
	$password="Master@2619";
	$databasename="hospital_jnd";

$conn = new mysqli($servername, $username, $password, $databasename);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["query"])) {
    $search = $conn->real_escape_string($_POST["query"]);

$sql = "SELECT name, mobile, sex, age, village, height, address, width, subvillage, ayushmancard, abhacard, adharcard FROM patient WHERE name LIKE '%$search%' OR mobile LIKE '%$search%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        echo '<div class="suggestion-item" 

        data-name="' . $row["name"] . '" 
        data-mobile="' . $row["mobile"] . '" 
        data-sex="' . $row["sex"] . '"
        data-age="' . $row["age"] . '"
        data-width="' . $row["width"] . '"
        data-height="' . $row["height"] . '"
        data-village="' . $row["village"] . '"
        data-subvillage="' . $row["subvillage"] . '"
        data-address="' . $row["address"] . '"
        data-ayushmancard="' . $row["ayushmancard"] . '"
        data-abhacard="' . $row["abhacard"] . '"
        data-adharcard="' . $row["adharcard"] . '"


        >'

        . $row["name"] . ' <br> ' . $row["mobile"] .'</div>';
        }
    } else {
      //  echo '<div class="suggestion-item">No results found</div>';
    }
}

$conn->close();
?>