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
    <h3>Laporan</h3>

    <table class="table table-striped">
        <thead>
            <th>No</th>
            <th>User Id</th>
            <th>Tanggal</th> 
            <th>Total Harga</th> 
            <th>no meja</th> 
            <th>nama pemesan</th> 
            <th>Option</th>      
        </thead>
        <tbody>
            <?php 
            $no=1;
            foreach ($data as $row) :
            ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$row ['user_id']?></td>
                <td><?=$row ['tanggal']?></td>
                <td><?=$row ['total_harga']?></td>
                <td><?=$row ['no_meja']?></td>
                <td><?=$row ['nama_pemesan']?></td>
                <td><a href="#"class="btn btn-info btn-sm btn-edit">Edit</a> <a href="<?= base_url('DetailController/delete/'.$row['id'])?>" onclick="return confirm('Yakin Akan Dihapus')" class="btn btn-danger btn-sm btn-delete">Hapus</a></td>
            </tr>
          
            <?php 
            $no++;
            endforeach?>
        </tbody>
     </table>
</div>


<?= $this ->endSection()?>