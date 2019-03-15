<?php

$a = 0;

while($a < 10) {
    echo "WHILE... <br/>";
    $a++;
}

echo "<hr/>";
// *****************************

$b =1;

do {
    echo $b."<br/>";
    $b++;
}while($b < 10);

// ***************************

$studenti = [
    ['ime' => 'Pero', 'prezime' => 'Perovski'],
    ['ime' => 'Aleksandra', 'prezime' => 'Aleksandrovski'],
    ['ime' => 'Stanko', 'prezime' => 'Stankovski'],
    ['ime' => 'Petko', 'prezime' => 'Petkovski'],
    ['ime' => 'Janko', 'prezime' => 'Jankovski'],
    ['ime' => 'Ana', 'prezime' => 'Aneska'],
];

$MAX_IME = 0;
$MAX_PREZIME = 0;
$MIN_IME = 100;
$MIN_PREZIME = 100;

$najdolgo_ime = '';
$najdolgo_prezime = '';
$najkratko_ime = '';
$najkratko_prezime = '';

for($i = 0; $i < count($studenti); $i++){
    if(strlen($studenti[$i]['ime']) > $MAX_IME) {
        $MAX_IME = strlen($studenti[$i] ['ime']);
        $najdolgo_ime = $studenti[$i] ['ime']; 
    }
    if(strlen($studenti[$i]['ime']) > $MAX_PREZIME) {
        $MAX_PREZIME = strlen($studenti[$i] ['prezime']);
        $najdolgo_prezime = $studenti[$i] ['prezime'];
        
    }
    if(strlen($studenti[$i]['ime']) < $MIN_IME) {
        $MIN_IME = strlen($studenti[$i] ['ime']);
        $najkratko_ime = $studenti[$i] ['ime'];
        
    }
    if(strlen($studenti[$i]['ime']) < $MIN_PREZIME) {
        $MIN_PREZIME = strlen($studenti[$i] ['prezime']);
        $najkratko_prezime = $studenti[$i] ['prezime'];
        
    }
}

echo "<p>Najdolgo ime e imeto: $najdolgo_ime</p>";
echo "<p>Najkratko ime e imeto: $najkratko_ime</p>";
echo "<p>Najdolgo prezime e prezimeto: $najdolgo_prezime</p>";
echo "<p>Najkratkoto prezime e prezimeto: $najkratko_prezime</p>";

foreach($studenti as $student) {
    echo $student['ime']."<br/>";
}

echo "<hr/>";
// *****************************

$niza = ['a', 'b','c'];

foreach($niza as $bukva) {
    echo $bukva. "<br/>";
}

echo "<hr/>";
// *****************************

foreach($niza as $index => $bukva){
    echo "$index = $bukva<br/>";
}
echo "<hr/>";
// *****************************

$stu = ['ime' => 'Pero', 'prezime' => 'Perovski'];

foreach($stu as $key => $value){
  echo "$key = $value<br/>";  
}

echo "<hr/>";
// ********************************************

// $data = file_get_contents('text.txt');
// echo nl2br($data); //new line breakline (sekogas koga ke naide na nova linija ke postavi <br>)

$size = filesize('text.txt');
echo "$size<br/>";

$fh = fopen('text.txt', 'r'); // filehandler (fh) otvoranje na fajlot so ime text.txt vo mod za citanje(r)ead
$data = fread($fh, $size);
echo $data;
fclose($fh);

echo "<hr/>";

// b kb - 1024 b - 1024kb gb 1024 mb 


$fh = fopen('nov_fajl.txt', 'a+');
fwrite($fh, 'TEST TEST TEST TEST');
fclose($fh);





?>