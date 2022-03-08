<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MenuModel;

class MenuController extends Controller{
    /**
     * Instance of the main Request object.
     * 
     * @var HTTP\IncomingRequest
     */
    protected $request;

    function __construct()
    {
        $this->menus = new MenuModel();
    }
    public function tampil()
    {
        $data ['data']= $this->menus->findAll();
        return view('MenuList',$data);

    }
    public function simpan()
    {
        #code...
        $data = array(
            'nama'=>$this->request->getPost('nama'),
            'harga'=>$this->request->getPost('harga'),
            'jenis'=>$this->request->getPost('jenis'),
            'stok'=>$this->request->getPost('stok'),
        );
        $this->menus->insert($data);
        return redirect('menu')->with('success','Data berhasil disimpan');
    }
    public function delete($id)
    {
        #code...
        $this->menus->delete($id);
        return redirect('menu')->with('success','Data berhasil dihapus');
    }
    public function edit($id)
    {
        $pass = $this->request->getPost('nama');
        if(empty($pass)){
            $data = array(
                'harga'=>$this->request->getPost('harga'),
                'jenis'=>$this->request->getPost('jenis'),
                'stok'=>$this->request->getPost('stok'),
            );
        }else{
            $data = array(
                'nama'=>$this->request->getPost('nama'),
                'harga'=>$this->request->getPost('harga'),
                'jenis'=>$this->request->getPost('jenis'),
                'stok'=>$this->request->getPost('stok'),
            );
            $this->menus->update($id,$data);
            return redirect('menu')->with('success','data berhasil diedit');
        }
    }
}



        