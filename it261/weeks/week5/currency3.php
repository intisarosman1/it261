<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Our Currency 3 - Our Sticky Form!</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>
" method="post">
<fieldset>
<label for="name">NAME</label>
<input type="text" name ="name" value="
<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>
">
<label for="email">EMAIL</label>
<input type="email" name ="email" value="
<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>
">
<label for="amount">How much money do you have?</label>
<input type="text" name ="amount" value="
<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']) ;?>
">

<label for="currency">Choose your currency</label>
<ul>
<li><input type="radio" name ="currency" value="0.013"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '0.013') echo 'checked="checked" ' ;?>>
Rubles</li>
<li><input type="radio" name ="currency" value="0.76"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '0.76') echo 'checked="checked" ' ;?>>
Canadian</li>
<li><input type="radio" name ="currency" value="1.28"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '1.28') echo 'checked="checked" ' ;?>>
Pounds</li>
<li><input type="radio" name ="currency" value="1.18"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '1.18') echo 'checked="checked" ' ;?>>
Euros</li>
<li><input type="radio" name ="currency" value="0.0094"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '0.0094') echo 'checked="checked" ' ;?>>
Yen</li>
</ul>

<label for="bank">Choose your banking institution</label>

<select name="bank">
<option value="" NULL
<?php if(isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected="unselected" ' ;?>
>Select one!</option>
<option value="BOA"
<?php if(isset($_POST['bank']) && $_POST['bank'] == 'BOA') echo 'selected="unselected" ' ;?>
>Bank of America</option>
<option value="Key"
<?php if(isset($_POST['bank']) && $_POST['bank'] == 'Key') echo 'selected="selected" ' ;?>
>Key Bank</option>
<option value="Chase"
<?php if(isset($_POST['bank']) && $_POST['bank'] == 'Chase') echo 'selected="selected" ' ;?>
>Chase</option>
<option value="BECU"
<?php if(isset($_POST['bank']) && $_POST['bank'] == 'BECU') echo 'selected="selected" ' ;?>
>Boeing Credit Union</option>
<option value="Mattress"
<?php if(isset($_POST['bank']) && $_POST['bank'] == 'Mattress') echo 'selected="selected" ' ;?>
>Mattress</option>
</select>

<input type="submit" value="Convert it!">
<p><a href="">Reset</a></p>
</fieldset>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'])) {
    echo '<span class="error">Please fill out your name</span>';
}

if(empty($_POST['email'])) {
    echo '<span class="error">Please fill out your email</span>';
}

if(empty($_POST['amount'])) {
    echo '<span class="error">Please fill out your amount</span>';
}

if(empty($_POST['currency'])) {
    echo '<span class="error">Please fill out your currency</span>';
}


if($_POST['bank'] == NULL) {
echo '<span class="error">Please choose your banking institution!</span>';
}


if(isset(
    $_POST['name'],
    $_POST['email'],
    $_POST['amount'],
    $_POST['currency'],
    $_POST['bank']
)) {

$name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$currency = $_POST['currency'];
$bank = $_POST['bank'];

$total = intval($amount) * $currency;
// $friendly_total = floor($total);

echo '
<div class="box">
<h2>Hello, '.$name.'</h2>
<p>You now have '.floor($total).' American dollars, and it will be deposited in <b>'.$bank.'</b>. We will 
email you at <b>'.$email.'</b> in the next 24 hours!</p>
</div>
';

} // close isset


} // server request

?>
</body>
</html>