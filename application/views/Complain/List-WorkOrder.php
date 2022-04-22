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
                    <a href="<?=base_url('workorder/add');?>" class="btn btn-primary">New Work Order</a></h6>
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
                      <th>ID Work Order</th>
                      <th>NPK</th>
                      <th>Department</th>
                      <th>Subject Abnormality</th>
                      <th>Status</th>
                      <?php if ($this->session->userdata['role'] == 'admin') {?>
                      <?php }else{?>
                        <th>Action</th>
                      <?php }?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($complains as $complain): ?>
                      <tr>
                        <td width="100">
                          <Button class="btn btn-danger DataWO" id="ID_<?=$complain->ID_COMPLAIN;?>">#<?= $complain->ID_COMPLAIN ;?></Button>
                        </td>
                        <td><?= $complain->NPK ;?></td>
                        <td><?= $complain->Department ;?></td>
                        <td><?= $complain->Subject_Abnormality ;?></td>
                        <?php if($this->session->userdata['role'] == 'admin'):?>
                          <td>
                            <div class="dropdown">
                              <button class="btn <?php if($complain->Status =='Open'){echo 'btn-success';}elseif($complain->Status == 'On Progress'){echo 'btn-warning';}else{echo 'btn-danger';}?> dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100%">
                                <?= $complain->Status ;?>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php if($complain->Status == 'Open'){?>
                                  <a class="dropdown-item" href="<?= base_url('workorder/updateStatus/on-progress'); echo "/".$complain->ID_COMPLAIN;?>">On Progress</a>
                                  <a class="dropdown-item" href="<?= base_url('workorder/updateStatus/closed'); echo "/".$complain->ID_COMPLAIN;?>">Closed</a>
                                <?php }elseif($complain->Status == 'On Progress'){?>
                                  <a class="dropdown-item" href="<?= base_url('workorder/updateStatus/open'); echo "/".$complain->ID_COMPLAIN;?>">Open</a>
                                  <a class="dropdown-item" href="<?= base_url('workorder/updateStatus/closed'); echo "/".$complain->ID_COMPLAIN;?>">Closed</a>
                                <?php }else{?>
                                  <a class="dropdown-item" href="<?= base_url('workorder/updateStatus/open'); echo "/".$complain->ID_COMPLAIN;?>">Open</a>
                                  <a class="dropdown-item" href="<?= base_url('workorder/updateStatus/on-progress'); echo "/".$complain->ID_COMPLAIN;?>">On Progress</a>
                                </div>
                              <?php }?>
                            </div>
                          </td>
                          <?php else:?>
                            <td>
                              <button class="btn <?php if($complain->Status =='Open'){echo 'btn-success';}elseif($complain->Status == 'On Progress'){echo 'btn-warning';}else{echo 'btn-danger';}?>" style="width: 100%">
                                <?= $complain->Status ;?>
                              </button>
                            </td>
                            <td width="150"><center>
                              <a href="<?php echo site_url('workorder/edit/'.$complain->ID_COMPLAIN) ?>" style="text-decoration: none;">
                                <i class="fas fa-edit"></i> Edit
                              </a>
                              <a href="<?php echo site_url('workorder/delete/'.$complain->ID_COMPLAIN) ?>" style="text-decoration: none;">
                               <i class="fas fa-trash"></i> Hapus
                             </a>
                           </center>
                         </td>
                       <?php endif;?>
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
