<div class="container-fluid">
                <h1 class="h3 mb-2 text-gray-800">Manajemen Halaman Website</h1>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Pages</h6>
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
                                <a href="<?= base_url().'dashboard/pages/tambah';?>" class="btn btn-sm btn-primary">Tambah Halaman</a><br><br>
                                <!-- <a href="<?= base_url().'dashboard/pages/tambah';?>" class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#newMenuModal">Tambah Halaman</a><br><br> -->
                                </table> 
                            </div>
                        </div>  
                    </div>           
            </div>
        </div>