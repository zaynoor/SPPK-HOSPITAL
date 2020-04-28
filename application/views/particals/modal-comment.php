<!-- Modal -->
<?php foreach ($list_sharing as $sharing) { ?>
    <div class="modal fade" id="komen<?php echo $sharing['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Info Komentar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    $data = $this->latihan_model->bukakomen($sharing['id']);
                    if (! empty($data)) {
                        foreach ($data as $komen) {
                            ?>
                            <div class='komentar'>
                                <span class="comment-avatar float-left">
                                    <a href=""><img class="rounded-circle" style='width:10%;height:10%;' src="<?php echo base_url('assets/img/user.png') ?>"></a>
                                </span>
                                <div class="search" style='width:70%;border:0px;'>
                                    <h5><?php echo $komen['nama']; ?></h5>
                                    <p><?php echo $komen['comment']; ?></p>
                                </div>
                            </div>
                        <?php
                        }
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>