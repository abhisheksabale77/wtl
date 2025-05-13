<?php
$fruits = ["apple", "banana", "cherry", "apple", "banana"];
echo "Original Array:<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<br>";

$uniqueFruits = array_unique($fruits);
echo "Unique Array:<br>";
foreach ($uniqueFruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<br>";

$reversedFruits = array_reverse($uniqueFruits);
echo "Reversed Array:<br>";
foreach ($reversedFruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<br>";

array_push($reversedFruits, "mango");
echo "After Push:<br>";
foreach ($reversedFruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<br>";

$last = array_pop($reversedFruits);
echo "Popped Element:<br>";
echo $last . "<br><br>";

echo "After Pop:<br>";
foreach ($reversedFruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<br>";

$moreFruits = ["kiwi", "grape"];
$allFruits = array_merge($reversedFruits, $moreFruits);
echo "Merged Array:<br>";
foreach ($allFruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<br>";

$hasApple = in_array("apple", $allFruits) ? "Yes" : "No";
echo "Is 'apple' present?<br>";
echo $hasApple . "<br>";
?>
