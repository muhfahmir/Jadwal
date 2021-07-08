        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Jadwal Baru</h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="<?php echo base_url('jadwal/new_act') ?>"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Nama </label>
                                    <input type="text" name="nama" class="form-control" required>
                                    <?php 
                                  echo form_error('nama','<div class="text-small text-danger">','</div>')
                              ?>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="hari">Hari</label>
                                            <select class="form-control" id="hari" name="hari">
                                                <option value="1">Senin</option>
                                                <option value="2">Selasa</option>
                                                <option value="3">Rabu</option>
                                                <option value="4">Kamis</option>
                                                <option value="5">Jumat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Jam</label>
                                            <input type="time" name="jam" class="form-control" required>
                                            <?php 
                                  echo form_error('jam','<div class="text-small text-danger">','</div>')
                              ?>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="deskripsi">Kelas</label>
                                    <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>
                                    <?php
                                  echo form_error('deskripsi','<div class="text-small text-danger">','</div>')
                              ?>

                                </div>
                                <button type="submit" class="btn btn-primary mt-5 float-right">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
