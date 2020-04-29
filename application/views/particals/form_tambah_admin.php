<?php
$id =  "admin-" . date("ymdhis") . rand(1000, 9999);
?>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>FORM TAMBAH DATA ADMINISTRATOR
    </div>
    <div class="card-body">
        <form action='<?php echo base_url() . "latihan/tambah_admin" ?>' method='post'>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group"><label class="small mb-1" for="inputFirstName">ID ADMIN <em><b>* DI MOHON DI CATAT UNTUK LOGIN / IDENTITAS</b></em></label><input class="form-control py-4" type="text" value='<?php echo $id; ?>' name='id' required readonly /></div>
                </div>
                <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Nama</label><input class="form-control py-4" type="text" placeholder="Masukan Nama Anda" name='nama' required /></div>
                </div>
                <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Katasandi</label><input class="form-control py-4" type="password" placeholder="Masukan Katasandi Anda" name='katasandi' required /></div>
                </div>
                <div class="col-md-3">
                    <div class="form-group"><label class="small mb-1" for="inputLastName">Asal</label><input class="form-control" type="text" placeholder="Masukan Kota Asal" name='asal' required /></div>
                </div>
                <div class="col-md-4">
                    <div class="form-group"><label class="small mb-1" for="inputFirstName">No HP</label><input class="form-control" type="number" placeholder="Masukan No HP" name='no_hp' required/></div>
                </div>
                <div class="col-md-3">
                    <label class="small mb-1" for="inputLastName">Email</label>
                    <input type="text" class="form-control mb-2" id="inlineFormInput" name='email' placeholder="Nama Email" required>
                </div>
                <div class="col-md-2">
                    <label class="small mb-1" for="inputLastName">Domain Email</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" value='sppk.co.id' readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group"><a class="btn btn-danger btn-block" href="<?php echo site_url('latihan/master_data_admin') ?>">Batal</a></div>
                </div>
                <div class="col-md-8">
                    <div class="form-group"><button class="btn btn-primary btn-block" type='submit'>Daftar</button></div>
                </div>
            </div>
        </form>
    </div>
</div>