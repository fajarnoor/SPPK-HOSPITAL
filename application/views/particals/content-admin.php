<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>MASTER DATA ADMINISTRATOR
        <a href='<?php echo site_url('latihan/tambah_data_admin') ?>'><button type="button" class="btn btn-primary" style='float:right;box-shadow:-2px 1px #007316;'><i class="fas fa-book"></i> Tambah Data</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Asal</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_admin as $admin) { ?>
                        <tr>
                            <td><?php echo $admin['id'] ?></td>
                            <td><?php echo $admin['nama'] ?></td>
                            <td><?php echo $admin['asal'] ?></td>
                            <td><?php echo $admin['no_hp'] ?></td>
                            <td><?php echo $admin['email'] ?></td>
                            <td>
                                <a href='<?php echo site_url('latihan/arah_edit_data_admin/' . $admin['id']) ?>'><button type="button" style='padding:3px;box-shadow:-2px 1px #007316;' class="btn btn-success"><i class="fas fa-edit"></i></button></a>
                                <button type="button" style='padding:3px;box-shadow:-2px 1px #730000;' class="btn btn-danger" data-toggle="modal" data-target="#hapusdata<?php echo $admin['id']; ?>"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>