<html>
<head>
<title>My Adder Assignment</title>
<style>

p {
    color:red;
}

</style>
</head>
<body>
<h1>Adder.php</h1> <form action="" method="post">
<label for="num1">Enter the first number:</label><input type="number" name="num1"><br>
<label for="num2">Enter the second number:</label><input type="number" name="num2"><br>
<input type="submit" value="Add Em!!"> </form>


<?php //adder-wrong.php

if (isset($_POST['num1'],
          $_POST['num2'])) {
$num1 = $_POST['num1'];
$int_num1 = intval($num1);
$num2 = $_POST['num2'];
$int_num2 = intval($num2);
$myTotal = $int_num1 + $int_num2;
echo '<h2>You added '.$num1 .' and '.$num2.' </h2>';
echo ' <p> and the answer is <br>
'.$myTotal.' !</p>';
echo '<p><a href="">Reset page</a></p>';
}

?>

<!-- Added a space between the opening php tag and the comment (line 1)--> 
<!-- Added a space between the parantheses and curly brace (line 3) -->
<!-- Added missing POST bracket for num2 under if isset and moved parantheses and brackets to appropriate location (line 4) -->
<!-- Removed dash in front of equal sign and corrected Num2 to num2 (line 6) -->
<!-- Changed double quotes to single quotes, added single quotes to num2 and fixed spacing (line 7) -->
<!-- Added closing h2 tag (line 7) -->
<!-- Removed style completely from line 9 and styled p tag in the style tags in the html code instead (around line 16) -->
<!-- Added single quotes and periods around myTotal and closed style tag (line 9) -->
<!-- Added intval function to num1 and num2 (after lines 4 and 5) -->
<!-- Adjusted myTotal equation to int_num1 + int_num2 -->
<!-- Removed double quotes around exclamation point and double quote after style and added ending single quote (line 9) -->
<!-- Added space after echo and closed p tag along with ending semicolon (line 10) -->
<!-- Removed slash in form tag and added method(line 20) -->
<!-- Added missing opening label tag (line 21) -->
<!-- Corrected name variable to num1 instead of Num1 (line 21) -->
<!-- Removed slash from opening label tag and added missing closing label tag (line 22) -->
<!-- Changed input types for num1 and num2 from text to number (lines 21 and 22) -->
<!-- Added closing double quotes for value (line 23) -->
<!-- Removed ending php tag, single quote, semicolon and curly brace after html tag (line 29) -->
<!-- Placed ending php tag before the opening html tag in line 12 -->
<!-- Moved all php code to after the form (before closing body tag) -->


</body>
</html>