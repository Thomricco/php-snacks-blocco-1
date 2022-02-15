<?php 

$random=array();
for($i=0; $i<=15; $i++)
{
$random[]=rand(0,100)."<br />";
}
print_r($random);

?>