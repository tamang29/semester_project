<?php
include('header.php');
?>

<?php

$content=$_POST['field'];

$con=mysqli_connect('localhost','root','','gamingsathi') or die('Connection Failure');
$se="SELECT * from esports like '%$content%'";
$sel=mysqli_query($con,$se);
if(!$sel)
{
    echo "Error";
}
else{
$row=mysqli_fetch_array($sel);

if($row==0)
{
    echo "Nothing similar to search content.";
}
else{
?>
    
<div>
<img src="<?php echo $row['photo'];?>">
<p><?php echo $row['headline'];?></p>
    
</div>




    <?php


}
}

include('footer.php');

?>