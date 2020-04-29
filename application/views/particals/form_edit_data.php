<div class="card mb-4">
    <?php foreach ($data_edit as $edit) { ?>
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>FORM EDIT DATA <?php echo strtoupper($edit['nama']); ?>
        </div>
        <div class="card-body">
            <form action='<?php echo base_url() . "latihan/edit" ?>' method='post'>
                <div class="form-row">
                    <input type="hidden" name='id' value='<?php echo $edit['id'] ?>' />
                    <div class="col-md-6">
                        <div class="form-group"><label class="small mb-1" for="inputFirstName">Nama</label><input class="form-control py-4" type="text" placeholder="Masukan Nama Anda" name='nama' value='<?php echo $edit['nama'] ?>' required /></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><label class="small mb-1" for="inputLastName">Asal</label><input class="form-control py-4" type="text" placeholder="Masukan Kota Asal" name='asal' value='<?php echo $edit['asal'] ?>' required /></div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group"><label class="small mb-1" for="inputLastName">Jenis Kelamin</label>
                            <select class="form-control" type="text" name='jeniskelamin' required>
                                <option value="<?php echo $edit['jeniskelamin'] ?>" selected><?php echo $edit['jeniskelamin'] ?></option>
                                <option value="laki laki">Laki Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group"><label class="small mb-1" for="inputLastName">Umur</label>
                            <input class="form-control" type="number" placeholder="Masukan umur Anda" name='umur' value='<?php echo $edit['umur'] ?>' required />
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group"><label class="small mb-1" for="inputLastName">Golongan Darah</label>
                            <select class="form-control" type="text" name='golongandarah' required>
                                <option value="<?php echo $edit['golongan_darah'] ?>" selected><?php echo $edit['golongan_darah'] ?></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group"><label class="small mb-1">Status</label>
                            <select class="form-control" name='status' required>
                                <option value="<?php echo $edit['status'] ?>" selected><?php echo $edit['status'] ?></option>
                                <option value="odp">ODP</option>
                                <option value="positif">POSITIF</option>
                                <option value="sembuh">SEMBUH</option>
                                <option value="meninggal">MENINGGAL</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"><label class="small mb-1" for="inputLastName">Tanggal Masuk</label><input class="form-control" type="date" name='tanggal' value='<?php echo $edit['tanggal_masuk'] ?>' required /></div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group"><a class="btn btn-danger btn-block" href="<?php echo site_url('latihan/master_data') ?>">Batal</a></div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group"><button class="btn btn-success btn-block" type='submit'>Edit</button></div>
                    </div>
                </div>
            </form>
        </div>
    <?php } ?>
</div>