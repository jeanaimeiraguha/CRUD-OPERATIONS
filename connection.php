<?php
$conn=mysqli_connect('localhost','root','','example');
if($conn){
    echo  'connected sucessfully';
}
else{
    echo 'initial not working';
}
?>