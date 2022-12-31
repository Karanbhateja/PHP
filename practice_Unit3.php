<?php
$txt = "PHP";
echo "heelo world \n";
echo $txt;
echo "\n";
var_dump($txt);
 
$colour = array("red","blue","orange");
var_dump($colour);
 
// String Operations

$ex = "one";
$ep = "Two";
echo "result is ".$ex;
echo "\n";
$ex .= $ep;
echo $ex;
echo "\n";
echo strlen($ep);
echo "\n";
echo strrev($ep);
echo "\n";
echo strtolower($ep);
echo "\n";
echo strtoupper($ep);
 
// if else StackTraceElement

echo "\n \n";
$conditional = "TR";
 
if($conditional="TR"){
  echo "It's TR";
}
elseif($conditional="PR"){
  echo "It's PR";
}
else{
  echo "It's nothing";
}

// LOOPS

for($numm=0;$numm<5;$numm+=1){
  echo "$numm for loop \n";
}

echo "\n";

$num =0;
while($num<5){
  echo "$num while loop \n";
  $num+=1;
}
 

?>
