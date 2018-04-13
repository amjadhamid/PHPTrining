<?php

//1
$indexedArray = array ( "osama", "amjad");
echo $indexedArray[1];

print_r($indexedArray);


echo "</pre>";
foreach ($indexedArray as $val ) {
    echo $val . "<br/>";
}

//next 2

$Salary = array ( "osama"=> "111" , "amjad" =>"123");


echo "</pre>";

print_r($Salary);


echo "</pre>";
foreach ($Salary as $val => $sal) {
    echo $val . " => " . $sal ;
}


//3

$diet = array ( "osama" => array("BANANA","apple")
 , "amjad" =>array("Meat" , "Bread"));


echo "</pre>";

print_r($Salary);


echo "</pre>";
foreach ($diet as $day => $food) {
    echo "<h3>In" . $day . " I will eat :</h3>";
    foreach ($food as $key) {
        echo "-" . $key ;
    } 
    
}
//
$langs = array(
"html",
"html5",
"css",
"js"


)



//function = for search
$lang = in_array()

$lang = array_key_exists()

$lang = array_search()


//function = for add
array_puch()//add last element
array-unshift()//add to the first element



//function = for del
array_pop()//last element
array_shift()


//function = for s=sort r=revresing a=associativ foor value
sort($array , SORT_REGULAR)
sort($array , SORT_STRING)
rsort($array , SORT_REGULAR)//تنازلي
rsort($array , SORT_STRING)
asort($array , SORT_STRING)
arsort($array , SORT_STRING)


//function = for reserve
array_reverse($array , false)//default with key
array_reverse($array , true)// without key

//function = for shuffle
shuffle($array)//خلط


//function = for fill //to make multideminsion array
array_fill(index , Number , value);
array_fill(2 , 5 , amjad);
array_fill(-4 , 3 , array("hdd","hgdkd",array_fill(3,5,"fatema")));


//function = for sum just for number value
array_sum($array);

//function = for Rand "randume" ....make a new array
// export randume value from array
array_rand($array , Number);
$array = array("12 ","56 ","673 ")
$randArray = array_rand($array , 2)
echo $array[randArray[0]];
echo $array[randArray[1]];

//function = for unique ....just 
array_unique($array , Sorting Type);






























