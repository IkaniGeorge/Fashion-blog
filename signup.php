<?php  
require 'config/constants.php';

//getting back form data if there was an error!!
$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;

//delete signup data session
unset($_SESSION['signup-data']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="css/style.css">
    <!----ICONSCOUT CDN STYLESHEET FOR ICONS ----->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.2.0/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>


<section class="form-section">
    <div class="container form-section-container">
        <h2>Sign Up</h2>
        <?php if (isset($_SESSION['signup'])) : ?>
         <div class="alert-message error">
             <p>
                <?= $_SESSION['signup'];
                unset($_SESSION['signup']);
                 ?>
             </p>
         </div>
            <?php endif ?>
         <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="First Name">
            <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Last Name">
            <input type="text" name="username" value="<?= $username ?>" placeholder="Username">
            <input type="text" name="email" value="<?= $email ?>" placeholder="Email">
            <input type="password" name="createpassword" value="<?= $createpassword?>" placeholder="Create password">
            <input type="password" name="confirmpassword" value="<?= $confirmpassword?>" placeholder="Confirm password">

            <div class="form-control">
                <label for="avatar">User Avatar</label>
                <input type="file" name="avatar" id="avatar">

            </div>

            <button type="submit" name="submit" class="btn">Sign Up</button>
            <small>Already have an account? <a href="signin.php">Sign in</a></small>
         </form>
    </div>
</section>

