<?php
// Array with names
$a[] = "Andhra Pradesh";
$a[] = "Arunachal Pradesh";
$a[] = "Assam";
$a[] = "Bihar";
$a[] = "Chhattisgarh";
$a[] = "Goa";
$a[] = "Gujarat";
$a[] = "Haryana";
$a[] = "Himachal Pradesh";
$a[] = "Jammu and Kashmir";
$a[] = "Jharkhand";
$a[] = "Karnataka";
$a[] = "Kerala";
$a[] = "Madhya Pradesh";
$a[] = "Maharashtra";
$a[] = "Manipur";
$a[] = "Meghalaya";
$a[] = "Mizoram";
$a[] = "Nagaland";
$a[] = "Odisha";
$a[] = "Punjab";
$a[] = "Rajasthan";
$a[] = "Sikkim";
$a[] = "Tamil Nadu";
$a[] = "Telangana";
$a[] = "Tripura";
$a[] = "Uttar Pradesh";
$a[] = "Uttarakhand";
$a[] = "West Bengal";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>