<?php
require "sub.php";
$id = $_GET['id'];
$query = "select * from register where id='$id'";
$data = mysqli_query($conn, $query);
// $final = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

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
    h1 {

        font-size: 30px;
        color: #d26578;
        margin-left: 98px;
        margin-bottom: 10px;

    }
</style>

<body>

    <!-- <img src="s.jpg" alt="" height="500px"> -->
    <form action="" method="post">
        <div class="container">
            <h1>Update form</h1>

            <div class="form">

                <div class="form_item">
                    <label for="">Student Name:</label>
                    <input type="text" placeholder="Name" name="sname" value="<?php echo $result['studentname'] ?>" required>
                </div>
                <div class="form_item">
                    <label for="">Student Address:</label>
                    <input type="text" placeholder="Address" name="saddress" value="<?php echo $result['studentaddress'] ?>" required>
                </div>
                <div class="form_item">
                    <label for="">Student Number:</label>
                    <input type="number" placeholder="phone" name="sphone" value="<?php echo $result['studentphone'] ?>" required>
                </div>
                <div class="form_item">
                    <label for="">Student Roll.NO:</label>
                    <input type="number" placeholder="ROll.No" name="sroll" value="<?php echo $result['studentroll'] ?>" required>
                </div>
                <div class="form_item">
                    <label for="">Student class:</label>
                    <input type="number" placeholder="class" name="sclas" value="<?php echo $result['studentclass'] ?>" required>
                </div>
                <div class="form_item">

                    <input type="submit" value="UPDATE" class="btn" name="submit">
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

    //     $sql = "insert into register (studentname,studentaddress,studentphone,studentroll,studentclass) values('$studentname','$studentaddress',
    // '$studentphone','$studentroll','$studentclass')";

    $sql = "update register set studentname='$studentname',studentaddress='$studentaddress',studentphone='$studentphone',studentroll='$studentroll',studentclass='$studentclass' where id='$id'";

    // echo"$sql";
    // exit;


    $data = mysqli_query($conn, $sql);
    if ($data) {
        header('Location: dis.php');
    } else {
        echo "error";
    }
}

?>