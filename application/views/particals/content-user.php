<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>MASTER DATA USER
        <a href='<?php echo site_url('latihan/tambah_data_user') ?>'><button type="button" class="btn btn-primary" style='float:right;box-shadow:-2px 1px #007316;'><i class="fas fa-book"></i> Tambah Data</button></a>    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Asal</th>
                        <th>no_hp</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_user as $user) { ?>
                        <tr>
                            <td><?php echo $user['id'] ?></td>
                            <td><?php echo $user['nama'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $user['asal'] ?></td>
                            <td><?php echo $user['no_hp'] ?></td>
                            <td>
                                <a href='<?php echo site_url('latihan/arah_edit_data_user/' . $user['id']) ?>'><button type="button" style='padding:3px;box-shadow:-2px 1px #007316;' class="btn btn-success"><i class="fas fa-edit"></i></button></a>
                                <button type="button" style='padding:3px;box-shadow:-2px 1px #730000;' class="btn btn-danger" data-toggle="modal" data-target="#hapusdata<?php echo $user['id']; ?>"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>