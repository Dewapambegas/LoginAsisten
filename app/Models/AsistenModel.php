<?php
namespace App\Models;
use CodeIgniter\Model;
class AsistenModel extends Model
{
protected $table = 'asisten';
protected $primaryKey = 'NIM';
protected $allowedFields = ['NIM', 'NAMA', "PRAKTIKUM", "IPK"];
 public function simpan($record)
{
$this->insert([
'NIM' => $record['nim'],
'NAMA' => $record['nim'],
'PRAKTIKUM' => $record['praktikum'],
'IPK' => $record['ipk'],
]);
}
public function edit($record)
{
    $this->update($record['nim'],
    ['NAMA' => $record['nama'],
    'PRAKTIKUM' => $record['praktikum'],
    'IPK' => $record['ipk'],]
    );
}
public function hapus($record)
{
$this->delete($record);
}
}