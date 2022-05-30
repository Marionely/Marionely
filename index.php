<?php

echo "Hello master";


//////////////////////////////////////// DEV


function sumExample($a, $b){
    return $a + $b;
}

function differenceExample($a, $b){
    return $a - $b;
}

function multipleExample($a, $b){
    return $a * $b;
}

function divisionExample($a, $b){
    return $a / $b;
}

$resSum = sumExample(3, 4);
echo $resSum;

$resDiff = differenceExample(12, 5);
echo $resDiff;

$resMultiple = multipleExample(4,4);
echo $resMultiple;

$resDivision = divisionExample(10, 2);
echo $resDivision;

class User {

    function getName($name) {
        return $name;
    }

    function getLastName($lastName){
        return $lastName;
    }

    function getMiddleName($middleName){
        return $middleName;
    }

    function getAge($age){
        return $age;
    }
}

$resClass = new User();

$resName = $resClass->getName("Ivan");
echo $resName;

$resLastName = $resClass->getLastName("Ivanov");
echo $resLastName;