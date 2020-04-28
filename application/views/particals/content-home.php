<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div id="sliding_tackle" class="sliding_tackle" style="box-shadow:0 6px 26px rgba(41, 39, 39, 0.5); padding-bottom: -10px;">
            <img src="<?php echo base_url('assets/img/pic-1.jpg') ?>" />
            <img src="<?php echo base_url('assets/img/pic-2.jpg') ?>" />
            <img src="<?php echo base_url('assets/img/pic-3.jpg') ?>" />
            <img src="<?php echo base_url('assets/img/pic-4.jpg') ?>" />
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4 bayangan">

            <div class="card-header"><b>POSITIF</b></div>
            <div class="card-body">
                <h5 class="card-title jumlah"><?php echo $pos; ?></h5>
                <p class="card-text">Orang</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4 bayangan">
            <div class="card-header"><b>ODP</b></div>
            <div class="card-body">
                <h5 class="card-title jumlah"><?php echo $odp; ?></h5>
                <p class="card-text">Orang</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4 bayangan">
            <div class="card-header"><b>SEMBUH</b></div>
            <div class="card-body">
                <h5 class="card-title jumlah"><?php echo $sembuh; ?></h5>
                <p class="card-text">Orang</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="carde bg-danger text-white mb-4 bayangan">
            <div class="card-header"><b>MENINGGAL</b></div>
            <div class="card-body">
                <h5 class="card-title jumlah"><?php echo $meninggal; ?></h5>
                <p class="card-text">Orang</p>
            </div>
        </div>
    </div>
</div>
<?php
$urut = 0;
if (!empty($list_sharing)) {
    foreach ($list_sharing as $sharing) {
        if ($urut == 0) {
?><div class="row"><?php
                }
                $urut++; ?>
            <div class="col-xl-6 col-md-6">
                <div class="cardbox bg-white" style='box-shadow:-5px 6px 5px #999999;'>
                    <div class="cardbox-heading">
                        <!-- START dropdown-->
                        <!--/ dropdown -->
                        <div class="media m-0">
                            <div class="d-flex mr-3">
                                <a href=""><img class="img-fluid rounded-circle" src="<?php echo base_url('assets/img/user.png') ?>" alt="User"></a>
                            </div>
                            <div class="media-body">
                                <p class="m-0"><?php echo $sharing['nama'] ?></p>
                                <small><span><i class="icon ion-md-time"></i> <?php echo $sharing['waktu'] ?></span></small>
                            </div>
                        </div>
                        <!--/ media -->
                    </div>
                    <!--/ cardbox-heading -->

                    <div class="cardbox-item">
                        <img class="img-fluid" src="<?php echo base_url('image-sharing/' . $sharing['nama_file']) ?>" alt="Image">
                        <div class='pesan'>
                            <?php echo $sharing['pesan'] ?>
                        </div>
                    </div>
                    <!--/ cardbox-item -->
                    <div class="cardbox-base">
                        <ul>
                            <li><a><i class="fa fa-thumbs-up"></i></a></li>
                            <li><a data-toggle="modal" data-target="#komen<?php echo $sharing['id']; ?>"><img src="<?php echo base_url('assets/img/user.png') ?>" class="img-fluid rounded-circle" alt="User"></a></li>
                            <li><a data-toggle="modal" data-target="#komen<?php echo $sharing['id']; ?>"><img src="<?php echo base_url('assets/img/user.png') ?>" class="img-fluid rounded-circle" alt="User"></a></li>
                            <li><a data-toggle="modal" data-target="#komen<?php echo $sharing['id']; ?>"><img src="<?php echo base_url('assets/img/user.png') ?>" class="img-fluid rounded-circle" alt="User"></a></li>
                            <li><a data-toggle="modal" data-target="#komen<?php echo $sharing['id']; ?>"><img src="<?php echo base_url('assets/img/user.png') ?>" class="img-fluid rounded-circle" alt="User"></a></li>
                            <?php $data = $this->latihan_model->hitungcoment($sharing['id']);
                            echo "<li><a><span>" . $data . " comment</span></a></li>";
                            ?>
                        </ul>
                    </div>
                    <!--/ cardbox-base -->
                    <div class="cardbox-comments">
                        <span class="comment-avatar float-left">
                            <a href=""><img class="rounded-circle" src="<?php echo base_url('assets/img/user.png') ?>"></a>
                        </span>
                        <div class="search">
                            <form action='<?php echo base_url() . "latihan/tambah_comment" ?>' method='post'>
                                <input name='tanggal' type="hidden" value='<?php echo date('Y-m-d') ?>'>
                                <input name='id' type="hidden" value='<?php echo $sharing['id'] ?>'>
                                <input name='nama' type="hidden" value='<?php echo $this->session->userdata("nama"); ?>'>
                                <input style='width:100%;' name='comment' placeholder="Tulis Komentar" type="text" required>
                                <button type='submit' class='btn btn-success'>COMMENT</button>
                            </form>
                        </div>
                        <!--/. Search -->
                    </div>
                    <!--/ cardbox-like -->

                </div>
                <!--/ cardbox -->

            </div>
            <!--/ col-lg-6 -->
            <?php
            if ($urut == 2) {
                $urut = 0;
            ?>
            </div>
            <!--/ row -->
<?php
            }
        }
    } ?>