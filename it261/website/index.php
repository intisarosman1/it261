<?php
include('config.php');
include('includes/header.php'); ?>

    <div id="wrapper">
    <div id="hero">
    </div> <!--end hero-->
<?php echo random_pics($pictures); ?>
<h2>
<pre>
<br>
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

$i = rand(0, 4);
$random_pics = ''.$pictures[$i].'.jpg';
<br>
</pre>
</h2>

<main>
<h1><?php echo $headline; ?></h1><br>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis nunc urna. 
    Nullam imperdiet convallis nibh, eu mollis sapien luctus vel. Curabitur erat augue, 
    elementum nec lacinia at, dignissim at urna. Fusce dictum suscipit felis, 
    quis cursus felis hendrerit sed. <br><br>Suspendisse consequat tristique facilisis. Sed maximus nisl 
    nec odio gracvida maximus. Etiam porttitor, massa quis euismod tempus, eros elit tincidunt turpis, 
    euismod faucibus dolor dolor molestie turpis. Suspendisse dolor tortor, sodales ut ultrices a, 
    faucibus at sapien. Vivamus mattis congue justo sit amet blandit. <br><br>Donec maximus velit vel lobortis 
    pulvinar. Pellentesque quis pharetra mi. Sed vitae vestibulum elit. Aliquam sit amet tincidunt sem. 
    Suspendisse nec tincidunt ligula. Nam volutpat, erat sed efficitur viverra, 
    arcu magna aliquam tortor, in mollis felis dui vitae tortor.</p>
</main>

<aside>
<h3>Here is my aside</h3>
</aside>

<?php 
include('includes/footer.php'); ?>