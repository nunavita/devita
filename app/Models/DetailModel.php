<?php 
namespace App\Models;

use CodeIgniter\Model;

class DetailModel extends Model{
    protected $table      = 'tb_detail_pesanan';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id','tanggal','total_harga','no_meja','nama_pemesan','jumlah'];
}