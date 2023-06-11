<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="<?php echo base_url(); ?>assets/frontend/css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    <title>Document</title>
</head>

<body class="d-flex align-items-center min-vh-100" style="background-color: #f5f5f5;">
    <div class="container pt-4 d-flex justify-content-center text-center" style="height: 500px;">
	<?php echo form_open('admin/login'); 
		
		if($this->session->flashdata('pesan')) {
			echo'<div class="alert alert-success alert-dismissible">
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
	
			echo $this->session->flashdata('pesan');
			echo '</div>';
		}
		?>

            <div>
                <img class="mb-4" src="<?php echo base_url(); ?>assets/logoarek.png" alt="Logo Arek TV" width="74" height="74">
            </div>
            <div class="mb-3">
                <h3 style="font-weight: normal;"> Arek Televisi </h3>
            </div>
            <div class="form-floating mt-2">
                <input type="username" name="username" id="username" class="form-control form-control-sm change-border" required
                    autofocus placeholder="Username">
                <label for="username">Username</label>
            </div>
            <div class="form-floating mt-1">
                <input type="password" name="password" id="password" class="form-control form-control-sm no-border"
                    required placeholder="Password">
                <label for="username">Password</label>
            </div>
            
            <button type="submit" class="btn btn-lg btn-primary w-100">Sign in</button>
        	<? echo form_close(); ?>
    </div>
</body>

</html>
