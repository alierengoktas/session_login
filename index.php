<link rel="stylesheet" href="style.css">


<?php 
    // session start command
    session_start();

    $loginAlert = "Please Login! <br> username : user <br> password : userpass";
    

    // if the login button is pressed
    if(isset($_POST['loginButton'])){

        if($_POST['userName'] == "user"){

                if($_POST['userPassword'] == "userpass"){
                    $_SESSION['login'] = 1;
                    $loginAlert = "login successful";
                }else{
                    $loginAlert = "password is wrong";
                }

        }else{
            $loginAlert = "username is wrong";
        }
            

}



    // if logout button is pressed
    if(isset($_GET['logout'])){
        session_destroy();
        header('Location:index.php');
} ?>








<form method="post" autocomplete="off">
    <input type="text" name="userName" placeholder="username" required>
    <input type="password" name="userPassword" placeholder="password" required>

    <button type="submit" name="loginButton">Login</button>
</form>



<div>
<p><?= $loginAlert ?></p>


<?php
    // logout button
    if(isset($_SESSION['login'])){ ?>

<a href="?logout=1">Logout</a>

<?php } ?>


</div>
