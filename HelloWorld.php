<?php
  echo "Hello World!" .PHP_EOL;
  print('I\'m studying.').PHP_EOL;
  
  $str="あいうえお";
  $int=12345;
  $arr=array(1,2,3);
  $boo=false;
  $nul=NULL;
  
  echo gettype($str) . PHP_EOL;
  echo gettype($int) . PHP_EOL;
  echo gettype($arr) . PHP_EOL;
  
  print(gettype($boo)).PHP_EOL;
  print(gettype($nul)).PHP_EOL;
  
  var_dump($argv);
  if(var_dump%2==0){
  echo "入力された数字は偶数です。" .PHP_EOL;
  }else{
  echo "入力された数字は奇数です。" .PHP_EOL;
  }
?>