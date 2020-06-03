<?php 

// *
// **
// ***
// ****

echo "<h2>1 .Segitiga 90</h2>"; 

for ($i=1; $i <= 5 ; $i++) { 
   for ($j=1; $j < $i; $j++) { 
      echo "*";
   }
   echo "<br/>";
}


//       *      
//     * * *    
//  * *  *   * *  
// *  *  *  *  *  *  *

echo "<h2>2 .Piramida</h2>"; 

$n = 4;
for ($i=1; $i <= $n ; $i++) { 
   for ($j=1; $j <= (2*$n)-1 ; $j++) { 
    if ($j >= $n-($i-1) && ($j <= $n+($i-1))) {
      echo "*";
    }else{
       echo"&nbsp;&nbsp;";
    }
   } 
   echo "<br/>";
}

echo "<h2>3. Heart shape pattern</h2>"; 

for ($i=0; $i < 6; $i++) { 
   for ($j=0; $j < 7; $j++) { 
      if (($i == 0 && $j%3!=0) || ($i == 1 && $j%3 == 0) || ($i-$j == 2) || ($i+$j == 8)) {
         echo "*";
      }else{
         echo"&nbsp;&nbsp;";
      }
   }
   echo "<br/>";
}