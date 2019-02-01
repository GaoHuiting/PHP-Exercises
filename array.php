<?php


/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Print every array element in a new line.
*/
$food = ["tomato", "sushi", "ramen", "sandwich"];
    echo $food[0]; echo "<br>";
    echo $food[1]; echo "<br>";
    echo $food[2]; echo "<br>";
    echo $food[3]; echo "<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
echo "<ul>";
    echo "<li>" . $food[0] . "</li>";
    echo "<li>" . $food[1] . "</li>";
    echo "<li>" . $food[2] . "</li>";
    echo "<li>" . $food[3] . "</li>";
echo "</ul>";




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

$food_assoc = [
    "vegetable" => "tomato",
    "snacks" => "sushi",
    "main-course" => "ramen",
    "fruit" => "grape"
];

foreach ($food_assoc as $key => $value) {
   echo "{$value} | {$key} <br>";
}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

$food_assoc = [
  "tomato" => [
    "type" => "vegetable",
    "origin" => "Roma"
  ],
  "sushi" => [
    "type" => "main course",
    "origin" => "Japan"
  ],
  "ramen" => [
      "type" => "noodle",
      "origin" => "Korea"
  ],
  "sandwich" => [
      "type" => "lunch",
      "origin" => "England"
  ]   
];

echo "<ul>";
foreach ($food_assoc as $key => $value) {
    echo "{$key} ";
    foreach($food_assoc[$key] as $key1 => $value1) {
        echo " | $value1";
    }
            echo "<br>";
}

echo "</ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>

*/
echo "<table>";


$i=0;

foreach($food_assoc as $key => $value) {
    if($i==0){
        echo "<th> food </th>";
        foreach($value as $header => $val){
            echo "<th>$header</th>";
        }
    }
    echo "<tr>";
        echo "<td> $key </td>";
    foreach ($food_assoc[$key] as $key1 => $value1){
        echo "<td> $value1 </td>";
    }
    echo "</tr>";
    $i++;
}
echo "</table>";


?>
