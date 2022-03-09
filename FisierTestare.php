<?php


	//Am facut si un comentariu nou aici, tot din bun simt


	//Si am ster un comentariu, la fel din bun simt	
	$arra = array(0,1,2,3,4,5,6,7,8,9,10);
	$rez = array_reverse($arra);
	print_r($rez);
	
	$x = 4;
	$y = 8;
	$arra = array(0,1,2,3,4,5,6,7,8,9,10);
	foreach ($arra as $key => $value) {
		if ($value > $x && $value < $y) {
			echo " $key";
		}
	}
	

	/* 1.i
	$arra = array(5,9,6,8,1,2,4,3,7);
	$rez = array_diff($arra, [max($arra), min($arra)]);
	print_r($rez);
	*/

	/*3
	//Pentru crearea unui array cu rand()
	//array_map(function () {
    //   return rand(0, 100);
    //}, array_fill(0, 10, null));


	//Eu am folosit alta metoda
	$arra = range(0, 100);
	shuffle($arra);
	$arra = array_slice($arra ,0,10);
	$arra2 =$arra;
	echo "Tabliul initial <br>";
	print_r($arra);
	echo "Tabloul modificat <br>";
	$minKey = array_search(min($arra), $arra);
	$temp = $arra2[0];
	$arra2[0] = min($arra);
	$arra2[$minKey] = $temp;
	print_r($arra2);
	*/

	/* 5.b
	$arra = array(0,1,2,3,4,5,6,7,8,9,10);
	print_r($arra);
	function impar($var)
	{
	    return $var & 1;
	}
	$arra2 = array_filter($arra, "impar");
	print_r($arra2);
	*/
?>
