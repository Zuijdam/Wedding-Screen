
<?php
$img_array = glob("images/*.*");
$img = array_rand($img_array);
echo '<img width="350" alt="'.$img_array[$img].'" src="'.$img_array[$img].'" />';
?> 