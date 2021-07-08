        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Update Jadwal</h1>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <?php 
                            $result = $jadwal->result();
                            foreach ($result as $a) :
                        ?>
                            <form method="POST" action="<?php echo base_url('jadwal/update_act') ?>"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $a->id ?>">
                                    <label>Nama </label>
                                    <input type="text" name="nama" class="form-control" required
                                        value="<?php echo $a->name ?>">
                                    <?php 
                                          echo form_error('nama','<div class="text-small text-danger">','</div>')
                                      ?>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="hari">Hari</label>
                                            <select class="form-control" id="hari" name="hari">
                                                <option <?= $a->hari == 1 ? 'selected':'' ?> value="1">Senin</option>
                                                <option <?= $a->hari == 2 ? 'selected':'' ?> value="2">Selasa</option>
                                                <option <?= $a->hari == 3 ? 'selected':'' ?> value="3">Rabu</option>
                                                <option <?= $a->hari == 4 ? 'selected':'' ?> value="4">Kamis</option>
                                                <option <?= $a->hari == 5 ? 'selected':'' ?> value="5">Jumat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Jam </label>
                                            <input type="time" name="jam" class="form-control" required
                                                value="<?php echo $a->jam ?>">
                                            <?php 
                                          echo form_error('jam','<div class="text-small text-danger">','</div>')
                                      ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Kelas </label>
                                    <input type="text" name="deskripsi" class="form-control" required value="<?php echo $a->deskripsi ?>" id="deskripsi">
                                    <?php
                                          echo form_error('deskripsi','<div class="text-small text-danger">','</div>')
                                      ?>
                                </div>
                                <div class=" form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="<?php echo $a->status?>">
                                            <?php echo $a->status == 0 ? 'Belum Selesai' : 'Selesai'; ?></option>
                                        <option value="<?php if($a->status!=0) echo '0'; else echo '1'; ?>">
                                            <?php echo $a->status == 1 ? 'Belum Selesai' : 'Selesai';?></option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mt-5 float-right">Submit</button>
                            </form>
                            <?php 
                            endforeach;
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
