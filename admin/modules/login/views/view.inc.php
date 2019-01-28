<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <!-- Bootstrap Core CSS -->
        <link href="../template/backend/css/bootstrap.min.css" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>ADMIN PANEL LOGIN</title>
        <link rel="icon" href="../template/backend/images/logo/logo.png" type="image/png">
        <script>
            function refresh(){
                location.reload();
            }

            function error(){
                alert("Can not login. Please check your username and password.");
                document.getElementById("error").innerHTML = "username and password.";
            }
        </script>
    </head>
    <style type="text/css">
        body{
            background-image: url('../template/frontend/images/background/bg_home.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            height: 100vh;
        }
        .login-panel {
            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -300px; 
            margin-left: -135px; 
            background-color: #000; 
            border-radius: 3px; 
            padding: 15px; 
            width: 380px; 
            height: 380px; 
            box-shadow: 7px 7px 16px 0px rgba(50, 50, 50, 0.67);
            opacity: 0.85;
            filter: alpha(opacity=85); /* For IE8 and earlier */
        }
        .btn-yellow {
            color: #000;
            background-color: #f47322;
            border-color: #f47322;
        }
    </style>
    <body>
        <div class="container">
            <iframe id="checklogin" name="checklogin" src="" hidden></iframe>
            <form class="login-panel" action="check_login.php" method="post" target="checklogin">
                <div align="center"><img style="width:180px; height:180px;" src="../template/backend/images/logo/logo.png"></div>
                <div style="padding: 0px 40px;">
                    <input required name="username" id="username" type="text" class="form-control form-control-sm" autocomplete="false" placeholder="Username" autofocus>
                    <input required name="password" id="password" type="password" style="margin-top:10px;" class="form-control form-control-sm" autocomplete="false" placeholder="Password">
                    <div style="padding-top:15px;" align="right">
                        <button type="button" class="btn btn-sm btn-light" style="cursor: pointer;" onclick="window.location='../'">go to home page</button>
                        <button type="submit" class="btn btn-sm btn-yellow" style="cursor: pointer;" >Login</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>