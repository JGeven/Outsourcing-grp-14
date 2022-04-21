<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	<?php

    //voor nu een vaste link, vul hieronder een variable of anders in voor de link te gebruiken.
	$url = "https://docs.google.com/spreadsheets/d/1YsDgPYC0yy9NswwGcNFQ6P1F2gt2wObEhATOJFuKuWg/";
    
	if (preg_match("/(https:\/\/docs.google.com\/spreadsheets\/d\/(\w{44}))\//", $url, $array))
	{
        $id = $array[array_key_last($array)];
        //verander de echo naar return om het in een functie te hebben.
        echo $id;
	}
    else
    {
        //verander de text of de functie zoals je wilt hebben, dit was alleen een indicatie of de code werkt.
        echo "Failed!";
    }
	?>
	</body>
</html>

