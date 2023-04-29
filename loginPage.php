<?php
include ('config/db.php');
    if(isset($_SESSION['admin'])){
        header('location: students/admin-manager.php');
    }else if (isset($_SESSION['user'])){
        header('location:' .SITEURL. 'profile.php');
    }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div id="bg">
</div>

<form method='post' action=''>
    <h1 class="login-title" style='display:flex;justify-content:center'>Account login</h1>
    <?php
    if (isset($_SESSION['login'])){
        echo $_SESSION['login'];
        unset($_SESSION['login']);

    }

    if (isset($_SESSION['no-login'])){
        echo $_SESSION['no-login'];
        unset($_SESSION['no-login']);

    }
    ?>
    <br>
    <div class="form-field">
        <i class="fa-solid fa-user"></i>
        <input type="email"  name ="email" placeholder="Email" required/>
    </div>

    <div class="form-field">
        <i class="fa-solid fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required/>
    </div>

    <div class="form-field">
        <button class="btn" name="submit" type="submit">Log in</button>
        <a class="btn" href='register.php' >Sign up</a>
    </div>
</form>

</body>
</html>


<?php
if(isset($_POST['submit'])) {
//get the data from database
$email=$_POST['email'];
$password=$_POST['password'];

//sql to check if the admin username and password exist or not 
$sql ="SELECT * FROM etudiant WHERE email='$email' AND password='$password'";

//execution the query
$query_run = mysqli_query($conn,$sql) or die(mysql_error());

$row=mysqli_fetch_assoc($query_run);
$nom = $row['nom'];
$prenom = $row['prenom'];
//count the rows to check if the admin exist or not
$res=mysqli_num_rows($query_run);

if ($res==1){
    if ($row['email']=='yassin@gmail.com'){
    $_SESSION['login']="<div class='success'>Connexion réussite avec $nom $prenom &#128515 </div>";
    header('location:' .SITEURL. 'students/Admin-manager.php');
    $_SESSION['admin']=$email;
    // $_SESSION['id']=
    }else if ($row['email']==$email){
        $_SESSION['login']="<div class='success'>Connexion réussite avec $nom $prenom &#128515 </div>";
        header('location: profile.php');
        $_SESSION['user']=$email;
    }
}
else{
    $_SESSION['login']="<div class='failed'>username or password dos not correct &#128532</div>";
    header('location:' .SITEURL. 'loginPage.php');
}
}
?>