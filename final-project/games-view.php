<?php // games-view.php

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

<?php
if(isset($_GET['id'])) {
$id = (int)$_GET['id'];

} else {
    header('Location: games.php');

}

$sql = 'SELECT * FROM games WHERE game_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
$brand = stripslashes($row['name']) ;
$type = stripslashes($row['genre']) ;
$net_wt = stripslashes($row['age']) ;
$ingredients = stripslashes($row['device']) ;
$description = stripslashes($row['description']) ;
$feedback = '';
}

} else {
$feedback = 'Something is not working!';
}

// for the big assignment you will now call out the header include
//include('includes/header.php');

?>


<main>
<h1>Welcome to the <?php echo $brand ;?> page!</h1>

<?php 
if($feedback == '') {
echo '<ul>';
echo '<li><b>Name:</b> '.$name.'</li>';
echo '<li><b>Genre(s):</b> '.$genre.'</li>';
echo '<li><b>Age Requirement:</b> '.$age.'</li>';
echo '<li><b>Device Availability:</b> '.$device.'</li>';
echo '</ul>';
echo '<p>'.$description.'</p>';
echo '<br><p>Return back to the <a href="games.php">games page!</a></p>';
}

?>

</main>

<aside>
<?php
if($feedback == '') {
echo '<img class="center" src="images/game'.$id.'.jpg" alt="'.$name.' ">';
}
?>

</aside>

</div> <!-- end wrapper -->

<?php

mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');
