
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card-header py-2">
                                    <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
                                </div>

                                <div class=" col-md-12 ">
                                    <div class="card o-hidden border-0 shadow-lg my-2">
                                       
                                </div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <h3>Selamat datang</h3>
                                            <th> Nama </th>
                                            <th><center> : </center></th>
                                            <td><?= $this->session->userdata('username') ?></td>
                                        </tr>
                                        <tr>
                                            <th> Username  </th>
                                            <th><center> : </center></th>
                                            <td><?= $this->session->userdata('level') ?></td>
                                        </tr>
                                        <tr>
                                            <th> id pengguna  </th>
                                            <th><center> : </center></th>
                                            <td><?= $this->session->userdata('id') ?></td>
                                        </tr>
                                    </thead>
                                </table>
                        </div>
                </div>
            </div>

              <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

   
