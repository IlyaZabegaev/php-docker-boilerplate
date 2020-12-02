<?php 
    $title = 'hello world'; 
    $title='page title';
    $fruit_№1 = 'apple';
    $fruit_№2 = 'pear';
    $colour_fruit_№1 = 'greeen';
    $colour_fruit_№2 =  'yellow';
    $winnie_pooh = "Hello I'm Winnie. I have one $colour_fruit_№1 $fruit_№1 and two $colour_fruit_№2 {$fruit_№2}s ";
    //$winniePooh = "Hello I'm Winnie";
    //$winnie_pooh  можно и так и $winniePooh
    $var = '123';
    $Var = '4567';
    // переменные зависят от регистра
   define("PAGE","new page");
   //define("PAGE","new page2");константы нельзя перезаписать и она неизменна
   const  PAGE2 = 'NEW CONST'
   // const работает только с версией PHP 5.3 и выше
 ?>
<html>
 <head>
  <title><?php echo $title; ?></title>
 </head>
 <body>
    <h1><?php echo PAGE ; ?></h1>
    <p><?php echo $winnie_pooh  ;?></p>
    <p><?php echo $Var ;?></p>
    <P><?php echo PAGE2 ; ?></P>
 </body>
</html>