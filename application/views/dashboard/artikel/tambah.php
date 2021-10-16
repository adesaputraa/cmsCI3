<div class="container-fluid">
                <h1 class="h3 mb-2 text-gray-800">Artikel</h1>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
                            </div>
							
						<div class="card-body">
                                <?= form_error('artikel', '<div class="alert alert-danger alert-dismissible fade show" role="alert">', '
                                    </div>'); ?>
                                    <?= $this->session->flashdata('message');
                                 ?>

                                 <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                                 <?php if( $this->session->flashdata('flash') ) : ?>

                                <?php endif; ?>
       
                                <a href="<?= base_url().'dashboard/artikel';?>" class="btn btn-sm btn-primary">Kembali</a><br><br>

								
							<div class="row">
							<div class="col-xl-7">
								<div class="card mb-4 py-3 border-left-primary">
									<div class="card-body">
									<form method="post" action="<?= base_url('dashboard/artikel_aksi') ?>"enctype="multipart/form-data">
										<label>Judul</label>
                                             <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul .." value="<?= set_value('judul'); ?>">
											 <br/>
											 <?= form_error('judul'); ?>
									</div>
								
										<div class="col-xl-12 col-lg-10">
											
												<label>Konten</label>
												<?= form_error('judul'); ?>
												
												<div class="form-group"">
												<textarea class="form-control" id="editor" name="konten"> <?= set_value('konten'); ?> </textarea>
												</div>
										</div>
                            	</div>
							</div>
							
							
							<div class="col-xl-5">
								<div class="card mb-4 py-3 border-left-primary">
									<div class="card-body">
										<label>Kategori</label>
										<select class="form-control" name="kategori">
											<option value="">- Pilih Kategori</option>
											<?php foreach($kategori as $k){ ?>
												<option <?php if(set_value('kategori') == $k->kategori_id){echo "selected='selected'";} ?> 
												value="<?= $k->kategori_id ?>"><?= $k->kategori_nama; ?></option>
											<?php } ?>
										</select>
										<br/>
										<?php echo form_error('kategori'); ?>
									</div>
									<br/>

									<div class="col-xl-12">
									<div class="card-body">
										<label>Gambar Sampul</label>
										<br/>
										<input type="file" name="sampul">
										<br/>
											<?php 
												if(isset($gambar_error)){
													echo $gambar_error;
												}
											?>
										<?php echo form_error('sampul'); ?>
									</div>

									<br/>
									<input type="submit" name="status" value="Draft" class="btn btn-warning btn-block">
									<input type="submit" name="status" value="Publish" class="btn btn-success btn-block">
									</div>

                            	</div>
							</div>
						</div>
					</div>
				</form>
				</div>
			</div>
	</div>
                            