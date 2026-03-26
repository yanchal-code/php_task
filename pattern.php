<?php
//program-1
for($i=1;$i<=5;$i++)
     {
          for($j=1;$j<=$i;$j++)
               {
                    echo "*";
               }
          echo "</br>";
     }
     echo "2.</br>";

     for($i=5;$i>=1;$i--)
     {
          for($j=1;$j<=$i;$j++)
               {
                    echo "*";
               }
          echo "</br>";
     }
     echo "3.</br>";
     ////////////
     for($i=1;$i<=5;$i++)
          {
               for($j=1;$j<=$i;$j++)
                    {
                         echo "$i";
                    }
               echo "</br>";
          }
          echo "4.</br>";

          for($i=1;$i<=5;$i++)
               {
                    for($j=1;$j<=$i;$j++)
                         {
                              echo "$j";
                         }
                    echo "</br>";
               }

               echo "5.</br>";
               $n = 5;

               for($i = 1; $i <= $n; $i++)
               {
               for($j = 1; $j <= (2*$n)-1; $j++)
               {
                    if($j >= $n-($i-1) && $j <= $n+($i-1))
                    {
                         echo "*";
                    }
                    else
                    {
                         echo "&nbsp;&nbsp;";
                    }
               }
               echo "<br>";
               }
               echo "6.</br>";
               $str="ANCHAL";
               $count=strlen($str);
               for($i=0;$i<$count;$i++)
                    {
                         for($j=0;$j<=$i;$j++)
                              {
                                   echo $str[$j];
                              }
                              echo "<br/>";
                    }




?>