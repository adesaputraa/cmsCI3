
  <div class="container-fluid">
                <h1 class="h3 mb-2 text-gray-800">Artikel</h1>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
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
       
                                <a href="<?= base_url().'dashboard/artikel_tambah';?>" class="btn btn-sm btn-primary">Artikel Baru</a><br><br>
                                    <thead>
                                        <tr>
                                        <th width="1%">NO</th>
                                            <th>Tanggal</th>
                                            <th>Artikel</th>
                                            <th>Penulis</th>
                                            <th>Kategori</th>
                                            <th width="10%">Gambar</th>
                                            <th>Status</th>
                                            <th width="12%">OPSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                            $no =1;
                                            foreach($artikel as $ade){
                                        ?>
                                        <tr>
                                            <td><?= $no++."."; ?></td>
                                            <td><?= date('d/m/Y H:i', strtotime($ade->artikel_tanggal)); ?></td>
                                            <td>
												<?php echo $ade->artikel_judul; ?>
												<br/>
												<small class="text-muted">
													<?php echo base_url()."".$ade->artikel_slug; ?>
												</small>
											</td>
                                            <td><?= $ade->pengguna_nama; ?></td>
                                            <td><?= $ade->kategori_nama; ?></td>
                                            <td><img width="100%" class="img-responsive" src="<?= base_url().'/gambar/artikel/'.$ade->artikel_sampul;?>"></td>
                                            <td>
                                            <?php 
												if($ade->artikel_status=="publish"){
													echo "<span class='label btn-success '>Publish</span>"; 
												}else{
													echo "<span class='label btn-danger '>Draft</span>"; 
												}
												?>
                                            </td>
                                            <td>
												<a target="_blank" href="<?php echo base_url().$ade->artikel_slug; ?>" class="btn btn-success btn-circle btn-sm"> <i class="fa fa-eye"></i> </a>
												<?php
                                                // cek apakah pengguna yang login adalah penulis
												if($this->session->userdata('level') == "penulis"){
                                                    // jika penulis, maka cek apakah penulis artikel ini adalah si pengguna atau bukan
													if($this->session->userdata('id') == $ade->artikel_author){
                                                       ?>
                                                          <td>
                                                                <a href="<?= base_url().'dashboard/artikel_edit/'.$ade->artikel_id; ?>" class="btn btn-warning btn-circle btn-sm">
                                                                <i class="fas fa-edit"></i></a>
                                                                <a href="<?= base_url().'dashboard/artikel_hapus/'.$ade->artikel_id; ?>" class="btn btn-danger btn-circle btn-sm tombol-hapus">
                                                                <i class="fas fa-trash"></i></a>
                                                            </td>
                                                        <?php
                                                    }
                                                }else{
                                                    // jika yang login adalah admin
                                                    ?>
													 <a href="<?= base_url().'dashboard/artikel_edit/'.$ade->artikel_id; ?>" class="btn btn-warning btn-circle btn-sm">
                                                                <i class="fas fa-edit"></i></a>
                                                                <a href="<?= base_url().'dashboard/artikel_hapus/'.$ade->artikel_id; ?>" class="btn btn-danger btn-circle btn-sm tombol-hapus">
                                                                <i class="fas fa-trash"></i></a>
													<?php
                                                }
                                                ?>
                                            </td>
                                      
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
         