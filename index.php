<?php 
$firstname=$_REQUEST['firstname'];
$age=$_REQUEST['age'];
$pass=$_REQUEST['pass'];



if(isset($_POST['btn']))
{
$host="localhost";
$user="root";
$password="";
$db="custumers";


$conn = mysqli_connect($host,$user,$password,$db);


$insert= "insert into visitorsinfo values('$firstname','$age','$pass')";
 

mysqli_query($conn,$insert);


if($conn){
    echo("<h1 style='color:green'> YOUR INFORMATION IS DONE</h1>");
}
else {
    echo("<h1 style='color:red'> MISS UNDERSTAND</h1>");
}

}



?>
