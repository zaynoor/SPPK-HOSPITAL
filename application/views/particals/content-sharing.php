<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>MASTER DATA SHARING INFORMATION
        <a href='<?php echo site_url('latihan/tambah_data_sharing') ?>'><button type="button" class="btn btn-primary" style='float:right;box-shadow:-2px 1px #007316;'><i class="fas fa-book"></i> Tambah Data</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>no record</th>
                        <th>Nama</th>
                        <th>gambar</th>
                        <th>pesan</th>
                        <th>waktu</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_sharing as $sharing) { ?>
                        <tr>
                            <td><?php echo $sharing['id'] ?></td>
                            <td><?php echo $sharing['nama'] ?></td>
                            <td>
                                <img class="img-fluid" src="<?php echo base_url('image-sharing/' . $sharing['nama_file']) ?>" width='100px' width='100px' alt="Image">
                            </td>
                            <td><?php echo $sharing['pesan'] ?></td>
                            <td><?php echo $sharing['waktu'] ?></td>
                            <td>
                                <a href='<?php echo site_url('latihan/arah_edit_data_sharing/' . $sharing['id']) ?>'><button type="button" style='padding:3px;box-shadow:-2px 1px #007316;' class="btn btn-success"><i class="fas fa-edit"></i></button></a>
                                <button type="button" style='padding:3px;box-shadow:-2px 1px #730000;' class="btn btn-danger" data-toggle="modal" data-target="#hapusdata<?php echo $sharing['id']; ?>"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>