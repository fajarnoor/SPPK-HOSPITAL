<!-- Modal -->
<?php foreach ($list_admin as $admin) { ?>
    <div class="modal fade" id="hapusdata<?php echo $admin['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action='<?php echo site_url()."latihan/hapus_admin/".$admin['id']?>' method='post'>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data <?php echo $admin['nama'] ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Anda yakin Menghapus Data Administrator <b><?php echo $admin['nama'] ?></b>
                        <input type="hidden" name='id' value='<?php echo $edit['id'] ?>'/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">HAPUS</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>