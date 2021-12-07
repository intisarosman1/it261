<?php

/* $variable = 'Life is good!';
if(isset($variable)) {
echo 'Yippy-skippy!!!';
} else {
echo 'Not';
} */

// Starting the switch

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

// Switch

switch($today) {
case 'Thursday' :
    $coffee = '<h2>Thursday is our Cap Day!</h2>';
    $pic = 'cap.jpg';
    $alt = 'Cappuccino';
    $content = 'A <b>cappuccino</b> is an espresso-based coffee drink that originated in Italy, 
    and is prepared with steamed milk foam. Variations of the drink involve the use of cream 
    instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or chocolate powder.';
    $color = 'background-color:turquoise';
break;

case 'Friday' :
    $coffee = '<h2>Friday is our Americano Day!</h2>';
    $pic = 'americano.jpg';
    $alt = 'Americano';
    $content = 'Caffè <b>Americano</b> is a type of coffee drink prepared by diluting an espresso with hot water, 
    giving it a similar strength to, but different flavor from, traditionally brewed coffee. 
    The strength of an Americano varies with the number of shots of espresso and the amount of water added.';
    $color = 'background-color:white';
break;

case 'Saturday' :
    $coffee = '<h2>Saturday is our Regular Joe Day!</h2>';
    $pic = 'coffee.png';
    $alt = 'Coffee';
    $content = 'A <b>regular coffee</b> is a coffee with cream (or milk) and two sugars.';
    $color = 'background-color:lightblue';
break;

case 'Sunday' :
    $coffee = '<h2>Sunday is our Green Tea Day!</h2>';
    $pic = 'green-tea.jpg';
    $alt = 'Green Tea';
    $content = '<b>Green tea</b> is a type of tea that is made from Camellia sinensis leaves and buds that 
    have not undergone the same withering and oxidation process used to make oolong teas and black teas. 
    Green tea originated in China, and since then its production and manufacture has spread to other 
    countries in East Asia.';
    $color = 'background-color:lightpink';
break;

case 'Monday' :
    $coffee = '<h2>Monday is our Latte Day!</h2>';
    $pic = 'latte.jpg';
    $alt = 'Latte';
    $content = 'Caffè <b>latte</b>, often shortened to just latte in English, is a coffee drink of Italian 
    origin made with espresso and steamed milk.';
    $color = 'background-color:lightyellow';
break;

case 'Tuesday' :
    $coffee = '<h2>Tuesday is our Pumpkin Day!</h2>';
    $pic = 'pumpkin.jpg';
    $alt = 'Pumpkin';
    $content = 'The <b>Pumpkin Spice Latte</b> is a coffee drink made with a mix of traditional autumn spice 
    flavors (cinnamon, nutmeg, and clove), steamed milk, espresso, and often sugar, topped with 
    whipped cream and pumpkin pie spice.';
    $color = 'background-color:lightgrey';
break;

case 'Wednesday' :
    $coffee = '<h2>Wednesday is our Frap Day!</h2>';
    $pic = 'frap.jpg';
    $alt = 'Frappuccino';
    $content = '<b>Frappuccino</b> is a trademarked brand of the Starbucks Corporation for a line of 
    highly-sweetened iced, blended coffee drinks. It consists of coffee or crème base, blended with ice 
    and other various ingredients like flavored syrups, usually topped with whipped cream and or spices.';
    $color = 'background-color:yellow';
break;

}

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Switch Classwork Exercise</title>
<style>
#wrapper {
    width:940px;
    margin:20px auto;
}

</style>
</head>

<body style="<?php echo $color; ?>">
<div id="wrapper">
    <h1>My Wonderful Switch Classwork Exercise! </h1>
    <?php echo $coffee; ?>
    <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt ?>">
    <p><?php echo $content;?></p>

<h2>Check out our Daily Specials</h2>
<ul>
    <li><a href="switch.php?today=Thursday">Thursday</a></li>
    <li><a href="switch.php?today=Friday">Friday</a></li>
    <li><a href="switch.php?today=Saturday">Saturday</a></li>
    <li><a href="switch.php?today=Sunday">Sunday</a></li>
    <li><a href="switch.php?today=Monday">Monday</a></li>
    <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
    <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
</ul>
</div> <!-- end wrapper -->
</body>
</html>