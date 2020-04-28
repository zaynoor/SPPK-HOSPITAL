<div class="card mb-4">
    <?php foreach ($data_edit as $edit) { ?>
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>FORM EDIT DATA <?php echo strtoupper($edit['nama']); ?>
        </div>
        <div class="card-body">
            <?php echo form_open_multipart('latihan/edit_sharing'); ?>
            <!-- <form action='<?php echo base_url() . "latihan/edit_sharing" ?>' method='post'> -->
            <div class="form-row">
                <input type="hidden" name='id' value='<?php echo $edit['id'] ?>' />
                <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Nama</label><input class="form-control py-4" type="text" value='<?php echo $edit['nama'] ?>' name='nama' required readonly /></div>
                </div>
                <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1" for="inputLastName">Waktu</label><input class="form-control py-4" type="date" value='<?php echo $edit['waktu'] ?>' name='tanggal' required /></div>
                </div>
                <input class="form-control py-4" type="hidden" value='<?php echo $edit['nama_file'] ?>' placeholder="Masukan Gambar" name='nama_file' required />
                <em>file Actual : <?php echo $edit['nama_file'] ?></em>
                <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                    <label>Gambar</label>
                    <div class="">
                        <br>
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div>
                                <span class="btn btn-file btn-primary">
                                    <input type='file' name="userfile">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group"><label class="small mb-1" for="inputLastName">Pesan</label>
                        <textarea class="form-control py-4" rows="3" name='pesan' placeholder="Pesan Sharing Informasi"><?php echo $edit['pesan'] ?></textarea></div>
                    <!-- <input class="form-control py-4" type="text" placeholder="Pesan Sharing Informasi" name='pesan' required /></div> -->
                </div>
                <div class="col-md-4">
                    <div class="form-group"><a class="btn btn-danger btn-block" href="<?php echo site_url('latihan/master_data_sharing') ?>">Batal</a></div>
                </div>
                <div class="col-md-8">
                    <div class="form-group"><button class="btn btn-success btn-block" type='submit'>Edit</button></div>
                </div>
            </div>
            <!-- </form> -->
            <?php echo form_close(); ?>
        </div>
    <?php } ?>
</div>