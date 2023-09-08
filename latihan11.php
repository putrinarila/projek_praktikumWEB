<!DOCTYPE html>
<html>

<head>
    <title>Studi Kasus 2: Prefilling pada Checkbox</title>
</head>

<body>
    <div>
        <h1>@@@@ MENU MAKANAN @@@@</h1>
        <div id='info'>Makanan Lezat, Enak, Bergizi</div>
        <em>Pilih menu lebih dari satu!!!:</em>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="checkbox" name="makanan[]" value="soto"
                <?php if (isset($_POST['makanan']) && in_array('soto', $_POST['makanan'])) echo "checked"; ?>> Soto
            Madura<br>

            <input type="checkbox" name="makanan[]" value="sate"
                <?php if (isset($_POST['makanan']) && in_array('sate', $_POST['makanan'])) echo "checked"; ?>> Sate Ayam
            Kampung<br>

            <input type="checkbox" name="makanan[]" value="nasgor"
                <?php if (isset($_POST['makanan']) && in_array('nasgor', $_POST['makanan'])) echo "checked"; ?>> Nasi
            Goreng Mawut<br>

            <input type="checkbox" name="makanan[]" value="rawon"
                <?php if (isset($_POST['makanan']) && in_array('rawon', $_POST['makanan'])) echo "checked"; ?>> Rawon
            Daging<br>

            <input type="submit" value="OK">
        </form>
        <?php 
		if (isset($_POST['makanan'])) {
			echo "<div id='pilihan'>Anda memilih makanan berikut:</div><br/>";
			echo "<ul>";
			foreach ($_POST['makanan'] as $value) {  //looping untuk menampilkan makanan yang di pilih
				echo "<li style='text-align:left'>$value</li>";
			}
			echo "</ul>";
		}
		?>
    </div>
</body>

</html>