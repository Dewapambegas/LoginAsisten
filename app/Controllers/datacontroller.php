<?php
namespace App\Controllers;
class datacontroller extends BaseController
{
public function proses($p = 'kosong')
{
$data['NIM'] = $_GET['NIM'];
$data['Nama'] = $_GET['Nama'];
$data['StatusKelulusan'] = $_GET['StatusKelulusan'];
return view('data', $data);
}
public function input()
{
return view('submit');
}
}