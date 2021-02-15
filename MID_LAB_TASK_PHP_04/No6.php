<?php
$Cars = array("Volvo", "BMW", "Toyota", "Ford", "Mercedes","Tesla");
$SearchCars= readline("Search for any car ::\n");
for($i=0;$i<sizeof($Cars);$i++)
{
    if($Cars[$i]==$SearchCars)
    {
        echo"Found in ".$i+1 ." no index";
        echo"\n";
        break;
    }
    else
    {
        echo "not Found in ".$i+1 ." no index";
        echo"\n";
        
    }
}
?>