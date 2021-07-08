        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <?php 
            echo $this->session->flashdata('msg')
          ?>
            <div class="card">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between ">
                        <h1 class="h3 mb-0 text-gray-800">Jadwal Kuliah</h1>
                        <a href="<?php echo base_url('jadwal/new') ?>"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus-circle fa-sm text-white-50 mr-1"></i>Jadwal Kuliah</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered table-responsive-lg">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mata Kuliah</th>
                                <th>Jadwal</th>
                                <th>Kelas </th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                $i=1;
                if(count($jadwal)){
                  foreach($jadwal as $jad) : ?>
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo $jad->name?></td>
                                <?php 
                                if($jad->hari == 1){
                                    $hari = "Senin";
                                }elseif($jad->hari == 2){
                                    $hari = "Selasa";
                                }elseif($jad->hari == 3){
                                    $hari = "Rabu";
                                }elseif($jad->hari == 4){
                                    $hari = "Kamis";
                                }elseif($jad->hari == 5){
                                    $hari = "Jumat";
                                }
                                ?>
                                <td><?php echo $hari." , ".$jad->jam?></td>
                                <td><?php echo $jad->deskripsi?></td>
                                <td><?php echo $jad->status == 0 ? 'Belum Selesai' : 'Selesai';?></td>
                                <td>
                                    <a href="<?php echo base_url('jadwal/update/').$jad->id ?>"
                                        class="btn btn-sm btn-success m-1"><i class="fas fa-edit"></i></a>
                                    <a onclick="return confirm('Apakah anda yakin ingin menghapus ini?')"
                                        href="<?php echo base_url('jadwal/delete/').$jad->id ?>"
                                        class="btn btn-sm btn-danger m-1"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php endforeach;
                }else{?>

                            <tr>
                                <td colspan="6">
                                    <h1 class="text-center">Maaf belum ada Jadwal Kuliah</h1>
                                </td>
                            </tr>
                            <?php
                }
                
              ?>
                        </tbody>
                    </table>

                </div>
            </div>



            <!-- Table -->

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->