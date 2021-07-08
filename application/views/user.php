        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data User</h1>
          </div>
          
          <?php 
            echo $this->session->flashdata('msg')
          ?>
          <!-- Table -->
          <table class="table table-hover table-bordered table-responsive-lg">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Role</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $i=1;
                foreach($user as $u) : ?>
                <tr>
                  <td><?php echo $i++ ?></td>
                  <td><?php echo $u->name?></td>
                  <td><?php echo $u->username ?></td>
                  <td><?php echo $u->role == 1 ? 'Admin' : 'User';?></td>
                  <td>
                    <a href="<?php echo base_url('user/delete/').$u->username ?>" class="btn btn-sm btn-danger m-1"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <?php endforeach;
              ?>
            </tbody>
          </table>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->