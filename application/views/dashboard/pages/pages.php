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
                                <a href="<?= base_url().'pages/tambah';?>" class="btn btn-sm btn-primary">Tambah Halaman</a><br><br>
                                <!-- <a href="<?= base_url().'dashboard/pages/tambah';?>" class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#newMenuModal">Tambah Halaman</a><br><br> -->
                                    <thead>
                                        <tr>
                                            <th width="1%">No</th>
                                            <th>Judul Halaman</th>
                                            <th>URL Slug</th>
                                            <th width="12%">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no =1;
                                            foreach($halaman as $ade1){
                                        ?>
                                        <tr>
                                            <td><?= $no++."."; ?></td>
                                            <td><?= $ade1->halaman_judul; ?></td>
                                            <td><?= $ade1->halaman_slug; ?></td>
                                            <td>
                                            <a href="<?= base_url().'dashboard/pages/edit/'.$ade1->halaman_id; ?>" class="btn btn-warning btn-circle btn-sm">
                                            <i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url().'dashboard/pages/hapus/'.$ade1->halaman_id; ?>" class="btn btn-danger btn-circle btn-sm tombol-hapus">
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