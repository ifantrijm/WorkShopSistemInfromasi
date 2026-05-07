<?php
include("class_lib.php");
$person1 = new person();
$person1->set_name('Lukman Hakim');
echo $person1->get_name(); // OK
echo "Hai " . $person1->name = 'Taufiq Rizaldi'; // ERROR!
?>