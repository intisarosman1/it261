<?php 

// people.php
// people-view.php
// config.php
// credentials.php

include('config.php');
include('includes/header.php');

// for big database assignment, header include would go right here!

// grab table and assign it to a variable
?>
<main>
<h1>Welcome to my People Page Class Exercise</h1>

<?php 
$sql = 'SELECT * FROM people';

// connect to database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));


$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
echo '<h3>For more information about '.$row['first_name'].', please click <a href="people-view.php?id='.$row['people_id'].' ">here!</a></h3>';
echo '<ul>';
echo '<li>'.$row['first_name'].'</li>';
echo '<li>'.$row['last_name'].'</li>';
echo '<li>'.$row['email'].'</li>';
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
<h3>My Mystery Aside</h3>
</aside>

</div> <!-- end wrapper -->

<?php
include('includes/footer.php');