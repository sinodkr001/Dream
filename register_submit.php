<?php
require('connection_inc.php');
require('functions.php');
$name=get_safe_value($con,$_POST['name']);
 $email=get_safe_value($con,$_POST['email']);
 $mobile=get_safe_value($con,$_POST['mobile']);
 $added_on=date('y-m-d h:i:s');
 $password=get_safe_value($con,$_POST['password']);
 $check_user=mysqli_num_rows(mysqli_query($con,"select * from users where email='$email'"));
 if ($check_user>0) {
    echo "email_present";
 }else{
 mysqli_query($con,"insert into users(name,email,mobile,added_on,password) values('$name','$email','$mobile','$added_on','$password')");
  echo "insert";
 }

?>