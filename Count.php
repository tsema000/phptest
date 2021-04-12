 

<?php
$target = mktime(0,0,0,9,20,2021);
$today = time ();
$difference = ($target-$today);
$days =(int) ($difference/86400);
print"Our event will occur in $days days";
?>

