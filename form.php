<?php
$Name =$_POST['Name'];
$How_many_people=$_POST['How_many_people'];
$Select_date=$_POST['Select_date'];
$Requirements=$_POST['Requirements'];


//database connect
$conn = mysqli_connect('localhost:3307','root','root','form');
if($conn->connect_error){
	die('Connection failed: ' .$conn->connect_error);

}

$sql1 = "INSERT into booking(Name, How_many_people, Select_date, Requirements) VALUES ('$Name', $How_many_people, $Select_date, '$Requirements') ";
$inserted =$conn->query($sql1);
if($inserted ==TRUE){
    echo "Inserted";
}
else{
    echo "Error";
}

?>