PS D:\belajar-php> php Constant.php
Anet :Belajar PHP
Skill :80
PS D:\belajar-php>

<?php
// "author" sebagai constantnya dan gunakan upper case, "belajar php" adalah valuenya boleh string boleh integer (int)
define("ANET",  "Belajar PHP");

// contoh ke-2
define("SKILL", 80);

// untuk menampilkan langsung saja menggunakan nama constantnya dan tidak perlu string
echo "Anet :";
echo ANET;
echo "\n";

echo "Skill :";
echo SKILL;


