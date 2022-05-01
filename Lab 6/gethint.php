<?php
// Array with names
$a[] = "Aethetic ";
$a[] = "Enchanted ";
$a[] = "Sygmaz ";
$a[] = "DalaBari ";
$a[] = "Biyebari";
$a[] = "Paper Boutique ";
$a[] = "Glitz";
$a[] = "Vision";
$a[] = "Cavazo ";
$a[] = "Lomofi";
$a[] = "Indigo";
$a[] = "Vows";
$a[] = "Kavazo ";
$a[] = "WarPhaze";

$a[] = "Makeup-Amanah Rahman makeup artistry";
$a[] = "Makeup-Salina Amir makeup artistry";
$a[] = "Makeup- Shareef artistry";

$a[] = "Caterer-Dine In";
$a[] = "caterer-FoodHall";

$a[] = "clothing-Haya";
$a[] = "clothing-Sahar Rahman-";
$a[] = "Clothing-Warah";

$a[] = "Bridal-Shoes";
$a[] = "Bridal-Clutch store";

$a[] = "Groom-clothing";
$a[] = "Josh-Shoes";
$a[] = "-Card Invites";

$a[] = "band-Shunno";
$a[] = "band-Zaar";




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
echo $hint === "" ? "no such name is available" : $hint;
?>