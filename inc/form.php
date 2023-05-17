<?php  if(isset($_POST['Name']))
 $firstName = $_POST['Name'];
 if(isset($_POST['lastname']))
 $lastname = $_POST['lastname'];
 if(isset($_POST['email']))
 $email = $_POST['email'];
 if(isset($_POST['submit'])){
 //echo $firstName.' '. $lastname.' '.$email;
 
 $firstName = mysqli_real_escape_string($conn, $_POST['Name']);
 $lastname =mysqli_real_escape_string($conn,  $_POST['lastname']);
 $email = mysqli_real_escape_string($conn, $_POST['email']);

 $sqql="INSERT INTO user(fname,lname,emali) values(
     '$firstName','$lastname',' $email')";

if(empty($firstName)){
    echo 'يرجا ادخال الاسم الاول';
}elseif(empty($lastname)){
    echo 'يرجا ادخال الاسم الثاني';
}elseif(empty($email)){
    echo 'يرجا ادخال ال email';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'صحيح يرجا ادخال ال email';
}else{
if(mysqli_query($conn,$sqql)){
    header('Location: index.php');
 }else{echo 'err' . mysqli_connect_error();
}
}}
?>