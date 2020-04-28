<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>MASTER DATA PASIEN RUMAH SAKIT
        <a href='<?php echo site_url('latihan/tambah_data') ?>'><button type="button" class="btn btn-primary" style='float:right;box-shadow:-2px 1px #007316;'><i class="fas fa-book"></i> Tambah Data</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Asal</th>
                        <th>Golongan Darah</th>
                        <th>Tanggal Masuk</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_pasien as $pasien) { ?>
                        <tr>
                            <td><?php echo $pasien['id'] ?></td>
                            <td><?php echo $pasien['nama'] ?></td>
                            <td><?php echo $pasien['asal'] ?></td>
                            <td><?php echo $pasien['golongan_darah'] ?></td>
                            <td><?php echo $pasien['tanggal_masuk'] ?></td>
                            <td><?php echo $pasien['jeniskelamin'] ?></td>
                            <td><?php echo $pasien['umur'] ?></td>
                            <td><?php echo $pasien['status'] ?></td>
                            <td>
                                <a href='<?php echo site_url('latihan/arah_edit_data/' . $pasien['id']) ?>'><button type="button" style='padding:3px;box-shadow:-2px 1px #007316;' class="btn btn-success"><i class="fas fa-edit"></i></button></a>
                                <button type="button" style='padding:3px;box-shadow:-2px 1px #730000;' class="btn btn-danger" data-toggle="modal" data-target="#hapusdata<?php echo $pasien['id']; ?>"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>