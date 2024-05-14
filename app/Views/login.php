<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
</head>
<body class="account-page">
	
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<div class="account-content">
			<div class="login-wrapper account-bg">
                <div class="login-content">
                    <form class="needs-validation" method="post" novalidate action="<?php echo base_url();?>deals-dashboard">
                        <div class="login-user-info">
                            <div class="login-logo">
                               <img src="<?php echo base_url();?>assets/img/logo.svg" class="img-fluid" alt="Logo">
                           </div>
                           <div class="login-heading">
                               <h4>Sign In</h4>
                               <p>Access the CRMS panel using your email and passcode.</p>
                           </div>
                           <div class="form-wrap">
                               <label class="col-form-label">Email Address</label>
                               <div class="form-wrap-icon">
                                   <input type="email" class="form-control" id="useremail" required value="admin@example.com">
                                   <i class="ti ti-mail"></i>
                               </div>
                           </div>
                           <div class="form-wrap">
                               <label class="col-form-label">Password</label>
                               <div class="pass-group">
                                   <input type="password" class="pass-input form-control" id="password" required value="123456">
                                   <span class="ti toggle-password ti-eye-off"></span>
                               </div>
                           </div>
                           <div class="form-wrap form-wrap-checkbox">
                               <div class="custom-control custom-checkbox">
									<label class="check">
										<input type="checkbox">
										<span class="box"></span> Remember Me
									</label>
                               </div>
                               <div class="text-end">
                                   <a href="<?php echo base_url();?>forgot-password" class="forgot-link">Forgot Password?</a>
                               </div>
                           </div>
                           <div class="form-wrap">
                               <button type="submit" class="btn btn-primary">Sign In</button>
                           </div>
                           <div class="login-form">
                               <h6>New on our platform?<a href="<?php echo base_url();?>register" class="hover-a"> Create an account</a></h6>
                           </div>
                           <div class="form-set-login or-text">
                               <h4>OR</h4>
                           </div>
                           <div class="login-social-link">
                               <ul class="nav">
                                   <li>
                                       <a href="javascript:void(0);" class="facebook-logo">
                                           <img src="<?php echo base_url();?>assets/img/icons/facebook-logo.svg" alt="Facebook">
                                       </a>
                                   </li>
                                   <li>
                                       <a href="javascript:void(0);">
                                           <img src="<?php echo base_url();?>assets/img/icons/google-logo.svg" alt="Google">
                                       </a>
                                   </li>
                                   <li>
                                       <a href="javascript:void(0);" class="apple-logo">
                                           <img src="<?php echo base_url();?>assets/img/icons/apple-logo.svg" alt="Apple">
                                       </a>
                                   </li>
                               </ul>
                               <div class="copyright-text">
                                   <p>Copyright &copy;2024 - CRMS</p>
                               </div>
                           </div>
                       </div>
                    </form>
                </div>
            </div>
		</div>

	</div>
	<!-- /Main Wrapper -->



<?= $this->include('partials/vendor-scripts') ?>
		<!-- validation init -->
		<script src="<?php echo base_url();?>/assets/js/validation.init.js"></script>

</body>
</html>