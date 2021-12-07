<?php

// The date function
echo date("l jS \of F Y h:i:s A");
echo '<br>';
echo date("H:i");
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo date("H:i");


$time = date("Hi:i");
if($time <= 11) {
echo '<h2 style="color:yellow;">Good Morning, Intisar</h2>';
} elseif($time <= 16) {
echo '<h2 style="color:lightblue;">Good Afternoon, Intisar</h2>';
} else {
echo '<h2 style="color:purple;">Good Evening, Intisar</h2>';
}
