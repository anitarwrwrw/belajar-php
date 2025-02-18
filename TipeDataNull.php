NOTE :
1. Nilai Null mmepresentasikan sebuah variable tanpa nilai
2. Saat kita membuat variable, lalu ingin menghapus data yang ada di variable tersebut, kita bs menggunakan NULL untuk mengosongkan nilai atau value  dari varible tersebut
3. Untuk membuat data NULL kita bisa menggunakan kata kunci NULL (case Insensitive) huruf besar kecil tidak masalah.

<?php
// menghapus value variable $name tanpa menghapus variablenya
$name = "anet";
// cukup buat variable name dengan value NULL
$name = null;

// atau ingin membuat variabe saja tanpa value, bisa menggunakan kata kunci NULL
$age = null;

echo "Name :";
echo $name;
echo "\n";

echo "Age :";
echo $age;
echo "\n";

// untuk mengecek apakah data null
// unutk mengecek apakah data bernilai null atau tidak, gunakan funct is_null($variable)
echo "ini null atau tidak ? ";
echo is_null($name);
echo "\n";
// ini returnnya adalah boolean (false/true) di php return boolean bisa berupa angka, selain 0 dia dianggap true atau null.

// coba menggunakan vardump untuk lebih jelas
$name = "anett false";
$name = null;

echo "null ga ? ";
var_dump(is_null($name));
echo "\n";

// bisa juga menghapus variable dengan menggunakan funct Unset($variable)
$contoh = "unset";
unset($contoh);

echo $contoh;
var_dump(isset($contoh));



