<!DOCTYPE html>
<html>

<head>
    <title>Latihan 1_2</title>
</head>

<body>
    <form action="<?php $_SERVER ['PHP_SELF']; ?>" method="post">
        NAMA
        <input type="text" name="nama" /><br />
        <input type="submit" value="Login" /><br />
    </form>

    <?php
			if (isset ($_POST['nama'])){
				echo "Hello " .$_POST['nama'];
			}
		?>
</body>


</html>