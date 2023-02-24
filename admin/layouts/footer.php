<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- CKEDITOR -->
<script src="../public/backend/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('ckeditor');
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.replace('ckeditor2');
    CKEDITOR.config.pasteFormWordPromptCleanup = true;
    CKEDITOR.config.pasteFormWordRemoveFontStyles = false;
    CKEDITOR.config.pasteFormWordRemoveStyles = false;
    CKEDITOR.config.language = 'vi';
    CKEDITOR.config.htmlEncodeOutput = false;
    CKEDITOR.config.ProcessHTMLEntities = false;
    CKEDITOR.config.entities = false;
    CKEDITOR.config.entities_latin = false;
    CKEDITOR.config.ForceSimpleAmpersand = true;
</script>
<!-- jQuery -->
<script src="../public/backend/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../public/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- <script>
  $.widget.bridge('uibutton', $.ui.button)
</script> -->
<!-- Bootstrap 4 -->
<script src="../public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../public/backend/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../public/backend/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../public/backend/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../public/backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../public/backend/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../public/backend/plugins/moment/moment.min.js"></script>
<script src="../public/backend/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../public/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../public/backend/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../public/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/backend/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../public/backend/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../public/backend/dist/js/pages/dashboard.js"></script>
<script>
  $(document).ready(function(){
    $('input[type="file"][name="image"]').change(function(e){
      $('.img-thumbnail').attr('src',URL.createObjectURL(e.target.files[0]));
      $('.img-profile').attr('src',URL.createObjectURL(e.target.files[0]));
    });
    $('.click.profile-info').click(function(){
      $('.profile-info').addClass('active');
      $('.profile-password').removeClass('active');
      $('.form-password').addClass('d-none');
      $('.form-profile').addClass('d-block');
      if($('.form-password').hasClass('d-block')){
        $('.form-password').removeClass('d-block');
      }
    });
    $('.click.profile-password').click(function(){
      $('.profile-info').removeClass('active');
      $('.profile-password').addClass('active');
      $('.form-password').addClass('d-block');
      $('.form-profile').addClass('d-none');
      if($('.form-profile').hasClass('d-block')){
        $('.form-profile').removeClass('d-block');
      }
    });
  });
</script>
</body>
</html>