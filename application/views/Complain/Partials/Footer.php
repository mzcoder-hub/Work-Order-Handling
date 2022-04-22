
</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; MzCoder 2020</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?= base_url('logout');?>">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="AddInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Keterangan</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url();?>report/add-info" method="POST">
          <div class="form-group">
            <div class="form-group">
              <label for="name"><strong>ID WorkOrder</strong></label>
              <input class="form-control" type="text" id="IDWO" disabled/>
              <input type="hidden" name="ID_COMPLAIN" id="idwo"/>
            </div>
            <div class="form-group">
              <label for="name"><strong>Informasi proses</strong></label><br>
              <textarea class="form-control" name="AddInfo" type="text" id="Add_Info" style="height:300px"/></textarea>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary float-right"> Add Info</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- WorkOrder Detail Modal-->
<div class="modal fade" id="WOrkDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data WorkOrder</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <center><input class="btn" id="buttonStatus" style="width: 100%;margin:5px" value="" disabled/></center>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="name"><strong>ID WorkOrder</strong></label>
              <input class="form-control" type="text" id="ID_COMPLAIN" disabled/>
            </div>
            <div class="form-group">
              <label for="name"><strong>Nama</strong></label>
              <input class="form-control" type="text" id="Nama" disabled/>
            </div>
            <div class="form-group">
              <label for="name"><strong>Department</strong></label>
              <input class="form-control" type="text" id="Department" disabled/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="name"><strong>NPK</strong></label>
              <input class="form-control" type="text" id="NPK" disabled/>
            </div>
            <div class="form-group">
              <label for="name"><strong>Divisi</strong></label>
              <input class="form-control" type="text" id="Divisi" disabled/>
            </div>
            <div class="form-group">
              <label for="name"><strong>Nama Atasan</strong></label>
              <input class="form-control" type="text" id="Nama_Atasan" disabled/>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="name"><strong>Subject Abnormality</strong></label>
              <input class="form-control" type="text" id="Subject_Abnormality" disabled/>
            </div>
            <div class="form-group">
              <label for="name"><strong>Keterangan Abnormality</strong></label><br>
              <textarea class="form-control" type="text" id="Keterangan_Abnormality" style="height:300px"disabled/></textarea>
            </div>
            <div class="form-group">
              <label for="name"><strong>Download Attachment</strong></label><br>
              <a class="btn btn-primary" id="LinkAttachment">Download Attachment</a> <br>
              <p id="ketGambar"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" onclick="location.reload();" type="button" data-dismiss="modal">Quit</button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url();?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url();?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url();?>assets/vendor/chart.js/Chart.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#dataTable').DataTable();
  } );

  $(document).ready(function(){
    $('.AddInfo').click(function(e){
      e.preventDefault();
      var id = this.id;
      var splitid = id.split('_');
      var data = splitid[1];
      $('#AddInfoModal').modal('show');
      $('#IDWO').val(data);
      $('#idwo').val(data);
    });
  });
  $(document).ready(function(){
    $('.DataWO').click(function(e){
      e.preventDefault();
      var id = this.id;
      var splitid = id.split('_');
      var data = splitid[1];
      var ngetes = $('#LinkAttachment');
      // console.log(data);
      $.ajax({
        type: 'GET',
        url: "<?= base_url('workorder/view');?>/"+data,
        data: data,
        dataType: "JSON",
        success: function(data){
          var url = '<?=base_url();?>workorder/download/'+data.Attachment;
          $('#WOrkDetail').modal('show');
          $('#ID_COMPLAIN').val(data.ID_COMPLAIN);
          $('#Nama').val(data.Nama);
          $('#NPK').val(data.NPK);
          $('#Divisi').val(data.Divisi);
          $('#Department').val(data.Department);
          $('#Nama_Atasan').val(data.Nama_Atasan);
          $('#Subject_Abnormality').val(data.Subject_Abnormality);
          $('#Keterangan_Abnormality').val(data.Keterangan_Abnormality);

          if (data.Attachment =='default.jpg') {
            ngetes[0].setAttribute('disabled', null);
            $('#ketGambar').html('Tidak mengirim Attachment');
          }else{
            ngetes[0].setAttribute('href', url);
            $('#ketGambar').html('');
          }

          if (data.Status =='On Progress') {
            $('#buttonStatus').removeClass();
            $('#buttonStatus').addClass('btn btn-warning');
            $('#buttonStatus').val(data.Status);
          }else if (data.Status =='Closed') {
            $('#buttonStatus').removeClass();
            $('#buttonStatus').addClass('btn btn-danger');
            $('#buttonStatus').val(data.Status);
          }else{
            $('#buttonStatus').removeClass();
            $('#buttonStatus').addClass('btn btn-success');
            $('#buttonStatus').val(data.Status);
          }
        }
      });
    });
    $('#WOrkDetail').on('hidden.bs.modal', function () {
     location.reload();
   });
  });
</script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">

  $(function () {
    $('#Data-Chart').highcharts({
      chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false
      },
      title: {
        text: ''
      },
      tooltip: {
        pointFormat: '{series.name}: <b>{point.y}</b>'
      },
      plotOptions: {
        pie: {
          allowPointSelect: true,
          cursor: 'pointer',
          dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.y}',
            style: {
              color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
          }
        }
      },
      series: [{
        type: 'pie',
        name: 'Status WorkOrder',
        data: [{
          name: 'Open',
          y: <?= $open;?>,
          sliced: true,
          selected: true
        }, {
          name: 'OnProgress',
          y: <?= $onprog;?>
        }, {
          name: 'Closed',
          y: <?= $close;?>
        }]
      }]
    });
  });

</script>
<!-- Page level custom scripts -->
<script src="<?= base_url();?>assets/js/demo/chart-area-demo.js"></script>
<script src="<?= base_url();?>assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>
