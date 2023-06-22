<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aplikasi To Do List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h3>APLIKASI TO-DO-LIST</h3>
</div>
  
<div class= "container mt-3" >
  <div class="row">
    <div class="col-sm-4">
    <form action="<?= site_url('todo/addTodo') ?>" method="POST">
      <P>
        <label for="nama">Nama kegiatan :</label>
        <input name="nama" id="nomor" type="text">
        <input name="send" type="submit" value="Tambahkan">
      </P>
      <?php if (!empty($todos)): ?>
        <table class='table'>
          <thead>
            <tr>
              <th>ID</th>
              <th>Kegiatan</th>
              <th>Status</th>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($todos as $todo): ?>
              <tr>
                <td><?= $todo['idkegiatan'] ?></td>
                <td><?= $todo['kegiatan'] ?></td>
                <td><?= $todo['status'] ?></td>
                <td>
                  <a href="<?= base_url('todo/selesai/' . $todo['idkegiatan']) ?>">Selesai</a>
                  <a href="<?= base_url('todo/hapus/' . $todo['idkegiatan']) ?>">Hapus</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php endif; ?>
      <p>
        Daftar Kegiatan :
      </p>
      <br>
      <br>
      <br>
      <p>
        2153140117
        Bernardinus Ravito Dewa Pambegas
      </p>
    </div>
  </div>
</div>

</body>
</html>