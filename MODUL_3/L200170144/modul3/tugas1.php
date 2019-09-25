<html>
<head><title>Program Penjumlahan</title></head>
<body>
    <form method="POST" action="tugas1.php">
		<p>Nilai A adalah : <input type="text" name="nilaia" size="3"></p>
		<p>Nilai B adalah : <input type="text" name="nilaib" size="3"></p>
        <p><input type="submit" name="submit" value="Jumlahkan"></p>
	</form>
    <?php
    error_reporting (E_ALL ^ E_NOTICE);
    $nilaia = $_POST['nilaia'];
    $nilaib = $_POST['nilaib'];
    $submit = $_POST['submit'];
    $jumlah = $nilaia+$nilaib;
    if($submit) {
        echo"</br> Nilai A adalah: $nilaia";
        echo"</br> Nilai B adalah: $nilaib";
        echo"</br> Jadi Nilai A ditambah Nilai B adalah $jumlah";
    }
    ?>
</body>
</html>