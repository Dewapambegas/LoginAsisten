<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Pendaftaran</title>
</head>
<body>
<h1>PENDAFTARAN ASISTEN PRAKTIKUM</h1>
<form action="/asisten/hapus" method="post">
<?= csrf_field() ?>
NIM:<input type="text" name="nim" /><br />
<input type="submit" name="" value="Hapus" />
</form>
</body>
</html>