        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- To do today card -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <a style="text-decoration: none;" href="<?php echo base_url('jadwal') ?>">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jadwal
                                            Kuliah not finished</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jadwal; ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->