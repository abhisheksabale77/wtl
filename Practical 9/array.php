<?php

$arr1 = array(2,4,1,5,3);
$arr2 = array(6,7,8,9,10);
echo"Array1 : ".  implode(",",$arr1) ."<br><br>";

echo "Count of Elements in the array :" . count($arr1) . "<br><br>";

sort($arr1);
echo"Sorted array : " . implode(",",$arr1) . "<br><br>";

$arrRev= array_reverse($arr1);
echo"The Reverse array is : " . implode(",",$arrRev) . "<br><br>";

$mergeArr = array_merge($arr1,$arr2);
echo"Merged array : " . implode(",",$mergeArr) . "<br><br>";

$productArr=array_product($arr1);
echo"Product of array : ".($productArr)."<br><br>";

array_push($arr1,11);
echo "push element in array: " . implode(",",$arr1)."<br><br>";

$countArr = count($arr1);
echo "count of arr : " .($countArr)."<br><br>";

// echo "The array is : ".($arr1)."<br><br>";
// echo "The array is : ".($arr2)."<br><br>";

array_pop($arr1);
echo "last element removed : ". implode(",",$arr1)."<br><br>"
?>