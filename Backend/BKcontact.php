<?php

   const SERVER_NAME = 'localhost';
   const USER_NAME = 'root';
   const PASSWORD = '';
   const DATABASE = 'locatordev';

   $connect = mysqli_connect(SERVER_NAME,USER_NAME,PASSWORD,DATABASE) or die('failed to connect');
  
  
   
if(isset($_POST))
{  
    // echo "hello jiii";
    // extract($_POST);
    $Name = $_POST['u_name'];
    $Email = $_POST['u_email'];
    $Phone = $_POST['u_phone'];
    $Subject = $_POST['u_subject'];
    $Message = $_POST['u_msg'];
    
    $current_timestamp = time();
  

//  $insertsql = "INSERT INTO employee(name,email,mobile,address,password,user_file) VALUES('$name','$email','$mobile','$address','$password','$user_file')";

$insertsql = "insert into contactus (Name,Email,Phone,Subject,Message,CreatedDateTime,UpdatedDateTime) values ('$Name','$Email','$Phone','$Subject','$Message','$current_timestamp','$current_timestamp')";

//   $resultinsert = mysqli_query($connect,$sqlinsert) or die("insert sql query failed");

  if(mysqli_query($connect, $insertsql))
  {
    echo 1;
  }else{
    echo 0;
  }

}

?>