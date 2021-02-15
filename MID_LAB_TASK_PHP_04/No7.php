<?php
for($x=0;$x<4;$x++)
{
    for($y=0;$y<$x;++$y)
    {
        echo "*";
    }
    
    echo "\n";
}

for($x=4;$x>0;$x--)
{
    for($y=1;$y<$x;$y++)
    {
        echo "$y ";
    }
    
    echo "\n";
}
$count=0;
$letters=array("A","B","C","D","E","F");
for($x=1;$x<4;$x++)
{
    for($y=0;$y<$x;$y++)
    {
        echo "$letters[$count] ";
        $count++;
    }
    echo "\n";
}
?>