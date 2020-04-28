<div class="card mb-4">
    <?php foreach ($data_edit as $edit) { ?>
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>FORM EDIT DATA <?php echo strtoupper($edit['nama']); ?>
        </div>
        <div class="card-body">
            <form action='<?php echo base_url() . "latihan/edit_admin" ?>' method='post'>
                <div class="form-row">
                    <input type="hidden" name='id' value='<?php echo $edit['id'] ?>' />
                    <div class="col-md-6">
                        <div class="form-group"><label class="small mb-1" for="inputFirstName">Nama</label><input class="form-control py-4" type="text" placeholder="Masukan Nama Anda" name='nama' value='<?php echo $edit['nama'] ?>' required /></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><label class="small mb-1" for="inputFirstName">Katasandi</label>
                            <input class="form-password form-control py-4" type="password" placeholder="Masukan Katasandi Anda" name='katasandi' value='<?php echo $edit['katasandi'] ?>' required />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"><label class="small mb-1" for="inputLastName">Asal</label><input class="form-control" type="text" placeholder="Masukan Kota Asal" name='asal' value='<?php echo $edit['asal'] ?>' required /></div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"><label class="small mb-1" for="inputFirstName">No HP</label><input class="form-control" type="number" placeholder="Masukan No HP" name='no_hp' value='<?php echo $edit['no_hp'] ?>' required /></div>
                    </div>
                    <div class="col-md-5">
                        <label class="small mb-1" for="inputLastName">Email</label>
                        <input type="email" class="form-control mb-2" id="inlineFormInput" name='email' placeholder="Nama Email" value='<?php echo $edit['email'] ?>' required>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"><a class="btn btn-danger btn-block" href="<?php echo site_url('latihan/master_data_admin') ?>">Batal</a></div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group"><button class="btn btn-success btn-block" type='submit'>Edit</button></div>
                    </div>
                </div>
            </form>
        </div>
    <?php } ?>
</div>