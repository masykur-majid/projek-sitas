<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Penjumlahan 2 bilangan</title>
</head>
<body>
	<h3>Mencetak Angka Kelipatan Tertentu</h3>
	<form action="" method="GET">
		<label>Masukan Angka Kelipatan</label><br>
		<input type="number" name="angkaKelipatan"><br><br>

        <label>Masukan Angka Akhir Kelipatan</label><br>
		<input type="number" name="angkaAkhir"><br><br>
        
		<button type="submit">Tampilan</button><br><br>
	</form>
</body>
</html>

<?php
        if(isset($_GET['angkaKelipatan'])&&isset($_GET['angkaAkhir'])){
            if(is_numeric($_GET['angkaKelipatan']) || is_numeric($_GET['angkaAkhir'])){
                $kelipatan = $_GET['angkaKelipatan'];
                $akhir = $_GET['angkaAkhir'];
                $awal = 1;

                for($awal; $awal <= $akhir; $awal++){
                    if($awal % $kelipatan == 0){
                        echo $awal."<br>";
                    }
                }
            }
        }else{
            echo "salah satu data di form berlum terisi!";
        }
        
?>
