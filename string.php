<?php 
    $a = "aabcdd";
    $b = array();
    // $count = 0;
    
    
    for($i = 0; $i < strlen($a); $i++){
       if(findx($a[$i],$b) == 0)
       {
           array_push($b, $a[$i]);
        //    echo count($b);
           $count = 0;
           for($j = $i; $j < strlen($a); $j++){
               if($a[$i] == $a[$j]){
                    $count++;
               }
           }
           echo $a[$i]." "."=>"." ".$count;
           echo "<br>";
       }
       
    } 
    

    function findx($x, $b){
        

        // echo sizeof($a);
        for ($i = 0; $i < count($b); $i++){
            if($b[$i] == $x){
                return 1;
            }
            // echo $a[$i];
        }
        return 0;
    }
?>