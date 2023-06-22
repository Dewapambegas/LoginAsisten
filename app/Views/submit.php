<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<form action="./proseskelulusan" method="get">
<label for="NIM">NIM</label>
<input type="text" name="NIM" id="NIM">
<br>
<label for="Nama">Nama</label>
<input type="text" name="Nama" id="Nama">
<br>
<label for="StatusKelulusan">Status Kelulusan</label>
<select name="StatusKelulusan" id="StatusKelulusan">
<option value="Memuaskan"> Memuaskan</option>
<option value="SangatMemuaskan">Sangat Memuaskan</option>
<option value="Cumlaude">Cumlaude</option>
</select>
<br>
<input type="submit" value="Kirim">
</form>
</body>
</html>
