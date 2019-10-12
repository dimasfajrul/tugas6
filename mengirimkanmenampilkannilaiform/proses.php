<?php
/**Untuk mengambil nilai form HTML, PHP menyediakan 2 buah variabel global
yaitu variabel $_GET dan $_POST*/

/*disini kiita menggunakan variabel GET dikarenakan pada form.html
kita sudah memasukan method
<form action="proses.php" method="get">*/
echo $_GET['nama'];
echo "<br />";
echo $_GET['email'];
/**lalu akan menampilkan tampilan nama dan email yang kita masukkan di form tadi */
?>