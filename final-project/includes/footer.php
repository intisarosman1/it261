<div class="footer">
<footer>
<ul>
<li>Copyright &copy;
<?php 
$date_current = date('Y');
$date_created = 2021;
if($date_current ==$date_created) {
    echo $date_current;
} else {
    echo ''.$date_created.' - '.$date_current.'   ';
}
;?>
</li>

<li>All Rights Reserved</li>
<li><a href="">Terms of Use</a></li>
<li><a href="">Web Design by Intisar</a></li>
<li><a href="https://validator.w3.org/check/referer" target="_blank">HTML Validation</a></li>
<li><a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">CSS Validation</a></li>
</ul>

</footer>

</div> <!--end wrapper-->
</body>
</html>