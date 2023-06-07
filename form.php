<?php
require "sub.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="form.css">
</head>
<style>
    h2 {
        color: #c85e70;
        margin-left: 104px;
        margin-bottom: 6px;
    }

    h1 {
        margin-left: 30rem;
        color: #c96375;
    }
</style>

<body>

    <!-- <img src="s.jpg" alt="" height="500px"> -->
    <h1>STUDENT MANAGEMENT SYSTEM</h1>
    <form action="" method="post">
        <div class="container">
            <h2>Register Form</h2>

            <div class="form">

                <div class="form_item">
                    <label for="">Student Name:</label>
                    <input type="text" placeholder="Name" name="sname" required>
                </div>
                <div class="form_item">
                    <label for="">Student Address:</label>
                    <input type="text" placeholder="Address" name="saddress" required>
                </div>
                <div class="form_item">
                    <label for="">Student Number:</label>
                    <input type="number" placeholder="phone" name="sphone" required>
                </div>
                <div class="form_item">
                    <label for="">Student Roll.NO:</label>
                    <input type="number" placeholder="ROll.No" name="sroll" required>
                </div>
                <div class="form_item">
                    <label for="">Student class:</label>
                    <input type="number" placeholder="class" name="sclas" required>
                </div>
                <div class="form_item">

                    <input type="submit" value="SUBMIT" class="btn" name="submit">
                </div>



            </div>
    </form>
    </div>
</body>

</html>
<?php
if (isset($_POST['submit'])) {

    $studentname = $_POST['sname'];
    $studentaddress = $_POST['saddress'];
    $studentphone = $_POST['sphone'];
    $studentroll = $_POST['sroll'];
    $studentclass = $_POST['sclas'];
    

    $sql = "insert into register (studentname,studentaddress,studentphone,studentroll,studentclass) values('$studentname','$studentaddress',
'$studentphone','$studentroll','$studentclass')";
    // echo"$sql";
    // exit;


    $data = mysqli_query($conn, $sql);
    if ($data) {
        header('Location:dis.php');
    } else {
        echo "error";
    }
}

?>