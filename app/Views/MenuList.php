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

<div class="container">
    <h3>Data Menu</h3>
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addMenu">Tambah data</button>

    <table class="table table-striped">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th> 
            <th>Jenis</th>    
            <th>stok</th> 
            <th>Option</th>      
        </thead>
        <tbody>
            <?php 
            $no=1;
            foreach ($data as $row) :
            ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$row ['nama']?></td>
                <td><?=$row ['harga']?></td>
                <td><?=$row ['jenis']?></td>
                <td><?=$row ['stok']?></td>
                <td><a href="#"class="btn btn-info btn-sm btn-edit" data-toggle="modal" data-target="#editMenu-<?=$row["id"]?>">Edit</a> 
                <a href="<?= base_url('menucontroller/delete/'.$row['id'])?>" onclick="return confirm('Yakin Akan Dihapus')" class="btn btn-danger btn-sm btn-delete">Hapus</a></td>
            </tr>
            <form action="<?= base_url('menu/edit/'.$row['id'])?>" method="post">
<div class="modal fade" id="editMenu-<?=$row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=base_url('menus')?>" method="post">
            <div class="modal-body">

            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?=$row['nama']?>">
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" placeholder="Harga" value="<?=$row['harga']?>">
            </div>

            <div class="form-group">
                <label>Jenis</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault1" value="makanan" <?=$row['jenis']=="makanan"?
                "checked":""?>>
                <label class="form-check-label" for="flexRadioDefault1">Makanan</label>
            </div>
            </div>

            <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault2" value="minuman" <?=$row['jenis']=="minuman"?
                "checked":""?>>
                <label class="form-check-label" for="flexRadioDefault2">Minuman</label>
            </div>
            </div>

            <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault3" value="camilan" <?=$row['jenis']=="camilan"?
                "checked":""?>>
                <label class="form-check-label" for="flexRadioDefault3">Camilan</label>
            </div>
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="text" class="form-control" name="stok" placeholder="Stok" value="<?=$row['stok']?>">
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</div>
</form>
    </div>
</div>
            <?php 
            $no++;
            endforeach?>
        </tbody>
     </table>
</div>

<!-- Modal Add User -->
<form action="/menucontroller/simpan" method="post">
<div class="modal fade" id="addMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=base_url('menu')?>" method="post">
            <div class="modal-body">

            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama">
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" placeholder="Harga">
            </div>

            <div class="form-group">
                <label>Jenis</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault1" value="makanan">
                <label class="form-check-label" for="flexRadioDefault1">Makanan</label>
            </div>
            </div>

            <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault2" value="minuman">
                <label class="form-check-label" for="flexRadioDefault2">Minuman</label>
            </div>
            </div>

            <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault3" value="camilan">
                <label class="form-check-label" for="flexRadioDefault3">Camilan</label>
            </div>
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="text" class="form-control" name="stok" placeholder="Stok">
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</div>
</form>
<!-- End Modal Add User -->

<?= $this ->endSection()?>