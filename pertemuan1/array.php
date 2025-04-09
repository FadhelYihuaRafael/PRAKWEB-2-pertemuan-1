<?php 
$temansaya = ["jamet","tekik","ispul"];
print_r($temansaya); //untuk menampilkan seluruh nilai array
echo $temansaya[2];
echo "<ol>";
foreach ($temansaya as $key => $value) {
    echo"<li>$key. $value</li>";
}
echo "</ol>";
$temansaya[1] = "mamat";
unset($temansaya[0]);
print_r($temansaya);

echo "<br><br><br>";
$buah = [ "m" =>"mangga","a"=>"apel"];
print_r($buah);
echo "<br>";

//array pop
 $tims = ["amir","hamam","ardi","agus"];
 array_pop($tims);
 foreach ($tims as $person) {
    echo $person.',<br/>';
 }
 echo "<br>";
//array push
$tims = ["erwin", "heru","ali", "zaki"];

array_push($tims, "wati");

foreach($tims as $person) {

echo $person.'<br/>';
}
echo "<br>";
//array shift
$tims = ["erwin", "heru", "ali", "zaki"];

array_shift($tims);

foreach($tims as $person) {

echo $person. '<br/>';
}
echo "<br>";
//array unshift
$tims = ["erwin", "heru", "ali", "zaki"];

array_unshift($tims, "joko", "wati");

foreach($tims as $person) {

echo $person.'<br/>';

}
?>