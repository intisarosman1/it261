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
    <div id="hero">
    </div> <!--end hero-->
<main>
<h1><?php echo $headline; ?></h1><br>


<?php 
$sql = 'SELECT * FROM games';

// connect to database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));


$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
echo '<h3>For more information about '.$row['name'].', please click <a href="games-view.php?id='.$row['game_id'].' ">here!</a></h3><br>';
echo '<ul>';
echo '<li>'.$row['name'].'</li>';
echo '<li>'.$row['genre'].'</li>';
echo '<li>'.$row['age'].'</li><br>';
echo '</ul>';
echo '<hr>';
}

} else {
echo 'Houston, we have a problem!';
}

mysqli_free_result($result);
mysqli_close($iConn);

?>


</main>

<aside>
<br>
<h3>Games Galore!</h3><br>
<img src="images/shelf.jpg" alt="shelf" class="pic">
</aside>

<?php 
include('includes/footer.php'); ?>