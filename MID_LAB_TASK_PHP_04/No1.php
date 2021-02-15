<?php
    $LENGTH= (int)readline('Enter an height: '); 
    $WIDTH = (int)readline('Enter an width: ');
    
    $Area=$LENGTH*$WIDTH;
    
    echo "The area is " . $Area ." Square Kilometer";
    echo"\n";
    
    $Perimeter=2*($LENGTH+$WIDTH);
    echo "The perimeter is " . $Perimeter." Kilometer";
?>