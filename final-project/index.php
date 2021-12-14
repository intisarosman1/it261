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
<?php echo $_SESSION['username']; ?>!
</h3>
<p><a href="index.php?logout='1' ">Log out</a></p>
</div>
<?php endif; ?>

</header>

<div id="wrapper">
<!-- <h1>Welcome to the home page!</h1>-->
<main>
<h1><?php echo $headline; ?></h1><br>
<p>This website serves to commemorate games and excite all kinds of gamers. From here, enjoy navigating to 
    the other pages and their fun content! <br><br> Check out my Game Daily page for a random assortment of games- some you 
    definitely will recognize! You can fill out my questionnaire on my Contact page to share your favorite 
    types of games.<br><br>
    Play on :)</p><br><br>
    
    
</main>
</div>

<aside>
<br>
<!-- <h3>My aside for my form</h3><br>-->
<img src="images/example.jpg" alt="example" class="pic">
<p>From <i>Super Mario Bros</i></p><br>
</aside>


<?php include('includes/footer.php');