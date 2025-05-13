<?php
//function calling
function message() {
    echo "Hello DYPCET!.<hr>";
}
message();

function familyname($fname) {
    echo "$fname sabale.<br>";
}
familyname("Abhishek");
familyname("Bhauso");
familyname("Bharati");

echo "<hr>";
function familyyear($fname, $fyear) {
    echo "$fname Sabale was Born in year $fyear.<br>";
}
familyyear("Abhishek", "2004");
familyyear("Bhauso", "2003");
familyyear("Bharati", "2004");
echo "<hr>";


function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
 }
  
  setHeight(30);
  setHeight();
  setHeight(35);
  setHeight(80);
  echo "<hr>";

function sum($x, $y) {
    $z = $x + $y;
    return $z;
}
echo "5 + 10 = ". sum(5, 10) . "<br>";
echo "12 + 12 = ". sum(12, 12) . "<br>";
echo "10 + 2 = ". sum(10, 2) . "<hr>";
?>