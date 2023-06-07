<?php
require "sub.php";

$id = $_GET['id'];
$query = "SELECT * FROM register where id ='$id' ";

$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .sub input {
        width: 20px;
    }
</style>

<body>

    <div class="form_item">
        <label for="">Student Name:</label>
        <input type="text" id="sname" placeholder="Name" name="sname" value="<?php echo $result['studentname'] ?>" required>
    </div>
    <div class="form_item">
        <label for="">Student Address:</label>
        <input type="text" id="saddress" placeholder="Address" name="saddress" value="<?php echo $result['studentaddress'] ?>" required>
    </div>
    <div class="form_item">
        <label for="">Student Number:</label>
        <input type="number" id="snum" placeholder="phone" name="sphone" value="<?php echo $result['studentphone'] ?>" required>
    </div>
    <div class="form_item">
        <label for="">Student Roll.NO:</label>
        <input type="number" id="sroll" placeholder="ROll.No" name="sroll" value="<?php echo $result['studentroll'] ?>" required>
    </div>
    <div class="form_item">
        <label for="">Student class:</label>
        <input type="number" id="sclass" placeholder="class" name="sclas" value="<?php echo $result['studentclass'] ?>" required>
    </div>
    <div class="sub">
        <label for="">Subject:</label> <br>
        <label for="">maths</label>
        <input type="number" name="mth">
        <label for="">science</label>
        <input type="number" name="sci">
        <label for="">social</label>
        <input type="number" name="soc">
        <label for="">nepali</label>
        <input type="number" name="nep">



    </div>
    <br> <br>
    <div class="form_item">

        <input type="submit" value="result" class="btn" name="submit">
    </div>

    <p id="para"></p>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$math =$_POST['mth'];
$science =$_POST['sci'];
$social =$_POST['soc'];
$nepali =$_POST['nep'];



}



?>
<!-- <script>
    let studentname = document.getElementById('sname');
    let studentaddress = document.getElementById('saddress');
    let studentphone = document.getElementById('sphone');
    let studentroll = document.getElementById('sroll');
    let studentclass = document.getElementById('sclass');
    let btn = document.querySelector('.btn');
    let para = document.querySelector('#para');
    btn.addEventListener('click', function() {

        document.write('studentname', 'studentaddress', 'studentphone','studentroll','studentroll');
    })
</script> -->
