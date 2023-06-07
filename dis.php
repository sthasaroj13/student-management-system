<?php
session_start();
// echo "WELCOME";


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
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        /* background: url(mu.jpg);
        background-repeat: no-repeat;
        background-size: 100%; */
    }

    table {
        background: rgba(193, 205, 215, 0.675);
        margin: 10rem auto;
        padding: 10px
    }

    table tr {
        color: darkblue;
        font-size: 25px;
        font-weight: bold;
        text-transform: capitalize;

    }

    h1 {
        margin-left: 40%;
        margin-top: 10px;
        font-size: 35px;
        color: darkred;
        background-color: yellow;
        width: 25%;
        padding: 1px;
    }

    .update,
    .delete {
        text-decoration: none;
        background: lightgreen;

        border: none;
        padding: 5px;
        cursor: pointer;
        font-size: 25px;

        border-radius: 5px;
    }

    .update:hover {
        background: rgb(16, 134, 16);
        color: white;

    }

    .delete {
        background: red;
    }

    .delete:hover {
        color: white;
    }
    /* .navbar{
        background: blue;
        height: 100rem;
        width: 20%;
    } */

    .logout{
        border: none;
        border-radius: 2px;
        background: rgb(16, 134, 16);
        padding: 10px;
        font-size: 20px;
        color: white;
        margin-left: 90rem;
        margin-top: 10px;
        cursor: pointer;

    }
    .logout:hover{

    }
</style>

<body>
<a href="logout.php"><input type="submit" value="Logout" class="logout"></a>    
    
    <h1>STUDENTS DETAILS</h1>

</body>

</html>
<?php
require "sub.php";
$profile = $_SESSION['studentname'];
if ($profile == true) {
} else {
    header('location:login.php');
}

$query = "select * from register";
$data = mysqli_query($conn, $query);
$final = mysqli_num_rows($data);

// $result=mysqli_fetch_assoc($data);
// echo $result['studentname']." ".$result['studentaddress']." ".$result['studentphone']
//     ." ".$result['studentroll']." ".$result['studentclass']."<br>";
if ($result = !0) {
?>

    <center>

        <table border="3px solid red" cellspacing="8" width="">
            <tr>
                <th>ID</th>
                <th>StudentName</th>
                <th>StudentAddress</th>
                <th>Studentphone</th>
                <th>Studentroll</th>
                <th>Studentclass</th>
                <th width="20%">Operation</th>
               
            </tr>

        <?php
        while ($result = mysqli_fetch_assoc($data)) {
            echo "
        <tr>
        
        <th>" . $result['id'] . "</th>
        <th>" . $result['studentname'] . "</th>
        <th>" . $result['studentaddress'] . "</th>
        <th>" . $result['studentphone'] . "</th>
        <th>" . $result['studentroll'] . "</th>
        <th>" . $result['studentclass'] . "</th>
        
        <th><a href='update.php?id=$result[id]'><input type='submit' value='Update' class='update'><a>
        <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick ='return check()'><a>
        </th>
        
    
        </tr>
        ";
        }
        // echo"data inserted";
    } else {
        echo "data is not";
    }

        ?>
        </table>
    </center>



    <script>
        function check() {
            return confirm('Are you sure to delete  this record ?');
        }
    </script>






    <!-- <th><a href='update.php?id=$result[id]&sname=$result[studentname]&sadd=$result[studentaddress]&sroll=$result[studentroll]&sclass=$result[studentroll]'>update<a></th> -->