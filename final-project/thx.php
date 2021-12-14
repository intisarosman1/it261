<?php

session_start();

include('config.php');

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first!';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('includes/header.php');

if(isset($_SESSION['success'])) :?>

<div class="success">
<h3>
<?php echo $_SESSION['success'];
    unset($_SESSION['success']);
?>
</h3>
</div>

<?php endif;

if(isset($_SESSION['username'])) :?>
<div class="welcome-logout">
<h3>Hello
<?php echo $_SESSION['username']; ?>
</h3>
<p><a href="switch.php?logout='1' ">Log out</a></p>
</div>
<?php endif; ?>

</header>


    <div id="wrapper">
    <div id="hero">
    </div> <!--end hero-->
<main>
<h1><?php echo $headline; ?></h1><br>
<p>Your form has been sent.</p><br>
<h2>Thank you!</h2>
<?php include('includes/form.php'); ?>
</main>

<aside>
<br>
<!-- <h3>My aside for my form</h3><br>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis nunc urna. </p><br>-->
<a href="selection"><img src="images/selection.jpg" alt="selection" class="pic"></a>
</aside>

<?php 
include('includes/footer.php'); ?>