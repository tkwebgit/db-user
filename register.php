<?php                      

//if($_POST['submit']=='Register')

{

$user = $_POST['user'];

$password = password_hash($_POST['password']);  //password_hash() is a hashing function



$localhost="localhost";  $user="root";  $password="";  $db="data_collect";

$con = mysqli_connect($localhost,$user,$password);    // Connecting MySQL data base

$sql = " insert into user_table (user_name,password) values ( '$user', '$password' ) ";    // SQL code for insert data in table

$result = mysqli_query ( $con , $sql );  // Executes sql code

if ( $result )

{ echo " Registeration Success ";

}

else

{ echo " Registeration Failed \n Try again ";     // Error message

}

}

?>                  
