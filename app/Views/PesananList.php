<?= $this->extend ('layouts/admin') ?>
<?= $this->section ('content')?>
<?php
    if(session()->getflashdata('success')){
?>
<div class="alert alert-success alert-dismissble fade show" role="alert" >
    <?= session()->getflashdata('success')?>
    <button type="button" class="close" data-dismiss="alert" aria-label="close">x</butoon>
</div>
<?php
    }
?>

<div class="row">
    <div class="col-md-6">
        <form action="<?=base_url('pesan')?>" method="post">
        <div class="card shadow mb-3 border-left-success">
            <div class="card-body">
                <div class="card-form">
                    <label for="menu">Menu</label>
                    <select name="menu_id" id="menu_id" class="form-control">
                        <option value="">Silahkan Pilih menu</option>
                         <?php
                        foreach($data as $key=>$row){
                        ?>
                            <option value="<?=$row['id']?>"><?=$row['nama']?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah">jumlah</label>
                    <input type="number" class="form-control" name="jumlah" id="jumlah">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Masukan Keranjang</button>
                </div>
            </div>
        </div>
        </form>
    </div>
    <div class="col-md-6">
        <form action="<?= base_url('pesanan')?>" method="post">
        <div class="card shadow mb-3 border-left-success">
            <div class="card-body">
                <div class="form-group">
                    <label for="total_harga">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="form-group">
                    <label for="no_meja">Nomor Meja</label>
                    <input type="number" class="form-control" name="no_meja" id="no_meja">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="card">
        <card class="header">
            <h3 class="card-title"><strong>Data Pesanan</strong></h3>
        </card>
    <div class="table-responsive">
        <table class="table table-bordered">
        <thead>
            <th>no</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total Harga</th> 
            <th>Option</th>         
        </thead>
        <tbody>
            <?php 
            if($menu !=null){
                $no=1;
                foreach ($menu as $row){
            ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$row ['nama']?></td>
                <td><?=$row ['jumlah']?></td>
                <td><?=$row ['harga']?></td>
                <td><?=$row ['jumlah']*$row['harga']?></td>
                <td><a href="" class="btn btn-dark">Hapus</a>
            </tr>
            <?php
                }
            }?>
        </tbody>
        </table>
    </div>
</div>

<div class="card-footer">
    <button class="btn btn-success">Bayar</button>
</div>
</div>
<?= $this ->endSection()?>