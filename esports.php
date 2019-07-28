<?php
include('header.php');
?>
<div name="esport" class="esports">
<div class="overall_news">
<div id="navigation">
    <div id="title">Esports</div>
    <div id="sort">
        <form action="" method="POST">
        <input type="text" placeholder="Search for article....">
        <button type="submit" name="searc"><i class="fas fa-search"></i></button>
        <select name="" id="">
            <option value="" hidden>Sort By:</option>
            <option value="">Most Popular</option>
            <option value="">Most Recent</option>
        </select>
        </form>
    </div>
</div>
<?php
$v=9;
$con=mysqli_connect("localhost","root","","gamingsathi") or die("connection failure");
$sel="SELECT * from esports order by e_id limit $v";
$selq=mysqli_query($con,$sel);
while($row=mysqli_fetch_array($selq))
{


?>
<div class="article">

    <a href=""><img src="img/<?php echo $row['image'];?>" alt=""></a>
    <p><?php echo $row['title'];?>
        <br>
        <a href="" style="font-size:15px;"><?php echo $row['game'];?>.</a><span style="font-size:12px;"> <?php echo $row['p_date'];?><span>
    </p>
    
    
</div>
<?php
}
?>


<?php

    if(isset($_GET['ids']))
    {
        $con=mysqli_connect("localhost","root","","gamingsathi") or die("connection failure");
$sel="SELECT * from esports where e_id='$v' order by e_id limit 3" or die(mysqli_error($con));
$selq=mysqli_query($con,$sel) or die("error");
while($row=mysqli_fetch_array($selq))
{
?>
<div class="article">

<a href=""><img src="img/<?php echo $row['image'];?>" alt=""></a>
<p><?php echo $row['title'];?>
    <br>
    <a href="" style="font-size:15px;"><?php echo $row['game'];?>.</a><span style="font-size:12px;"> <?php echo $row['p_date'];?><span>
</p>


</div>
<?php
}   
    }
    
?>
<a href="esports.php?ids=1" role="botton" id="show" name="show">Show More</a>
</div>
</div>
<?php
include('footer.php');
?>