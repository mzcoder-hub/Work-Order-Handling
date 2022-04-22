        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Report</h1>
          </div>
          <div class="row">
              <!--<div class="col-md-6">
                <div class="row">
                Earnings (Monthly) Card Example
                <div class="col-xl-6 col-md-6 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                 Earnings (Monthly) Card Example 
                <div class="col-xl-6 col-md-6 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                          <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                            </div>
                            <div class="col">
                              <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                 Earnings (Monthly) Card Example 
                <div class="col-xl-12 col-md-6 mb-4">
                  <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Earnings (Annual)</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  -->
            <div class="col-md-12">

              <!-- Content Row 1 -->

              <div class="row">

                <!-- Pie Chart -->
                <div class="col-xl-4 col-lg-12">
                  <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Data Status Work Order</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                      <div id="Data-Chart"></div>
                      <div style="margin-top: 10px">
                        <table border="0" style="font-weight: bold;width: 100%">
                          <tr>
                            <td><wow style="width:25px;height:25px;background:rgb(169,255,150);border:solid 1px black;padding-left: 25px;margin: 3px"></wow>Hijau</td>
                            <td>:</td>
                            <td>Closed</td>
                          </tr>
                          <tr>
                            <td><wow style="width:25px;height:25px;background:rgb(67,67,72);border:solid 1px black;padding-left: 25px;margin: 3px"></wow>Hitam</td>
                            <td>:</td>
                            <td>OnProgress</td>
                          </tr>
                          <tr>
                            <td><wow style="width:25px;height:25px;background:rgb(124, 181, 236);border:solid 1px black;padding-left: 25px;margin: 3px"></wow>Biru</td>
                            <td>:</td>
                            <td>Open</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-8 col-lg-12">
                  <!-- DataTables -->
                  <!-- DataTales Example -->
                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Handle Progress</h6>
                    </div>
                    <div class="card-body">
                     <center>
                      <?php if ($this->session->flashdata('success')){ ?>
                       <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                      </div>
                    <?php }else if($this->session->flashdata('warning')){ ?>
                     <div class="alert alert-warning" role="alert">
                      <?php echo $this->session->flashdata('warning'); ?>
                    </div>
                  <?php }else{} ?>
                </center>
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <?php if ($this->session->userdata['role'] == 'admin') {?>
                          <th  width="10">Action</th>
                        <?php } ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($complains as $complain): ?>
                        <tr>
                          <td> <Button class="btn btn-danger"style="width: 100%">#<?= $complain->ID_COMPLAIN ;?></Button></td>
                          <td><?= $complain->Subject_Abnormality;?></td>
                          <td><button class="btn <?php if($complain->Status =='Open'){echo 'btn-success';}elseif($complain->Status == 'On Progress'){echo 'btn-warning';}else{echo 'btn-danger';}?>" type="button" style="width: 100%">
                            <?= $complain->Status ;?>
                          </button></td>
                          <td><?= $complain->Add_info;?></td>
                          <?php if ($this->session->userdata['role'] == 'admin') {?>
                            <td>
                              <button class="btn btn-primary AddInfo" id="ID_<?=$complain->ID_COMPLAIN;?>" style="width: 100%">
                                <i class="fa fa-plus-square"></i>
                              </button>
                            </td>
                          <?php }?>
                        </tr>                   
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Content Row 1 -->
      </div>
    </div>
  </div>
        <!-- /.container-fluid -->