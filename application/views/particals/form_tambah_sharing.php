<?php
$id =  "sharing-" . date("ymdhis") . rand(1000, 9999);
?>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>FORM TAMBAH DATA SHARING INFORMATION
    </div>
    <div class="card-body">
        <?php echo form_open_multipart('latihan/tambah_sharing'); ?>
        <!-- <form action='<?php echo base_url() . "latihan/tambah_sharing" ?>' enctype="multipart/form-data" method='post'> -->
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group"><label class="small mb-1" for="inputFirstName">ID Sharing</label><input class="form-control py-4" type="text" value='<?php echo $id; ?>' name='id' required readonly /></div>
            </div>
            <div class="col-md-6">
                <div class="form-group"><label class="small mb-1" for="inputFirstName">Nama</label><input class="form-control py-4" type="text" value='<?php echo $this->session->userdata("nama"); ?>' name='nama' required readonly /></div>
            </div>
            <div class="col-md-6">
                <div class="form-group"><label class="small mb-1" for="inputLastName">Waktu</label><input class="form-control py-4" type="date" name='tanggal' required /></div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                <label>Gambar</label>
                <div class="">
                    <br>
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div>
                            <span class="btn btn-file btn-primary">
                                <input type='file' name="userfile" required>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group"><label class="small mb-1" for="inputLastName">Pesan</label>
                    <textarea class="form-control py-4" rows="3" name='pesan' placeholder="Pesan Sharing Informasi"></textarea></div>
                <!-- <input class="form-control py-4" type="text" placeholder="Pesan Sharing Informasi" name='pesan' required /></div> -->
            </div>
            <div class="col-md-4">
                <div class="form-group"><a class="btn btn-danger btn-block" href="<?php echo site_url('latihan/master_data_sharing') ?>">Batal</a></div>
            </div>
            <div class="col-md-8">
                <div class="form-group"><button class="btn btn-primary btn-block" type='submit'>Daftar</button></div>
            </div>
        </div>
        <!-- </form> -->
        <?php echo form_close(); ?>
    </div>
</div>