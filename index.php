

<?php
include('header.php');

?>
    <div class="slider_container">
            <div class="text-container">
                    <a class="prev" onclick="nextSlide(-1)" >&#10094;</a>
                    
            </div>
            <div class="myimage">
        <ul id="slides">
                <li class="slide showing"><img src="img/cyber.jpg" alt=""></li>
                <li class="slide"><img src="img/witcher.png" alt=""></li>
                <li class="slide"><img src="img/wwe.png" alt=""></li>
                <li class="slide"><img src="img/dying-light-2.png" alt=""></li>
                <li class="slide"><img src="img/cyber.jpg" alt=""></li>
                
            </ul>
            
  <a class="next" onclick="nextSlide()" style="margin-right: 20px;">&#10095;</a>
        </div>
        
        
            
            
        </div>
        
        <div name="rbutton" id="rbutton">
            <ul>
                <li><input type="radio" name="pic" class="btn"></li>
                <li><input type="radio" name="pic" class="btn"></li>
                <li><input type="radio" name="pic" class="btn"></li>
                <li><input type="radio" name="pic" class="btn"></li>
                <li><input type="radio" name="pic" class="btn"></li>
            </ul>
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
                        $sel="SELECT * from review order by sn limit 4";
                        $seq=mysqli_query($con,$sel);
                        while($row=mysqli_fetch_array($seq))
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
        <button name="sign"  >Signup Today</button>
             <p style="padding-left: 30px;float:left;">Hello! If you want to be a member of GamingSathi<br>
             You can SIGNUP here!</p>
             
        </div>
        <?php
    include('footer.php');
    ?>
    