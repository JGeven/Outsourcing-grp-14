<?php
$string = "https://docs.google.com/spreadsheets/d/1YsDgPYC0yy9NswwGcNFQ6P1F2gt2wObEhATOJFuKuWg/";

if (preg_match("/([https:\/\/docs.google.com\/spreadsheets\/d\/\w{44}])\//", $string)) {
    echo "Its a match!";
}
?>