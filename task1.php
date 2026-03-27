<?php
// swap two variable
$a=5;
$b=10;
$a=$a+$b;  //a=15
$b=$a-$b; //b=5
$a=$a-$b; //a=10
echo $a;
echo"<br/>";
echo $b;
echo"<br/>";

//2.check variable empty;
//3.php datatype
// integer,string,boolean,double,float,array,object,null,resource,mixed
//4.== find only equaility and === find with datatype
$x=5;
$y="5";
var_dump ($x==$y);
var_dump ($x===$y);
echo"<br/>";

//5 
var_dump(0=="hello");//bool(false)
var_dump(0==="hello");//bool(false)
var_dump("1"=="01");//bool(true)
var_dump(100=="1e2");//bool(true)
echo"<br/>";

//6 converting string to integer
$str="123abc";
$int=(int)$str;
echo $int;
var_dump($int);
echo"<br/>";

//7.(int),intval() used for typecasting to integer,settype() modifies the variables type in place
// int();
// (int)$variable_name.
// intval()
// syntax:
// intval($x).
// settype()
// settype($x,"integer")
//8.write program variable variable $$var
$var="name";
$$var="anchal";
echo $var;
echo"<br/>";
echo $$var;
echo"<br/>";
echo $name;
echo"<br/>";

//9.global vs local vs /static scop  variable
//global variable-it declared outside the function its called global variable
$x=5;
function test(){
     echo "inside variable run : $x";
}
test();
echo"outside variable : $x";
echo"<br/>";
//local variable it declared inside the function its called local variable
function test1(){
$y=10;

     echo "inside variable run : $y";
}
test1();
echo"outside variable : $y";
echo"<br/>";
//static variable 
function test2(){
     static $x=0;
     echo $x;
     echo"<br/>";
     $x++;
}
test2();
test2();
test2();
echo"<br/>";

//10. difference between print and echo
//both are used to output data
//echo=echo can take multiple argument and is faster while print can only one argument and return a value a 1
//11.spaceship operator=it is used for comparison between two values
// 0- if both value are equal
// 1-if left value is greater
// -1- if right value is greater
echo 5<=>5;
echo 10<=>5;
echo 5<=>7;
echo"<br/>";
//12. coalescing operator (??)
$name = $_GET['name'] ?? "Guest";
echo $name;
echo"<br/>";

$name = isset($_GET['name']) ? $_GET['name'] : "Guest";
echo $name;
echo"<br/>";

//13. AND OR DIFFERENCE && ||
//14.
$a=5;
echo $a++;
echo"<br/>";
echo ++$a;
echo"<br/>";

//15.write a program using ternary operator
$a=35;
$b=$a>=30?"pass":"fail";
echo $b;
//16.% operator
echo"<br/>";

$num=7;
if($num%2==0)
     {
          echo "even number";
     }
     else{
          echo "odd";
     }
     echo"<br/>";

//17.bitwise operator (&,'^,~,<<,>>) these operator used in binary level
//18. concatenation operator is used in join string (.)
$firstName="anchal";
$lastName="Yadav";
$fullName=$firstName. " ". $lastName;
echo $fullName;
echo"<br/>";
//19.difference between if elseif and switch when would prefer one over the others.
$marks = 75;
//21.
if ($marks >= 90) {
echo "A";
} elseif ($marks >= 75) {
echo "B";
} elseif ($marks >= 50) {
echo "C";
} else {
echo "Fail";
}
echo "<br/>";
//switch
//20.

$day = "Monday";

switch ($day) {
     case "Monday":
     echo "Start of week";
     break;
     case "Friday":
     echo "Weekend coming";
     break;
     default:
     echo "Normal day";
}
//22. match is a new alternative of switch
$day = "Monday";

$result = match($day) {
"Monday" => "Start of week",
"Friday" => "Weekend coming",
default => "Normal day"
};
echo "<br/>";

//23. switch no return value but match return value
//24 . check leap year 
$year = 2024;

     if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)) {
     echo "$year is a Leap Year";
     } else {
     echo "$year is Not a Leap Year";
     }
     echo "<br/>";
//25. pending
//26. multiPLICATION PROGRAM
//FOR LOOP
$num=5;
$i=1;
for($i=1;$i<=10;$i++)
     {
          echo "$num * $i= ". ($num*$i);
          echo "<br/>";
     }
     //while loop
     echo "<br/>";
$num = 6;
$i = 1;
     while($i<=10)
          {
          echo "$num * $i= ". ($num*$i);
          echo "<br/>";
          $i++;
          }
          //do-while
     $num=7;
     $i=1;
     do{
          echo "$num * $i =" .($num*$i);
                    echo "<br/>";
                    $i++;
     }while($i<=10);
     //28 different between break continue;
     //break statement
          echo " break:<br/>";

     for($i=1;$i<=10;$i++)
          {
               if($i==5)
                    {
                         break;
                    }
                    echo $i .  "<br/>";
          }
          echo " continue:<br/>";

          //continue statement
          for($i=1;$i<=10;$i++)
               {
                    if($i==5)
                         {
                              continue;
                         }
                         echo $i . "</br>";
               }
               //28 fibonacci series-pending

               //29 check prime
                    $num = 7;
                    $count = 0;

                    for ($i = 1; $i <= $num; $i++) {
                    if ($num % $i == 0) {
                         $count++; // count divisors
                    }
                    }

                    if ($count == 2) {
                    echo "This is Prime";
                    } else {
                    echo "This is Not Prime";
                    }
                    echo "<br/>";

                    //print pattern
                    $n=5;
                    for($i=1;$i<=$n;$i++)
                         {
                              for($j=1;$j<=$i;$j++)
                                   {
                                        echo "*";
                                   }
                                   echo "<br/>";
                         }
                    //31.reverse number
                    $num=12345;
                    $rev=0;
                    while($num>0)
                         {
                              $digit=$num%10;
                              $rev=$rev * 10+$digit;
                              $num=(int)($num/10);
                              
                         }
                         echo $rev;
                         //32.while,do-while 
                         //33.factorial
                         echo "</br>";
                         $num=5;
                         $fac=1;
                         for($i=1;$i<=$num;$i++)
                              {
                                   $fac=$fac*$i;
                              }
                              echo "Factorial = " .$fac;
                         //sum of digit (123)
                         $num = 123;
                         $sum = 0;

                         while ($num > 0) {
                         $digit = $num % 10;   
                         $sum = $sum + $digit; 
                         $num = (int)($num / 10); 
                         }

                         echo "Sum = " . $sum;
                         //35 pending question
                         //47
                         //48
                         //49
                         //36check palindrome
                         $num = 121;
                         $original = $num;
                         $reverse = 0;

                         while ($num > 0) {
                         $digit = $num % 10;              
                         $reverse = $reverse * 10 + $digit;
                         $num = (int)($num / 10);       
                         }

                         if ($original == $reverse) {
                         echo "Palindrome";
                         } else {
                         echo "Not Palindrome";
                         }













