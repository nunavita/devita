<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PesananModel;

class LaporanController extends Controller{
    /**
     * Instance of the main Request object.
     * 
     * @var HTTP\incomingRequest
     */
    protected $request;

    function __construct()
    {
        $this->laporan = new PesananModel();
    }
    public function tampil()
    {
        $data['data']= $this->laporan->findAll();
        return view('DetailList', $data);
    }
    public function delete($id)
    {
        #code...
        $this->detailpesanans->delete($id);
        return redirect('laporan')->with('success','Data berhasil dihapus');
    }
}