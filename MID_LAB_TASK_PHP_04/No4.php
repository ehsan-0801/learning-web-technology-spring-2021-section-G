<?php
$FirstNum=(int)readline("Enter the first number :\n");
$SecondNum=(int)readline("Enter the second number :\n");
$ThirdNum=(int)readline("Enter the third number :\n");

if($FirstNum>$SecondNum && $FirstNum>$ThirdNum)
{
    echo "The Largest number is  :".$FirstNum;
}   
else if($SecondNum>$FirstNum && $SecondNum>$ThirdNum)
{
    echo "The Largest number is  :".$SecondNum;
}
else
{
    echo "The Largest number is  :".$ThirdNum;
}
?>