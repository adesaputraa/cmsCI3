
  <div class="container-fluid">
                <h1 class="h3 mb-2 text-gray-800">Kategori</h1>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
                            </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                <?= form_error('kategori', '<div class="alert alert-danger alert-dismissible fade show" role="alert">', '
                                    </div>'); ?>
                                    <?= $this->session->flashdata('message');
                                 ?>

                                 <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                                 <?php if( $this->session->flashdata('flash') ) : ?>

                                <?php endif; ?>
                                <a href="<?= base_url().'dashboard/kategori';?>" class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#newMenuModal">Tambah</a><br><br>
                                    <thead>
                                        <tr>
                                            <th width="1%">No</th>
                                            <th>Kategori</th>
                                            <th>Slug</th>
                                            <th width="12%">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no =1;
                                            foreach($kategori as $k){
                                        ?>
                                        <tr>
                                            <td><?= $no++."."; ?></td>
                                            <td><?= $k->kategori_nama; ?></td>
                                            <td><?= $k->kategori_slug; ?></td>
                                            <td>
                                            <a href="<?= base_url().'dashboard/kategori_edit/'.$k->kategori_id; ?>" class="btn btn-warning btn-circle btn-sm">
                                            <i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url().'dashboard/kategori_hapus/'.$k->kategori_id; ?>" class="btn btn-danger btn-circle btn-sm tombol-hapus">
                                            <i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>


    
         <!-- Modal Tambah -->
         <div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
           
            <form action="<?= base_url('dashboard/kategori_aksi'); ?>" method="post">
            <div class="modal-body">
            
                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Nama Kategori">
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >add</button>
            </div>
            </form>
            </div>
        </div>
        </div>

         