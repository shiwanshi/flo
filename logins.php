<?php
session_start();
$user=$_POST['username'];
$pass=$_POST['password_new'];

$conn = new mysqli('localhost', 'root', '', 'userdetails');
if ($conn->connect_error){
  die("Connection failed: ". $conn->connect_error);
}


if(isset($_POST['username'])&& isset($_POST['password_new']))
{
  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

$username = validate($user);

$password = validate($pass);

$sql = "SELECT * FROM visitor WHERE username='$username' AND password='$password'";

$result=$conn->query($sql);


if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);

    if ($row['username'] === $user && $row['password'] === $pass) {


        $_SESSION['loggedin'] = TRUE;
        $_SESSION['message']="You are now logged in.";
        $_SESSION['username'] = $row['username'];

        $_SESSION['name'] = $row['name'];

        $_SESSION['id'] = $row['vid'];
        header("Location: index.php");
       

        exit();

    }else{
?>
<script>

    alert("Invalid username or password");
    window.location.href = "login.php";
    </script>
<?php
       



    }


}else{
    ?>
    <script>

alert("Invalid username or password");
window.location.href = "login.php";
</script>
    <?php
  
    exit();

}

}
?>




