<?php
//include('vendor/autoload.php');
include 'connect.php';


     if(isset($_POST['register']))
    {
       // $filename =  $_FILES["uploadfile"]["name"];
       // $tempname =  $_FILES["uploadfile"]["tmp_name"];
       // $folder = "images/".$filename;
       // move_uploaded_file($tempname,$folder);

        $name  = $_POST['name'];
       // $regn  = $_POST['regno'];
        //$sroll = $_POST['ssc'];
        
       // $hroll = $_POST['hsc'];
        $par   = $_POST['paradd'];
      //  $pst   = $_POST['preadd'];
       // $gen   = $_POST['gender'];
       // $unit  = $_POST['unit'];
       // $tid   = $_POST['trstno'];
        $phn   = $_POST['phone'];
        $email = $_POST['email'];

$query = "INSERT INTO student VALUES('','$name','$par','$phn','$email')";
  $data = mysqli_query($conn, $query);
//   if (mysqli_connect_errno()) {
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     exit();
//   }
if($data)
header('location:reg.php');
echo 'data added successfully';
 
//  
// if ($mysqli -> connect_errno) {
//     echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//     exit();
//   }
  
//   // Perform a query, check for error
//   if (!$mysqli -> query("INSERT INTO student VALUES('','$name','$par','$phn','$email')")) {
//     echo("Error description: " . $mysqli -> error);
//   }
  
//   $mysqli -> close();
}

  
  

// if($data)
// echo 'data added successfully';
 
//  }
//  else{
//     echo $conn->error;
//  }
?>
 