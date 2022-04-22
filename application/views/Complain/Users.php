        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">List Work Order</h1>
          </div>
          <!-- Content Row 1 -->

          <div class="row">
            <!-- Content Col -->
            <div class="col-xl-12 col-lg-12">
              <!-- DataTables -->
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">
                    <a href="<?=base_url('user/add');?>" class="btn btn-primary">New User</a></h6>
                  </div>
                  <div class="card-body">
                   <center><?php if ($this->session->flashdata('success')): ?>
                   <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                  </div>
                <?php endif; ?>
              </center>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Username</th>
                      <th>Role</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; foreach ($complains as $complain): ?>
                    <tr>
                      <td width="10"><?php echo $no++;?></td>
                      <td><?= $complain->username;?></td>
                      <td><?= $complain->role;?></td>
                      <td><a href="<?php echo site_url('user/delete/'.$complain->user_id) ?>" style="text-decoration: none;">
                       <i class="fas fa-trash"></i> Hapus
                     </a></td>
                   </tr>
                 <?php endforeach; ?>
               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
<!-- End Content Row 1 -->
</div>
<!-- /.container-fluid -->
