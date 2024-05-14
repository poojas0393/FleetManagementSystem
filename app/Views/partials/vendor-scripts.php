<?php
   $uri = new \CodeIgniter\HTTP\URI(current_url(true));
   $pages = $uri->getSegments();
   $page = $uri->getSegment(count($pages));
 ?>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.7.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>

<!-- Feather Icon JS -->
<script src="<?php echo base_url(); ?>assets/js/feather.min.js"></script>

<!-- Slimscroll JS -->
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>

<!-- Datatable JS -->
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap5.min.js"></script>

<!-- Daterangepicker JS -->
<script src="<?php echo base_url(); ?>assets/js/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>

<!-- Custom Json Js -->	
<script src="<?php echo base_url(); ?>assets/js/jsonscript.js"></script>

<!-- Select2 JS -->
<script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.min.js"></script>

<!-- Bootstrap Tagsinput JS -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

<!-- Datetimepicker JS -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.min.js"></script>

<?php if ($page != 'forgot-password'&& $page !='forgot-password-2'&& $page !='forgot-password-3'&& $page !='index'&& $page !='login-2'&& $page !='login-3'&& $page !='lock-screen'&& $page !='register'&& $page !='register-2'&& $page !='register-3'&& $page !='error-404'&& $page !='error-500'&& $page !='email-verification'&& $page !='email-verification-2'&& $page !='email-verification-3'&& $page !='reset-password'&& $page !='reset-password-2'&& $page !='reset-password-3'&& $page !='success'&& $page !='success-2'&& $page !='success-3'&& $page !='two-step-verification'&& $page !='two-step-verification-2'&& $page !='two-step-verification-3'&& $page !='under-maintenance' && $page !='coming-soon'&& $page !='coming-soon') { ?>
<!-- Custom JS -->
<script src="<?php echo base_url(); ?>assets/js/theme-script.js"></script>
<?php } ?>

<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
