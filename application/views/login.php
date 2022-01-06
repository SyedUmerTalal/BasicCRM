<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>lh</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!--///toastr-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;0,800;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <!-- Links -->

    <link rel="stylesheet" href="links/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/style.css">

</head>
<body style="background:#0095ff">

	<div class="container text-center p-4">
        <div class="row">
            <div class="col-lg-4 col-sm-4"></div>
            <div class="col-lg-4 col-sm-4">
              <div class="logo-lh">
                <h1>LH</h1>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4"></div>
        </div> 
    </div>
	<div class="container formlogin text-center">
        <h3>Welcome Back</h3>
        <p>Please sign in to access your</p>

        <div class="container">

        <div class="row">

            <div class="col-lg-3"></div>

                 <div class="col-lg-6">

                     <form class="login100-bluebtn validate-form" method="post" action="<?php echo base_url()."index.php/login/verify_user";?>" >
                        
                        <div class="group">      
                          <input type="email" placeholder="youremail@gmail.com" name="user_email" autocomplete="off" required>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Email</label>
                          <i class="far fa-envelope"></i>

                        </div>
                          
                        <div class="group">      
                          <input type="Password" placeholder="Password" name="user_password" required>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Password</label>
                          <i class="fas fa-lock"></i>
                        </div>
                        

                      
                        <div class="row mt-5">
                            <div class="col-lg-12 m-auto col-12">
                                <button class="bluebtn">Login</button>
                            </div>
                        </div>
                    </form>

                 </div>

              <div class="col-lg-3"></div>
        </div>
          
        </div>
    </div>	

<?php  if($this->session->flashdata('msg') == 1){  ?>
<script>toastr.success('<?php echo $this->session->flashdata('alert_data'); ?>')</script>
<?php }elseif($this->session->flashdata('msg') == 2){ ?>
<script> toastr.error('<?php echo $this->session->flashdata('alert_data'); ?>')</script>
<?php } ?>

</body>
</html>