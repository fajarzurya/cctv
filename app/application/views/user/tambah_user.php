<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper">
                <?php echo form_open_multipart('user/tambah_daftar');?>
				<section class="content">
				  <div class="row">
					<div class="register-box">
					  <div class="register-logo">
						<b>Gattco</b>CCTV</a>
					  </div>
					  <div class="register-box-body">
						  <div class="input-group">
							<input type="text" class="form-control" placeholder="Karyawan">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						  </div>
						  <br>
						  <div class="input-group">
							<input type="email" class="form-control" placeholder="Username">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						  </div>
						  <br>
						  <div class="input-group">
							<input type="password" class="form-control" placeholder="Password">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						  </div>
						  <br>
						  <div class="input-group">
							<input type="password" class="form-control" placeholder="Retype password">
							<span class="input-group-addon"><i class="glyphicon glyphicon-log-in"></i></span>
						  </div>
						  <br>
						  <div class="form-group has-feedback">
							<select class="form-control" name="tipe">
								<option>Administrator</option>
								<option>User</option>
							</select>
						  </div>
						  <div class="row">
							<div class="col-xs-4">
							</div>
							<!-- /.col -->
							<div class="col-xs-4">
							  <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
							</div>
							<!-- /.col -->
						  </div>
						</form>
					  </div>
					  <!-- /.form-box -->
					</div>
					<!-- /.register-box -->
					</div>
				</section>	
               	<?php echo form_close();?>
                </div>
                <!-- /.table-responsive -->
				
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>