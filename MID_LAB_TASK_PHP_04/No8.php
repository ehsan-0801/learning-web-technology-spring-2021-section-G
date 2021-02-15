<?php
$array1=[
    [1,2,3,'A'],
    [1,2,'B','C'],
    [1,'D','E','F']
];

$count=3;
for($i=0;$i<3;$i++)
{
    for($j=0;$j<$count;$j++)
    {
        echo($array1[$i][$j]);
    }
echo("\n");
$count--;
}

echo"\n";

$count2=3;
for($i=0;$i<3;$i++)
    {
    for($j=$count2;$j<4;$j++)
    {
        echo($array1[$i][$j]);
    }
$count2--;
echo("\n");
}
?>