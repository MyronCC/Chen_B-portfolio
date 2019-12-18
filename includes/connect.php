<?php
$host = "server165.web-hosting.com"; // server165.web-hosting.com / localhost
$user = "bchegkya_MyronCC"; // bchegkya_MyronCC / root
$pw = "MyronChen"; // MyronChen / root
$db = "bchegkya_My_Projects"; // bchegkya_My_Projects

$conn = mysqli_connect($host, $user, $pw, $db);

if (!$conn) {
    echo "no soup for you!";
    die;
}

//echo "connected";

if (isset($_GET["id"])) {
    $theLabel = $_GET["id"];

    $myQuery = "SELECT * FROM project_details WHERE id='$theLabel'";

    $result = mysqli_query($conn, $myQuery);
    $rows = array();

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    //var_dump($rows);

    echo json_encode($rows[0]);
}
?> 