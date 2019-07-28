

<?php
include('header.php');

?>
<div name="search_bar" class="search_bar">
            <div name="logo" id="logo">
                <a href="">GamingSathi</a>
                <br>
                <span>Connect with your friends and allies</span>
            </div>
            <div name="engine" id="engine">
                <form action="searchcontent.php" method="POST">
                <input type="text" placeholder="Search our Website...." style="margin-right: 3px;" name="field">
                <button type="submit" name="submit" >SEARCH</button>
            </form>
            </div>
        </div>
    <div class="slider_container">
            <!-- <div class="text-container">
                    <a class="prev" onclick="nextSlide(-1)" >&#10094;</a>
                    
            </div> -->
            <?php
           $con=mysqli_connect('localhost','root','','gamingsathi') or die('couldnt connect');
           $sel="SELECT * from slider order by id limit 5";
           $seq=mysqli_query($con,$sel);
           while($row=mysqli_fetch_array($seq,MYSQLI_NUM))
           {}
            ?>
            <a class="prev" onclick="nextSlide(-1)" >&#10094;</a>
            <div class="myimage">
        <ul id="slides">
                <li class="slide showing">
                    
                    <div class="caption">
                    <?php $row[0][0];?>
                    </div>
                    <div class="myimg"><img src="img/<?php echo $row[0][1];?>" alt=""></div>
                    </li>
                   
                    <li class="slide ">
                    
                    <div class="caption">
                        hello again
                    </div>
                    <div class="myimg"><img src="img/witcher.png" alt=""></div>
                    </li>
                <li class="slide"><img src="img/wwe.png" alt=""></li>
                <li class="slide"><img src="img/dying-light-2.png" alt=""></li>
                <li class="slide"><img src="img/skyrim.jpg" alt=""></li>
                
            </ul>
            <a class="next" onclick="nextSlide()" style="margin-right: 20px;">&#10095;</a>
  <!-- <a class="next" onclick="nextSlide()" style="margin-right: 20px;">&#10095;</a> -->
        </div>
        
        
            
            
        </div>
        
        <div name="rbutton" id="rbutton">
            <!-- <ul>
                <li><input type="radio" name="pic" class="btn"></li>
                <li><input type="radio" name="pic" class="btn"></li>
                <li><input type="radio" name="pic" class="btn"></li>
                <li><input type="radio" name="pic" class="btn"></li>
                <li><input type="radio" name="pic" class="btn"></li>
            </ul> -->
            </div>
            <div class="clip">
            Reviews
            </div>
        <div name="review_container" class="review_container">
            <div name="monitor" id="monitor">
                    <img src="img/glory2.jpg"  id="glory" usemap="#photo">
                    

                    <map name="photo">

                        <area shape="rect" coords="29,55,422,226" href="market.html" >

                        <area shape="rect" coords="494,224,619,357" href="market.html" >

                        <area shape="rect" coords="267,436,372,495" href="market.html" >

                        <area shape="rect" coords="135,394,211,479" href="market.html" >

                    </map>
                
            </div>
            <div name="comment" id="comment">
                    
                        <?php
                        /*Selecting img and content for comment*/
                        $con=mysqli_connect('localhost','root','','gamingsathi') or die('couldnt connect');
                        $sel="SELECT * from review order by review_id limit 4";
                        $seq=mysqli_query($con,$sel);
                        while($row=mysqli_fetch_array($seq,MYSQLI_ASSOC))
                        {
                            ?>  
                            <div name="person1" id="right" >
                            <a href="revirew.html"><img src="img/<?php echo $row['image'];?>"></a>
                
                <a href="revirew.html" style="text-decoration: none;color:#55ACEE;"><?php echo $row['person'];?></a>
                      <p><?php echo $row['info'];?>
                    </p>
                     </div>

                        <?php
                        }
                        
                        
                        ?>
                    
                            
            </div>
        </div>
        <div id="signhere">
        <a href="signup.php" name="sign">Signup Now!</a>
        
             <p style="padding-left: 30px;float:left;color:white;text-shadow:2px 2px 1px black;">Hello! If you want to be a member of GamingSathi<br>
             You can SIGNUP here!</p>
             
        </div>
        <?php
    include('footer.php');
    ?>
    