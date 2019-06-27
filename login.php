<?php include "header.php"?>
                </div>
                <!--login-->
                    <form method="POST">
                            <div class="inp" id="login">
                        <h1><u>Login</u></h1>
                        <br>
                        <p style="margin-left:50px;">Username:</p>
                            <input type="text" style="margin-left:50px;" placeholder="Username">
                        
                        <br>
                        <p style="margin-left:50px;">Password:<br></p>
                      
                       <input type="password" id="password" style="margin-left:50px;" placeholder="Password">
                        <br>
                        
                        <p style="margin-left:50px;"><button onclick="check();">login</button></p>
                        <script type="text/javascript">
                        function check()
                        {
                            var name=document.getElementById('username');
                            var pass=document.getElementById('password');
                            if(name.value==""||pass.value=="")
                            {
                                alert('All information should be filled.')
                            }
                        }
                        </script>
                        </div>
                        </form>
                    <br>

                    <br>
                    <!--footer-->

                    <?php include "footer.php"?>