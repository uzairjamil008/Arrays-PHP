<?php
echo "Task 1";
echo "<br>";
echo "<br>";
$cars=array('honda', 'toyota', 'suzuki', 'kia', 'audi', 'bmw');
$cars1=$cars;
echo $cars1[0] . ", " . $cars1[1] . ", " . $cars1[2] . ", " . $cars1[3] . ", " . $cars1[4] . ", " . $cars1[5];
echo "<br>";
echo "<br>";
echo"The Sorted Array Output is";
echo "<br>";
echo "<br>";
sort($cars1);
foreach ($cars1 as $key) {
    echo "$key ,";
}
echo "<br>";
echo "<br>";
echo "Delete The Suzuki From the Above Array";
echo "<br>";
echo "<br>";
unset($cars1[4]);
foreach ($cars1 as $key) {
    echo "$key ,";
}
echo "<br>";
echo "<br>";
echo "Get the first element of the above array expected result is Honda";
echo "<br>";
echo "<br>";
echo $cars[0];
echo "<br>";
echo "<br>";
echo "The Original Array is";
echo "<br>";
echo "<br>";
sort($cars);
foreach ($cars as $key) {
    echo "$key ,";
}
$inserted_value="mazda";
$position=3;
//use array splice function to insert new item in array
array_splice($cars, $position, 0, $inserted_value);
echo "<br>";
echo "<br>";
echo "Insert a new item in an array the Expected Result is";
echo "<br>";
echo "<br>";
foreach ($cars as $key) {
    echo "$key ,";
}
echo "<br>";
echo "<br>";
echo "Task 2";
echo "<br>";
echo "<br>";
$task2=array("Ahmed"=>"55000","Rida"=>"41000","hanif"=>"93000","Rimsha"=>"20000");
asort($task2);
foreach ($task2 as $key => $value) {
    echo "".$key." =>".$value."";
}
echo "<br>";
echo "<br>";
echo "Task 3";
echo "<br>";
echo "<br>";
$temp=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$sum=array_sum($temp);
$size=sizeof($temp);
echo "The Sum of Number is $sum";
echo "<br>";
echo "<br>";
echo "The Size of the Numbers is $size";
echo "<br>";
echo "<br>";
echo "The Average Temperature is  ";
$avg=$sum/$size;
echo "$avg";
echo "<br>";
echo "<br>";
echo "List of five Lowest Temperature is ";
$low=sort($temp);
for ($i=0; $i < 5 ; $i++) { 
    echo "$temp[$i] ," ;
}
echo "<br>";
echo "<br>";
echo "List of five Highest Temperature is ";
//The array_slice() function returns selected parts of an array we select the 5 values from back like -5
$high= array_slice($temp,-5);
foreach ($high as $value) {
    echo "$value ,";
}
echo "<br>";
echo "<br>";
echo "Task 4";
echo "<br>";
echo "<br>";
$remove_duplicate=array(55, 26, 59, 89, 59, 86, 26, 26, 49, 59, 86);
$result=array_unique($remove_duplicate);
echo "After Removing Duplicate Items from Array the Expected Output is";
echo "<br>";
echo "<br>";
foreach ($result as $value) {
    echo "$value ,";
}
echo "<br>";
echo "<br>";
echo "Task 5";
echo "<br>";
echo "<br>";
$check_string=array('abc', '55', '78', 'de', 're', 'ef', '15');
if (is_string($check_string)) {
echo "Yes, The Arrays Values Are Strings";
}else{
    echo "No, The Arrays Values Are Not Strings";
}








?>