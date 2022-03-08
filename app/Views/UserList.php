<?= $this->extend ('layouts/admin') ?>
<?= $this->section ('content')?>
<div class="container">
    <h3>Data User</h3>
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addUser">Tambah data</button>

    <table class="table table-striped">
        <thead>
            <th>id</th>
            <th>nama</th>
            <th>username</th> 
            <th>password</th>  
            <th>role</th>        
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
                <td><?=$row ['username']?></td>
                <td><?=$row ['password']?></td>
                <td><?=$row ['role']?></td>
                <td><a href="#"class="btn btn-info btn-sm btn-edit" data-toggle="modal" data-target="#editUser-<?=$row['id']?>">Edit</a> 
                <a href="<?= base_url('usercontroller/delete/'.$row['id'])?>" onclick="return confirm('Yakin Akan Dihapus')" class="btn btn-danger btn-sm btn-delete">Hapus</a></td>
            </tr>
            <form action="<?= base_url('user/edit/'.$row['id'])?>" method="post">
<div class="modal fade" id="editUser-<?=$row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=base_url('users')?>" method="post">
            <div class="modal-body">

            <div class="form-group">
                <label>Nama User</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama User" value="<?=$row['nama']?>">
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username" value="<?=$row['username']?>">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" placeholder="Password">
            </div>

            <div class="form-group">
                <label>Role</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="kasir" <?=$row['role']=="kasir"?
                "checked":""?>>
                <label class="form-check-label" for="flexRadioDefault1">Kasir</label>
            </div>
            </div>

            <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault2" value="manager" <?=$row['role']=="manager"?
                "checked":""?>>
                <label class="form-check-label" for="flexRadioDefault2">Manager</label>
            </div>
            </div>

            <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault3" value="admin" <?=$row['role']=="admin"?
                "checked":""?>>
                <label class="form-check-label" for="flexRadioDefault3">Admin</label>
            </div>
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
<form action="<?=base_url('users')?>" method="post">
<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=base_url('users')?>" method="post">
            <div class="modal-body">

            <div class="form-group">
                <label>Nama User</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama User">
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" placeholder="Password">
            </div>

            <div class="form-group">
                <label>Role</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="kasir">
                <label class="form-check-label" for="flexRadioDefault1">Kasir</label>
            </div>
            </div>

            <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault2" value="manager">
                <label class="form-check-label" for="flexRadioDefault2">Manager</label>
            </div>
            </div>

            <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault3" value="admin">
                <label class="form-check-label" for="flexRadioDefault3">Admin</label>
            </div>
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