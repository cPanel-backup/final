<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
	<style>
	    body{
	        background:#fbfbfb !important;
	    }
	</style>
</head>
<body>
    <section class="pt-50">
        <div class="container">
            <div class="d-flex flex-row justify-content-center mt-3">
                <img src="<?php echo base_url();?>assets/img/trigotab-logo.svg" class="main_logo">
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-sm-4 card shadow py-4 brs-10">
                    <form class="form-horizontal" id="login_form" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-12">
                                <label> Username </label>
                                <input type="text" class="form-control" name="username" placeholder="Please enter user name">
                            </div>
                            <div class="error"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label> Password </label>
                                <input type="password" class="form-control" name="password" placeholder="Please enter user password">
                            </div>
                        </div>
                        <?php if (!empty($error)) : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong><?php echo $error; ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <div class="form-group row mt-3 mb-0">
                            <div class="col-md-12 text-center">
                                <input class="btn text-center" name="submit" type="submit" value="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view('layout/admin_copyright');  ?>
	<!--  JavaScript -->
    <?php $this->load->view('layout/js');  ?>
    <!--  End JavaScript -->
</body>
</html>