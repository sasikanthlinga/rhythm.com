<?php
$n=$_POST['name'];
$e=$_POST['email'];
$p=$_POST['phone'];
$g=$_POST['gender'];
$i=$_POST['inst'];
$c=$_POST['comment'];
$con=mysqli_connect("localhost","root","","music");
$sql="insert into contact_form(Name,Email,Phone,Gender,Instrument,Comment) values('$n','$e','$p','$g','$i','$c' )";
$r=mysqli_query($con,$sql);
if($r){
    echo "Subscriber details added !!!!";
}
else{
    echo "Subscriber details NOT added!!!!!!";
}



?>