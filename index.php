<?php
include "config.php";


if(isset($_POST['but_submit'])){

    $uname = ($_POST['txt_uname']);
    $password = ($_POST['txt_pwd']);


    if ($uname != "" && $password != ""){
        $sql_query = "select * from users where username='".$uname."' and pass='".$password."'";
        $result = pg_query($con,$sql_query);
        $row = pg_fetch_assoc($result);


        if($row['username']){
            $_SESSION['uname'] = $uname;
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<html>
    <head>
        <title>Create simple login page with PHP and MySQL</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <form method="post" action="">
                <div id="div_login">
                    <h1>Login</h1>
                    <div>
                        <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                    </div>
                    <div>
                        <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
                    </div>
                    <div>
                        <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                    </div>
                    <div>
                    <span>Remember</span>
                        <input type="checkbox" />
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>

