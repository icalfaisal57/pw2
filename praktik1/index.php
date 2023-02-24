<?php
// ini komentar
/* ini komentar digunakan untuk lebih dari sebaris */
# sebaris
echo "hello world<br>";
echo 'hello world<br>';
print_r("ahmad faisal nurhakim <br>");
var_dump("STT NURUL FIKRI");
echo "<hr>";

$nama = "ahmad faisal nurhakim";
$umur = "18";
$berat = "60";

echo "nama saya  $nama <br>";
echo "umur saya $umur tahun <br>";
echo "berat saya $berat kilogram <br>";
echo "<hr>";
// membuat array
$programs = ["php<br>", "javascript<br>","html<br>","css<br>"];
echo $programs[0];
echo "<hr>";
foreach ($programs as $program){
    echo $program;
};

?>