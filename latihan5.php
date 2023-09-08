<!DOCTYPE html>
<html>

<head>
    <title>Prefill Radio Button</title>
</head>

<body>
    <form action="<?php $_SERVER ['PHP_SELF']; ?>" method="POST">
        Jenis Kelamin
        <input type="radio" name="sex" value="Pria" checked /> Pria
        <input type="radio" name="sex" value="Wanita" /> Wanita<br />
        <button type="submit" name="ok">OK</button><br />
    </form>

    <?php
			if (isset ($_POST['ok'])){
				echo $_POST['sex'];
			}
		?>
</body>


</html>