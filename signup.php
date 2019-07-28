<html>
    <head>
        <title>Signin!</title>
        <link rel="stylesheet" href="signup.css">
    </head>
    <body>
        <div class="container">
        
        <div class="images">
            <h2>Get started with an account to enjoy</h2><img src="image/guffTest.png" alt="" style="height: 100px;
            width: 120px;">
            <br><br>
            <h3>Its not just a messaging platform</h3>
            
            <div id="icons">
            <div class="service">
            <img src="image/chat-512.png" alt="" >
            <p>Chat</p>
        </div>
        <div class="service">
            <img src="image/call.png" alt="" >
            <p>Audio</p>
        </div>  
        <div class="service">
            <img src="image/video.png" alt="">
            <p>Video</p>
        </div>
        <div class="service">
            <img src="image/online.png" alt="" >
            <p>Online Transaction</p>
        </div>
    </div>
    

    <div id="assosciation">
    <h3>
       Other available Services with assosciation with
    </h3>
    
    <div class="service2" style="margin-left: 30%;">
            <img src="image/esewa-logo.png" alt="" >
            
        </div>
        <div class="service2">
                <img src="image/ipay.png" alt="" >
                
            </div>
            <div class="service2">
                    <img src="image/khalti.png" alt="" >
                    
                </div>
                <div class="news">
                    <h1>Recent News</h1>
                <div class="article">
                    <img src="image/elon.jpg" alt="">
                    <h2>Welcome to GuffGaff</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit..</p>
                    <a href="">view more</a>
                </div>
                <div class="article">
                <img src="image/elon.jpg" alt="">
                    <h2>First Blog</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit..</p>
                    <a href="">view more</a>
                </div>
                <div class="article">
                <img src="image/elon.jpg" alt="">
                    <h2>News One</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit..</p>
                    <a href="">view more</a>
                </div>
                <div class="article">
                <img src="image/elon.jpg" alt="">
                    <h2>Article One</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit..</p>
                    <a href="">view more</a>
                 </div>
                </div>

</div>
        </div>

        <div class="actualform">
                <div id="login">
                    <form action="signup.php" method="POST">
                            <div id="text">
                                    <span style="font-size: 18px;font-weight:bold;">Login</span>
                                </div>
                            <label >Name</label><br>
                            <input type="text" name="username" id="username" placeholder="Your Username" class="long" autocomplete="off">
                            <br>
                            <label>Password</label><br>
                            <input type="password" name="log_pass" id="log_pass" class="long" placeholder="Enter password">
                            <br>
                            <button type="submit" name="log" id="log" onclick="validate_login();">Login</button>
                            
                    </form>
                    <?php
                    if(isset($_POST['log']))
                    {
                        $user=$_POST['username'];
                        $pass=$_POST['log_pass'];
                        $con=mysqli_connect('localhost','root','','gamingsathi') or die('Connection Failure');
                        $sel="SELECT * from login where username='$user' and password='$pass'";
                        $selq=mysqli_query($con,$sel);
                        $row=mysqli_fetch_array($selq);
                        if($row==0)
                        {
                            echo "Incorrect password or username";
                        }
                        else{
                            session_start();
                            $_SESSION['username']=$user;
                            header("location:index.php");
                        }
                
                    }
                    
                    ?>
                </div>
                <div id="register">
                <div id="text">
                        <span style="font-size: 18px;font-weight:bold;">Create a New Account</span>
                    </div>
            <form action="insert.php" method="POST">
                <label >Name</label><br>
                <input type="text" name="first" id="first" placeholder="First" required><input type="text" name="second" id="second" placeholder="Last" required>
                <br>
                <label>Choose your user name</label><br>
                <input type="text" name="userQ" id="userQ" class="long" placeholder="Enter username" required>
                <br>
                <label>Create a password</label><br>
                <input type="password" name="pass" id="pass" class="long" placeholder="Enter password" required>
                <br>
                <label>Confirm password</label><br>
                <input type="password" name="confirm_pass" id="confirm_pass" class="long" placeholder="Confirm password" required>
                <br>
                <label>Birthday</label><br>
                <select name="month" id="month" value="month" required>
                    <option value="" hidden>month</option>
                    <option value="">Jan</option>
                    <option value="">Feb</option>
                    <option value="">Mar</option>
                    <option value="">Apr</option>
                    <option value="">May</option>
                    <option value="">Jun</option>
                    <option value="">Jul</option>
                    <option value="">Aug</option>
                    <option value="">Sept</option>
                    <option value="">Oct</option>
                    <option value="">Nov</option>
                    <option value="">Dec</option>
                </select>
                <input type="number" class="birth" placeholder="Day" required maxlength="2" name="days">
                <input type="number" class="birth" placeholder="Year" required min="1980" name="years">
                <br>
                <label>Gender</label><br>
                <input type="radio" name="gender" id="gender" value="male" ><label style="margin-top: 0px;display: inline-block;">Male</label>
                <input type="radio" name="gender" id="gender" value="female" ><label style="margin-top: 0px;display: inline-block;">Female</label>
                <input type="radio" name="gender" id="gender" value="other"><label style="margin-top: 0px;display: inline-block;">Others</label>
                <br>
                <label>Mobile phone</label><br>
                <input type="number" class="long" placeholder="98XXXXXXXX" maxlength="10" required name="num">
                <br>
                <!-- <label >Your current email address</label><br>
                <input type="email" id="email name="yes" class="long" placeholder="example@gmail.com" required>
                <br> -->
                <label>Location</label><br>
                <input type="text" id="location" name="location" class="long" placeholder="Eg:City,State,Country" required><br>

                <input type="checkbox" name="check" required style="margin:0 0 0 20px;">
                
                <label for="check" style="font-size:12px;margin-top:-25px;padding-left:25px;display:block;float:left;">
                By clicking Sign Up, you agree to our Terms, Data Policy and Cookies Policy. You may receive SMS Notifications from us and can opt out any time.
</label>
                <button type="submit" name="sign" id="sign" onclick="validate_sign();">Sign Up</button>

            </form>
        </div>
    </div>
        <div id="empty" style="float: left;height: 20px;width: 100px;">

            </div>
        </div>
       <script src="myscript.js"></script>
    </body>
</html>