NOTE :
1. Array adalah tipe data yang berisikan kosong atau banyak data
2. Array di PHP bisa berisikan data dengan jenis berbeda-berbeda
3. Array di PHP memiliki panjang dinamis (artinya bisa menambah data ke Array sebanyak-banyanknya, tidak dibatai kapasitasnya)

<?php

//cara pertama menggunakan kaat kunci array()
$array1 = array(1,2,3,4);
var_dump($array1);
echo "\n";
// cara kedua menggunakan kurung kotak
$array2 = ["anita", "rahmawati"];
var_dump($array2);
echo "\n";

// Operasi Array
// mengambil data menggunakan index
$names = ["Anita", "Rahmawati"];
echo $names[0];
echo "\n";
var_dump($names[1]);
echo "\n";

// mengubah data di Array menggunakan index
$names[0] = "Maqueen";
var_dump($names);

// menghapus data menggunakan unset, ingat jika kita hapus data maka indxnya akan loncat ke angka selanjutnya (tidak akan diurutkan kembali)
$hewan = ["kambing", "kucing", "monyet", "kelinci"];
unset($hewan[2]);
var_dump($hewan);

// nambah data
$hewan[] = "katak";
var_dump($hewan);
echo "\n";

// menghitung jumlah data di Array
var_dump(count($hewan));
?>

