<?php
// using of while loop in php
$a = 1;
while($a<=10){
  if($a==8)
    break;
  echo $a ."\n";
  $a++;
}
// using do-while loop in php
echo " Do-while loop is start\n";
$b = 1;
do{
  echo $b ."\n";
  $b++;
}while($b<=10);
echo "For loop is start\n";
for($i =0;$i<=10;$i++){
  echo $i . "\n";
}
?>