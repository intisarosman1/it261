<?php // from header

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';


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
    $title = 'Home Page of my IT261 Website';
    $body = 'home';
    $headline = 'Welcome to my Home page of my IT261 website!';
    break;

    case 'about.php':
    $title = 'About Page of my IT261 Website';
    $body = 'about inner';
    $headline = 'Welcome to my About page of my IT261 website!';
    break;

    case 'daily.php':
    $title = 'Daily Page of my IT261 Website';
    $body = 'daily inner';
    $headline = 'Welcome to Intisar\'s Somali Cuisine!';
    break;

    case 'project.php':
    $title = 'Project Page of my IT261 Website';
    $body = 'project inner';
    $headline = 'Welcome to my Project page of my IT261 website!';
    break;

    case 'contact.php':
    $title = 'Contact Page of my IT261 Website';
    $body = 'contact inner';
    $headline = 'Welcome to my Contact page of my IT261 website!';
    break;

    case 'thx.php':
        $title = 'Thanks for filling out my form!';
        $body = 'contact inner';
        $headline = '';
        break;

    case 'gallery.php':
    $title = 'Gallery Page of my IT261 Website';
    $body = 'gallery inner';
    $headline = 'Welcome to my Gallery page of my IT261 website!';
    break;
}

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}



// daily

switch($today) {

    case 'Sunday' :
        $special = '<h2>| Sunday | Serving you Malawax!</h2>';
        $pic = 'malawax.jpg';
        $alt = 'Malawax';
        $content = '<i>A Somali crepe. This can either be offered as a sweet breakfast topped with oil or ghee 
        and sugar or eaten along with another dish.</i>';
        $color = 'background-color:rgb(232,232,232)';
    break;
    
    case 'Monday' :
        $special = '<h2>| Monday | Serving you Bur!</h2>';
        $pic = 'bur.jpg';
        $alt = 'Bur';
        $content = '<i>Somali fried dough. A popular street snack!</i>';
        $color = 'background-color:rgb(175,202,204)';
    break;
    
    case 'Tuesday' :
        $special = '<h2>| Tuesday | Serving you Kalamudo!</h2>';
        $pic = 'kalamudo.jpg';
        $alt = 'Kalamudo';
        $content = '<i>Handmade noodles cooked in broth.</i>';
        $color = 'background-color:lightyellow';
    break;
    
    case 'Wednesday' :
        $special = '<h2>| Wednesday | Serving you Bariis!</h2>';
        $pic = 'bariis.jpg';
        $alt = 'Bariis';
        $content = '<i>Somali rice seasoned with unique Xawaash spices.</i>';
        $color = 'background-color:rgb(213,232,215)';
    break;

    case 'Thursday' :
        $special = '<h2>| Thursday | Serving you Beer!</h2>';
        $pic = 'beer.jpg';
        $alt = 'Beer';
        $content = '<i>Stirfried liver. A popular Somali breakfast!</i>';
        $color = 'background-color:rgb(224,238,255)';
    break;
    
    case 'Friday' :
        $special = '<h2>| Friday | Serving you Sambuusi!</h2>';
        $pic = 'sambuusi.jpg';
        $alt = 'Sambuusi';
        $content = '<i>A Somali fried trianble pastry stuffed with meat, potato, spices, and other fillings. 
        Another popular street snack!</i>';
        $color = 'background-color:rgb(237,229,255)';
    break;
    
    case 'Saturday' :
        $special = '<h2>| Saturday | Serving you Baasto!</h2>';
        $pic = 'baasto.jpg';
        $alt = 'Baasto';
        $content = '<i>Pasta cooked with suugo (a Somali tomato sauce with beef).</i>';
        $color = 'background-color:rgb(255,241,237)';
    break;
    
    }


// emailable form php

$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$concerns = '';
$herbs = '';
$comments = '';
$privacy = '';

$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$phone_Err = '';
$concerns_Err = '';
$herbs_Err = '';
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

if(empty($_POST['gender'])) {
$concerns_Err = 'Please fill out your concerns';
} else {
    $concerns = $_POST['concerns'];
}

if(empty($_POST['email'])) {
$email_Err = 'Please fill out your email';
} else {
    $email = $_POST['email'];
}

if(empty($_POST['herbs'])) {
$herbs_Err = 'Please choose your herb';
} else {
    $herbs = $_POST['herbs'];
}

if(empty($_POST['privacy'])) {
$privacy_Err = 'You MUST agree';
} else {
    $privacy = $_POST['privacy'];
}

if(empty($_POST['comments'])) {
$comments_Err = 'Please share your comments with us!';
} else {
    $comments = $_POST['comments'];
}

if(empty($_POST['phone'])) {  // if empty, type in your number
$phone_Err = 'Your phone number please!';
} elseif(array_key_exists('phone', $_POST)){
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
$phone_Err = 'Invalid format!';
} else{
$phone = $_POST['phone'];
}
}


function my_herbs() {
$my_return = '';
if(!empty($_POST['herbs'])) {
$my_return = implode(', ', $_POST['herbs'] );
}
return $my_return;

}


if(isset(
$_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['phone'],
$_POST['concerns'],
$_POST['herbs'],
$_POST['comments'],
$_POST['privacy']
)) {

$to = 'szemeo@mystudentswa.com';
$subject = 'Test Email,' .date('m/d/y') ;
$body = '
The first name is: '.$first_name.' '.PHP_EOL.'
The last name is: '.$last_name.' '.PHP_EOL.'
Concerns: '.$concerns.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Phone: '.$phone.' '.PHP_EOL.'
Herb: '.my_herbs().' '.PHP_EOL.'
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


// my random images

$pictures = array(
    'picture1',
    'picture2',
    'picture3',
    'picture4',
    'picture5'
);

$pictures[0] = 'picture1';
$pictures[1] = 'picture2';
$pictures[2] = 'picture3';
$pictures[3] = 'picture4';
$pictures[4] = 'picture5';

function random_pics($pictures){
$i = rand(0, 4);
$random_pics = ''.$pictures[$i].'.jpg';
echo '<img src="images/'.$random_pics.'" alt=" '.$pictures[$i].'">';
}
