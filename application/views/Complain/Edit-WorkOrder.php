        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Work Order</h1>
            <a href="<?= base_url('workorder');?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
          </div>

          <!-- Content Row 1 -->

          <div class="row">
            <!-- Content Col -->
            <div class="col-xl-12 col-lg-12">
              <!-- DataTables -->
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Input Data Work Order</h6>
                </div>
                <div class="card-body">
                  <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                      <?php echo $this->session->flashdata('success'); ?>
                    </div>
                  <?php endif; ?>

                  <form action="" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="ID_COMPLAIN" value="<?= $workorder_content->ID_COMPLAIN;?>">
                    <div class="form-group">
                      <label for="name"><strong>Nama*</strong></label>
                      <input class="form-control <?php echo form_error('Nama') ? 'is-invalid':'' ?>"
                      type="text" name="Nama" value="<?= $workorder_content->Nama;?>"/>
                      <div class="invalid-feedback">
                        <?php echo form_error('Nama') ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="name"><strong>NPK*</strong></label>
                      <input class="form-control <?php echo form_error('NPK') ? 'is-invalid':'' ?>"
                      type="text" name="NPK" value="<?= $workorder_content->NPK;?>"/>
                      <div class="invalid-feedback">
                        <?php echo form_error('NPK') ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="name"><strong>Divisi*</strong></label>
                      <input class="form-control <?php echo form_error('Divisi') ? 'is-invalid':'' ?>"
                      type="text" name="Divisi" value="<?= $workorder_content->Divisi;?>"/>
                      <div class="invalid-feedback">
                        <?php echo form_error('Divisi') ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="name"><strong>Department*</strong></label>
                      <input class="form-control <?php echo form_error('Department') ? 'is-invalid':'' ?>"
                      type="text" name="Department" value="<?= $workorder_content->Department;?>" />
                      <div class="invalid-feedback">
                        <?php echo form_error('Department') ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="name"><strong>Nama Atasan*</strong></label>
                      <input class="form-control <?php echo form_error('Nama_Atasan') ? 'is-invalid':'' ?>"
                      type="text" name="Nama_Atasan" value="<?= $workorder_content->Nama_Atasan;?>" />
                      <div class="invalid-feedback">
                        <?php echo form_error('Nama_Atasan') ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="name"><strong>Subject Abnormality*</strong></label>
                      <input class="form-control <?php echo form_error('Subject_Abnormality') ? 'is-invalid':'' ?>"
                      type="text" name="Subject_Abnormality" value="<?= $workorder_content->Subject_Abnormality;?>" />
                      <div class="invalid-feedback">
                        <?php echo form_error('Subject_Abnormality') ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="name"><strong>Keterangan Abnormality*</strong></label>
                      <textarea class="form-control <?php echo form_error('Keterangan_Abnormality') ? 'is-invalid':'' ?>"
                       name="Keterangan_Abnormality"><?= $workorder_content->Keterangan_Abnormality;?></textarea>
                       <div class="invalid-feedback">
                        <?php echo form_error('Keterangan_Abnormality') ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="name">Attachment</label>
                      <input class="form-control-file <?php echo form_error('images') ? 'is-invalid':'' ?>" type="file" name="images" />
                      <input type="hidden" name="old-images" name="old-images" value="<?= $workorder_content->Attachment;?>">
                      <div class="invalid-feedback">
                        <?php echo form_error('images') ?>
                      </div>
                    </div>

                    <input class="btn btn-success" type="submit" name="btn" value="Kirim" style="width: 150px; text-align: center" />
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- End Content Row 1 -->
        </div>
        <!-- /.container-fluid -->