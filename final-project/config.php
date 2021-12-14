<?php // config file

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

$firstname = '';
$lastname = '';
$email = '';
$username = '';
$password = '';
$success = 'You have successfully logged on!';
$errors = array();

 

 

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}


// index.php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['switch.php'] = 'Daily';
$nav['games.php'] = 'Games';
$nav['contact.php'] = 'Contact';


// function for nav, called on header page
function my_nav($nav) {
$my_return = '';
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
$my_return .= '<li><a href="'.$key.'" class="current">'.$value.'</a></li>';
} else {
$my_return .= '<li><a href="'.$key.'">'.$value.'</a></li>';
} // end else
} // end foreach
return $my_return;
} // end function


switch(THIS_PAGE) {
    case 'index.php':
    $title = 'Home Page';
    $body = 'home';
    $headline = 'Welcome to my Home page!';
    break;

    case 'about.php':
    $title = 'About Page';
    $body = 'about inner';
    $headline = 'Welcome to my About page!';
    break;

    case 'switch.php':
    $title = 'Daily Page';
    $body = 'daily inner';
    $headline = 'Welcome to my Daily page!';
    break;

    case 'games.php':
    $title = 'Games Page';
    $body = 'games inner';
    $headline = 'Welcome to my Games page!';
    break;

    case 'contact.php':
    $title = 'Contact Page';
    $body = 'contact inner';
    $headline = 'Welcome to my Contact page!';
    break;

    case 'thx.php':
        $title = 'Thanks for filling out my form!';
        $body = 'contact inner';
        $headline = '';
        break;

}

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}


// switch

switch($today) {

    case 'Sunday' :
        $special = '<h2>| Sunday | Pac-Man!</h2>';
        $pic = 'pacman.png';
        $alt = 'pacman';
        $content = 'We all know this oldie! This maze game is sure to bring up some nostalgia.';
        $color = 'background-color:rgb(232,232,232)';
    break;
    
    case 'Monday' :
        $special = '<h2>| Monday | Among Us!</h2>';
        $pic = 'amongus.jpg';
        $alt = 'amongus';
        $content = 'Among Us had a tight chokehold on all of us in late 2020. Find out the imposters or reach your end!';
        $color = 'background-color:rgb(232,232,232)';
    break;
    
    case 'Tuesday' :
        $special = '<h2>| Tuesday | Temple Run!</h2>';
        $pic = 'templerun.jpg';
        $alt = 'templerun';
        $content = 'Temple Run used be <i>the</i> game of our childhoods. Don\'t let the monster catch up to you!';
        $color = 'background-color:rgb(232,232,232)';
    break;
    
    case 'Wednesday' :
        $special = '<h2>| Wednesday | Minecraft!</h2>';
        $pic = 'minecraft.png';
        $alt = 'minecraft';
        $content = 'In Minecraft, you can create and build almost anything! Just keep an eye out for any creepy creatures...';
        $color = 'background-color:rgb(232,232,232)';
    break;

    case 'Thursday' :
        $special = '<h2>| Thursday | Doodle Jump!</h2>';
        $pic = 'doodlejump.jpg';
        $alt = 'doodlejump';
        $content = 'In this cute game, you must jump onto the ledges or you\'ll fall to your sad death :( ';
        $color = 'background-color:rgb(232,232,232)';
    break;
    
    case 'Friday' :
        $special = '<h2>| Friday | Roblox!</h2>';
        $pic = 'roblox.jpg';
        $alt = 'roblox';
        $content = 'Roblox is a popular game for people of all ages. There are a variety of games you can play 
        and create on Roblox.';
        $color = 'background-color:rgb(232,232,232)';
    break;
    
    case 'Saturday' :
        $special = '<h2>| Saturday | Rocket League!</h2>';
        $pic = 'rocketleague.jpg';
        $alt = 'rocketleague';
        $content = 'To sum it up, Rocket League is soccer- except with cars!';
        $color = 'background-color:rgb(232,232,232)';
    break;
    
    }


// emailable form php

$first_name = '';
$last_name = '';
$email = '';
$device = '';
$genres = '';
$comments = '';
$privacy = '';

$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$device_Err = '';
$genres_Err = '';
$comments_Err = '';
$privacy_Err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['first_name'])) {
$first_name_Err = 'Please fill out your first name';
} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
$last_name_Err = 'Please fill out your last name';
} else {
    $last_name = $_POST['last_name'];
}

if(empty($_POST['device'])) {
$device_Err = 'Please fill out what device you usually play on';
} else {
    $concerns = $_POST['device'];
}

if(empty($_POST['email'])) {
$email_Err = 'Please fill out your email';
} else {
    $email = $_POST['email'];
}

if(empty($_POST['genres'])) {
$herbs_Err = 'Please choose your favorite genre(s)';
} else {
    $herbs = $_POST['genres'];
}

if(empty($_POST['privacy'])) {
$privacy_Err = 'You MUST agree';
} else {
    $privacy = $_POST['privacy'];
}

if(empty($_POST['comments'])) {
$comments_Err = 'Please share any comments you have!';
} else {
    $comments = $_POST['comments'];
}


function my_genres() {
$my_return = '';
if(!empty($_POST['genres'])) {
$my_return = implode(', ', $_POST['genres'] );
}
return $my_return;

}


if(isset(
$_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['device'],
$_POST['genres'],
$_POST['comments'],
$_POST['privacy']
)) {

$to = 'szemeo@mystudentswa.com';
$subject = 'Test Email,' .date('m/d/y') ;
$body = '
The first name is: '.$first_name.' '.PHP_EOL.'
The last name is: '.$last_name.' '.PHP_EOL.'
Device: '.$device.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Genre(s): '.my_genres().' '.PHP_EOL.'
Comments: '.$comments.' '.PHP_EOL.'
';

/* $headers = array(
'From' => 'noreply@mystudentswa.com',
'Reply-to' => ''.$email.''
); */

mail($to, $subject, $body);
header('Location: thx.php');

}

}

