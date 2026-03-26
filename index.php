<?php
//basic code
echo"my first program";
echo"<br/>";
//variables
$x=5;
$y="anchal";
echo $x;
echo "<br/>";
echo $y;
echo "<br/>";

//
$text="php";
echo " i love  $text ";
echo "<br/>";

//sum two number
$x=5;
$y=10;
echo $x+$y;
echo "<br/>";

//variables fined
$x=5;
$a=5.5;
$b=array('ram','syam','geeta');
$c=true;
$y="anchal";
var_dump($y,$x,$a,$b,$c);
//assign multiple value,
echo "<br/>";

$x=$y=$z="fruits";
echo $x;
echo "<br/>";

echo $y;
echo "<br/>";

echo $z;
echo "<br/>";
//variable scope
//global variable
$x=5;
function test()
{
     echo "inside variable is :$x";
}
test();
echo "outside variable run is: $x";
echo "<br/>";
//local scope
function test1(){
     $x=5;
     echo "inside variable is :$x";
}
test1();
echo "outside variable run is: $x";
echo "<br/>";

//static variable
function test2()
{
     static $x=0;
     echo $x;
     $x++;
}
test2();
test2();
test2();
echo "<br/>";

//if condition
$x=20;
$y=10;
if($x>$y)
     {
          echo "x is grater then y";
     }
echo "<br/>";
//if else condition
if($y>$x)
     {
          echo " x is greater then y";
     }
     else{
          echo " y is less then x";
     }
     //if else else if condition
echo "<br/>";
     $t=date("H");
     if($t<"10")
          {
               echo "this is first condition";
          }
          elseif($t<"20")
               {
               echo "this is second condition";
               }
               else{
               echo "this is third condition";
               }
          echo "<br/>";
          //shorthand if if else 
          $a=5;
          if($a<10) $b="hello";
          echo $b;
          //if else
          $b=$a>10?"hello":"byyy";
          echo $b;
          echo "<br/>";

          //loop
          //while loop
          $i=1;
          while($i<6)
               {
                    echo $i;
                    $i++;
               }
               //do while loop
               do{
                    echo $i;
                    $i++;

               }while($i<6);
               echo "</br>";
               //reverse string
               $str="anchal";
               $rev="";
               for($i=strlen($str)-1;$i>=0;$i--)
                    {
               $rev .=$str[$i];
                    }
                    echo $rev;
               echo "</br>";
               //check polindrome
               $str="madam";
               if($str==strrev($str))
                    {
                         echo "polindrome";
                    }
                    else{
                         echo "not polindrome";
                    }
                    echo "<br/>";
               //check prime number
               $num=7;
               $count=0;
               for($i=1;$i<=7;$i++)
                    {
                         if($num%$i==0)
                              {
                                   $count++;
                              }
                    }
                    if($count==2)
                         {
                              echo "this is prime";
                         }
                         else{
                              echo "this is not prime";
                         }
                    echo "<br/>";
                         //count character
                         $str="welcome";
                         echo strlen($str);
                    //remove dublicate
                    $arr=[1,3,3,4,4,5,6,7];
                    $result=array_unique($arr);
                    print_r($result);
                    //find max
                    $arr=[23,56,87,25,65];
                    $max=$arr[0];
                    foreach($arr as $val)
                         {
                         if($val>$max) 
                              {
                                   $max=$val;
                              }   
                         }
                         echo $max;
                         //swap 2 variable
                         $a=5;
                         $b=10;
                         $a=$a+$b;
                         $b=$a-$b;
                         echo $b;
                         $a=$a-$b;
                         echo $a;
?>
