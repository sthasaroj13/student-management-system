<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<style>


</style>

<body>
    <form action="" method="post">

        <div class="center">
            <h1>LOGIN</h1>
            <div class="field">
            
                <input type="text" name="sname" class="textfield" placeholder="Username" autocomplete="off">
            </div>
            <div class="field">
            
                <input type="text" name="phone" class="textfield" placeholder="phone" autocomplete="off">
            </div>
            <div class="field">

                <a href="" onclick="forget()">Forget phone number?</a>
            </div>
            <input type="submit" value="LOGIN" class="brn" name="submit">
            <div class="s">

                <p>If you are New Member </p>
                <a href="form.php">signUp here</a>
            </div>
        </div>
    </form>
</body>
<script>
    function forget() {
        alert(" Remember once again!!!")
    }
</script>

</html>
<?php
include "sub.php";

if (isset($_POST['submit'])) {
    $username =$_POST['sname'];
    $userphone= $_POST['phone'];
    

    

    $query = "SELECT * from register WHERE studentname ='$username' && studentphone='$userphone' ";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    // echo "$total";
    if($total==1){
        $_SESSION['studentname']=$username;
        
        header('location:dis.php');
    }
    else{
        echo"<p class=fail>login failed!!!</p>";
    }
    
}
    ?>