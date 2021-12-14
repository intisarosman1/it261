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
<p><a href="switch.php?logout='1' ">Log out</a></p>
</div>
<?php endif; ?>

</header>


<div id="wrapper">
<main>
<!--<h2><?php echo $headline; ?></h2><br>-->
<?php echo $special; ?><br><br>
<p><?php echo $content;?></p><br><br><br>

<h2><i>More daily specials!</i></h2><br>
<ul>
    <li><a href="switch.php?today=Sunday" class="days">Sunday</a></li>
    <li><a href="switch.php?today=Monday" class="days">Monday</a></li>
    <li><a href="switch.php?today=Tuesday" class="days">Tuesday</a></li>
    <li><a href="switch.php?today=Wednesday" class="days">Wednesday</a></li>
    <li><a href="switch.php?today=Thursday" class="days">Thursday</a></li>
    <li><a href="switch.php?today=Friday" class="days">Friday</a></li>
    <li><a href="switch.php?today=Saturday" class="days">Saturday</a></li>
</ul>
</main>

<aside>
<img src="images/<?php echo $pic; ?>" alt="<?php echo $alt ?>" class="pic">
</aside>

<?php 
include('includes/footer.php'); ?>