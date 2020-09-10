<?php 

//tableau
/*

	#'key' => 'value'*
	/*'id' 		=> 15,
	'prenom' 	=> 'Nicolas',
	'nom' 		=> 'Dupont',
	'age' 		=> 20*/
	/*
$identitPersonneA = array(
	
15, 'Nicolas', 'Dupont', 20);



	
echo 'Bonjour  '.$identitPersonneA[1]
.'   '.$identitPersonneA[2]
.'   '.$identitPersonneA[0].'  ans!';
*/

// CONDITION
/*
$age = 5;
$age = 20;
if ($age) {
	# code...
	echo "Vous etes Majeur $age";
} else {
	# code...
	echo "Vous etes mineur";
}
*/
// CONDITION MULTIPLE
//CONDITION TERNAIRE
// (CONDITION)? TRUE : FALSE 
/*
$numb = 10;
echo ($numb % 2 == 0 )? "PAIRE" : "IMPAIRE"; 
*/

// BOUCLE
// BOUCLE WHILE

/*while ( $ligne < 10) {
	# code...
	echo " $ligne  ?!?    Ligne  $ligne  du  programme BOUCLE WHILE".($ligne+1)."   <br/> " ;
	$ligne++;
	*/ 

//Boucle FOR
/*
	for ($ligne=0; $ligne < 10; $ligne++) { 
		# code...
		echo " $ligne  ?!?    Ligne  $ligne  du  programme BOUCLE FOR   ".($ligne+1). "<br/>" ;
	}

*/

//BOUCLE FOREACH
/*
	'AAAA' => 'a', 
	'BBBB' => 'b', 
	'CCCC' => 'c', 
	'DDDD' => 'd', 
	'EEEE' => 'e'
	*/
	/*
$user = array(

	'AAAA', 
	'BBBB', 
	'CCCC', 
	'DDDD', 
	'EEEE'

);

for ($i=0; $i < 5; $i++) { 
	# code...
	echo $user [$i]."<br/>";
}
*/

/*
$user = array(	
	'AAAA' => 'a', 
	'BBBB' => 'b', 
	'CCCC' => 'c', 
	'DDDD' => 'd', 
	'EEEE' => 'e'
);

foreach ($user as $key => $value) {
	# code...
 	echo  $key.'  index  '.$value."<br/>";		
}
// attention !!
for ($i=0; $i < 5; $i++) { 
	# code...
	echo $user [$i]."<br/>";
}

*/


//BOUCLE DO WHILE
/*
$valeur = -10;
//$valeur= 20;
do {
	# code...
echo "la valeur de x est :   ".($valeur)."<br/>";
$valeur++;

} while ( $valeur<= 10);

echo " ECHO la valeur de x est :   ".($valeur)."<br/>";
*/

//BOUCLE IMBRIQUE
/*
for ($i=0; $i <= 5 ; $i++) { 
	# code...
	for ($j=0; $j < 6 ; $j++) { 
		# code...
		echo $i*$j."  ||   ";
	}
	echo '$'."<br/>";
}
*/

//TABLEAU DE MULTIPLICITE


echo '<table border style="border-collapse: collapse;">
<tr>
	<th></th>
	<th>1</th>
	<th>2</th>
	<th>3</th>
	<th>4</th>
	<th>5</th>
	<th>6</th>
	<th>7</th>
	<th>8</th>
	<th>9</th>
	<th>10</th>
</tr>';

for ($i=1; $i <= 10; $i++) {

	echo '<tr><th>'.$i.'</th>';

for ($j=1; $j <= 10 ; $j++) {

	echo '<td>'.$i*$j.'</td>';

}

	echo "</tr>";

}





?>