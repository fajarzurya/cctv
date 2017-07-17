<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                	
                    <?php
					/*if(($notif == 0)){
						
						}
					elseif(($notif == 1)){
						echo "<span class='label label-success'>Data Berhasil ditambah</span>";
						}
					elseif(($notif == 2)){
						echo "<span class='label label-success'>Data Berhasil dihapus</span>";
						}
					else{
						echo "<span class='label label-success'>Data Berhasil diubah</span>";
						}*/
					?>
                    </div>
                    <!-- /.table-responsive -->
                    
                </div>
            </div>
            
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                
                <?php echo form_open_multipart('customer/tambah_daftar');?>
				<section class="content">
				  <div class="row">
				  <!-- general form elements -->
					  <div class="box box-primary">
						<div class="box-header with-border">
						  <h3 class="box-title">Costumer Detail</h3>
						</div>
						<!-- /.box-header -->
						  <div class="box-body">
							<div class="col-xs-2">
							  <label>Kode</label>
							  <input type="text" class="form-control" id="kode" placeholder="Kode" disabled="">
							</div>
							<div class="col-xs-7">
							  <label>Deskripsi</label>
							  <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi">
							</div>
							<!-- select -->
							<div class="col-xs-3">
							  <label>Tipe Customer</label>
							  <select class="form-control">
								<option>Perusahaan</option>
								<option>Perorangan</option>
							  </select>
							</div>
						  </div>
						  <!-- /.box-body -->
					  </div>
					  <!-- /.box -->
					<!-- left column -->
					<div class="col-md-6">
					<!-- Contact -->
					  <div class="box box-info">
						<div class="box-header with-border">
						  <h3 class="box-title">Contact</h3>
						</div>
						<div class="box-body">
						  <div class="input-group">
							<input type="text" class="form-control" placeholder="Nama Kontak">
							<span class="input-group-addon"><i class="fa fa-address-card"></i></span>
						  </div>
						  <br>
						  <div class="input-group">
							<input type="email" class="form-control" placeholder="Email">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						  </div>
						  <br>
						  
						  <h4>Phone</h4>

						  <div class="input-group">
							<input type="text" class="form-control" placeholder="HP">
							<span class="input-group-addon"><i class="fa fa-mobile-phone fa-lg"></i></span>
						  </div>
						  <br>
						  <div class="input-group">
							<input type="text" class="form-control" placeholder="Telephone Rumah">
							<span class="input-group-addon"><i class="fa fa-phone"></i></span>
						  </div>
						  <!-- /input-group -->
						</div>
						<!-- /.box-body -->
					  </div>
					  <!-- /.box --> 
					</div>
					<!--/.col (left) -->
					<!-- right column -->
					<div class="col-md-6">
					<!-- general form elements -->
					  <div class="box box-info">
						<div class="box-header with-border">
						  <h3 class="box-title">Address</h3>
						</div>
						<!-- /.box-header -->
						  <div class="box-body">
							<div class="form-group" style="float:left;width:50%;padding-right:50px">
							  <label>Kode Pos</label>
							  <input type="text" class="form-control" id="kodepos" placeholder="Kode Pos">
							</div>
							<div class="form-group" style="float:left;width:50%;padding-left:2px">
							  <label>Kecamatan</label>
							  <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan">
							</div>
							<div class="form-group" style="float:left;width:50%">
							  <label>Kota/Kabupaten</label>
							  <input type="text" class="form-control" id="kota" placeholder="Kota/Kabupaten">
							</div>
							<div class="form-group" style="float:left;width:50%;padding-left:2px">
							  <label>Provinsi</label>
							  <input type="text" class="form-control" id="provinsi" placeholder="Provinsi">
							</div>
							<div class="form-group">
							  <label>Alamat</label>
							  <textarea class="form-control" rows="2"id="alamat"></textarea>
							</div>
						  </div>
						  <!-- /.box-body -->
					  </div>
					  <!-- /.box -->
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-block bg-green-active">Simpan</button>
						<!--<button type="button" class="btn btn-block bg-light-blue" data-dismiss>Batal</button>-->
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