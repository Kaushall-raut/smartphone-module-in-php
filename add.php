<?php

 $id=$_REQUEST['phid'];
 $company=$_REQUEST['company'];
 $model=$_REQUEST['model'];
 $price=$_REQUEST['price'];
 $RAM=$_REQUEST['ram'];
 $zoom=$_REQUEST['zoom'];
$SIM=$_REQUEST['sim'];

$_REQUEST['sim']=="yes"?$SIM=true:$SIM=false;

// if($_REQUEST['sim']=="yes"){
//     $SIM=true;
// }else{
//     $SIM=false;
// }




$conn=mysqli_connect("localhost","root","","assignments");
if($conn){
    
    if(isset($_REQUEST['add'])){

        $cmd="insert into `mobile` values('$id','$company','$model','$RAM','$price','$zoom','$SIM')";
        mysqli_query($conn,$cmd);

        header("location:products.php");
    }


}

?>