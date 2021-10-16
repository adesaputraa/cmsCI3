  <!-- DataTales Example -->
  <div class="container-fluid">
                <h1 class="h3 mb-2 text-gray-800">Kategori</h1>
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Edit Kategori</h6>
                            </div>
                        <div class="card-body">

                        <?php foreach($kategori as $k){ ?>
                            <form method="post" action="<?= base_url('dashboard/kategori_update') ?>">
                                <input type="submit" class="btn btn-primary" value="Update"><br><br>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="hidden" name="id" value="<?= $k->kategori_id; ?>" >
                                            <input type="text" name="kategori" class="form-control" placeholder="" value="<?php echo $k->kategori_nama; ?>">
                                        </div>
                                    </div>
                            </form>
                        <?php }?>
                        </div>
                    </div>
            </div>
        </div>
