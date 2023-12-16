<?php

    $sid =$_GET["sbut"];
    $q =$_GET["q"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zafaran";


$connn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM subtype where subid= $sid";
$res=$connn->query($sql);
$count=$res->num_rows;

$type= 0;
$price= 0;
$subname= '';

if($count>0) {
    $row = $res->fetch_object();
    $type= $row->tid;
    $price= $row->price;
    $subname= $row->subname;
}
$type = intval($type);
$sid =intval( $sid);
$q=intval($q);

session_start();
$userid=$_SESSION['ismem'];
$userid = intval($userid);

$totprice=$q * $price;
/*if($totprice === 10){
    print 4;
}
else {print 9;}*/
$connn->close();

$date=date();

$conn2 = new mysqli($servername, $username, $password, $dbname);
$sql2 = "INSERT INTO oorder (id, tid, subid, quantity, total )
VALUES ('$userid','$type','$sid','$q','$totprice')";

if ($conn2->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn2->error;
}

/*







*/
?>