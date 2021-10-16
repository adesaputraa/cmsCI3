                       <!-- Approach -->
                       <div class="container-fluid">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">GANTI PASSWORD</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                   
                                                 

                                                    <form method="post" action="<?php echo base_url('dashboard/ganti_password_aksi') ?>">
                                                    <div class="form-group">
                                                    <?php
                                                        if(isset($_GET['alert'])){
                                                            if($_GET['alert'] == "sukses"){
                                                                echo "<div class='alert alert-success font-weight-bold text-center'>Password telah diubah!</div>";
                                                            }else if($_GET['alert'] == "gagal"){
                                                                echo "<div class='alert alert-danger'>Maaf, password lama yang anda masukkan salah!</div>";
                                                            }
                                                        }
                                                    ?>
                                                    <input type="submit" class="btn btn-primary" value="Ganti Password"><br><br>
                                                            <label>Password Lama</label>
                                                                <input type="password" name="password_lama" class="form-control" placeholder="Masukkan Password Lama Anda ..">
                                                                <?php echo form_error('password_lama'); ?>
                                                            <hr>

                                                            <label>Password Baru</label>
                                                                <input type="password" name="password_baru" class="form-control" placeholder="Masukkan Password Baru Anda ..">
                                                                <?php echo form_error('password_baru'); ?><br>

                                                            <label>Konfirmasi password</label>
                                                                <input type="password" name="konfirmasi_password" class="form-control" placeholder="Konfirmasi Password Baru ..">
                                                                <?php echo form_error('konfirmasi_password'); ?>

                                                            
                                                    </form>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                       
                      
                       