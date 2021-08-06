<!-- bahasa pemrograman php selalu di awali dengan <?php  ?> dan suatu perintah biasanya diakhiri dengan ; -->
<!-- untuk mejalankan file ini menggunakan url https://localhost/phpdasar/ -->
<!-- Hello world -->
<?php
// tipe data string selalu menggunakan ""
echo "hello world. ";

echo "<br>";
// space / enter

// tipe data number (angka), tipe data number ada 2 jenis, ada tipe data int(bilangan bulat) dan float(bilangan pecahan), tipe data int ada beberapa jenis, bilangan bulat decimal (base 10), hexadescimal (base 16), octal (base 8), binary (base 2).
// untuk penggunaan angka + dan -, cukup menambahkan - jika bilangan negatif dan + jika bilangan positif, tapi + tidak wajib.
// contoh tipe data number int
echo "Decimal : ";
var_dump(1234);
echo "Octal : ";
var_dump(01234);
echo "Hexadecimal : ";
var_dump(0x1A);
echo "Binary : ";
var_dump(0b111111);
echo "Underscore di number : ";
var_dump(1_234_567);

echo "<br>";

// contoh tipe data number float
echo "floating point :";
var_dump(1.234);
echo "floating point dengan E notation Plus (1.7 x 1000) :";
var_dump(1.7e3);
echo "floating point dengan E notation Minus (1.7 x 0.001) :";
var_dump(1.7e-3);
echo "underscore floating point : ";
var_dump(1_234.567);
// titik di tpe data number float sebagai pengganti koma
// penggunaan undrscore di number akan otomatis di ignore(tidak ditampilkan), underscore hanya sebagai pemisah saja
// var_dump berfungsi untuk melihat isi data dan tipe data
?>