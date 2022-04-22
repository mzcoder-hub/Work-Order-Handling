        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Work Order</h1>
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

                  <form action="<?php echo site_url('user/add') ?>" method="post" enctype="multipart/form-data" >
                    <div class="form-group">
                      <label for="name"><strong>Username*</strong></label>
                      <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                      type="text" name="username" placeholder="Isi username Kamu..." />
                      <div class="invalid-feedback">
                        <?php echo form_error('username') ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="name"><strong>Password*</strong></label>
                      <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                      type="password" name="password" placeholder="Isi password Kamu..." />
                      <div class="invalid-feedback">
                        <?php echo form_error('password') ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="name"><strong>Email*</strong></label>
                      <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                      type="email" name="email" placeholder="Isi email Kamu..." />
                      <div class="invalid-feedback">
                        <?php echo form_error('email') ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="name"><strong>Nama Lengkap*</strong></label>
                      <input class="form-control <?php echo form_error('full_name') ? 'is-invalid':'' ?>"
                      type="text" name="full_name" placeholder="Isi Nama Lengkap Kamu..." />
                      <div class="invalid-feedback">
                        <?php echo form_error('full_name') ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label><strong>Hak Akses User (Default User)</strong></label>
                      <select class="form-control" name="role">
                        <option value="user" selected>User</option>
                        <option value="admin">Admin</option>
                      </select>
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