<?php
// understanding the logic!
//1 ruble = .013 dollars
//1 pound sterling = 1.28 dollars
//1 canadian dollar = .79 dollars
//1 euro = 1.18 dollars
//1 yen = .0094 dollars

$rubles = 10007;
$rubles *= 0.013;
$friendly_rubles = number_format($rubles, 2);
$pound = 500;
$pound *= 1.28;
$friendly_pound = number_format($pound, 2);
$canadian = 5000;
$canadian *= 0.79;
$friendly_canadian = number_format($canadian, 2);
$euros = 1200;
$euros *= 1.18;
$friendly_euros = number_format($euros, 2);
$yen = 2000;
$yen *= 0.0094;
$friendly_yen = number_format($yen, 2);

$total = $rubles + $pound + $canadian + $euros + $yen;
$friendly_total = number_format($total, 2);

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<style>
    table {
        width:400px;
        margin:20px auto;
        border:1px solid green;
        border-collapse: collapse;
    }
    td, th {
        border:1px solid green;
        padding:5px;
        text-align:left;
    }
</style>

<title>Currency</title>

</head>

<body>
<table>

<tr>
<th>Rubles</th>
<td><?php  echo '$ '.$friendly_rubles.' ';  ?></td>
</tr>

<tr>
<th>Sterling</th>
<td><?php  echo '$ '.$friendly_pound.' ';  ?></td>
</tr>

<tr>
<th>Canadian</th>
<td><?php  echo '$ '.$friendly_canadian.' ';  ?></td>
</tr>

<tr>
<th>Euros</th>
<td><?php  echo '$ '.$friendly_euros.' ';  ?></td>
</tr>

<tr>
<th>Yen</th>
<td><?php  echo '$ '.$friendly_yen.' ';  ?></td>
</tr>

<tr>
<th>Total</th>
<td><strong><?php  echo '$ '.$friendly_total.' ';  ?></strong></td>
</tr>

</table>

</body>
</html>