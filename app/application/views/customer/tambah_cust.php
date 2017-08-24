<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!--<div class="panel-heading">
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
                    
                </div>
            </div>-->
            
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
							<div class="col-xs-3">
							  <label>Kode Pelanggan</label>
							  <input type="text" class="form-control" name="kode" placeholder="Kode Pelanggan" value="<?php echo $kodecust; ?>" readonly>
							</div>
							<div class="col-xs-6">
							  <label>Deskripsi</label>
							  <input type="text" class="form-control" name="deskripsi" style="text-transform:uppercase;" placeholder="Deskripsi" id="deskripsi" onkeyup="sync(this)" required>
							</div>
							<!-- select -->
							<div class="col-xs-3">
							  <label>Tipe Pelanggan</label>
							  <select class="form-control" name="tipe">
								<option value="1">Perusahaan</option>
								<option value="2">Perorangan</option>
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
							<input type="text" class="form-control" name="kontak" id="kontak" style="text-transform:uppercase;" placeholder="Nama Kontak">
							<span class="input-group-addon"><i class="fa fa-address-card"></i></span>
						  </div>
						  <br>
						  <div class="input-group">
							<input type="email" class="form-control" name="email" placeholder="Email" >
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						  </div>
						  <br>
						  
						  <h4>Phone</h4>

						  <div class="input-group">
							<input type="text" class="form-control" name="hp" placeholder="HP" data-inputmask='"mask": "+(62)99999999999"' data-mask>
							<span class="input-group-addon"><i class="fa fa-mobile-phone fa-lg"></i></span>
						  </div>
						  <br>
						  <div class="input-group">
							<input type="text" class="form-control" name="phone" placeholder="Telephone Rumah" data-inputmask='"mask": "(999)9999999"' data-mask>
							<span class="input-group-addon"><i class="fa fa-phone"></i></span>
						  </div>
						  <br>
						  <!--<div class="btn-group">
							 <button type="button" class="btn btn-info">
							 <i class="fa fa-search"></i> &nbsp;Pilih Kontak
							 </button> 
						  </div>-->
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
							  <input type="text" class="form-control" name="kodepos" placeholder="Kode Pos" data-inputmask='"mask": "99999"' data-mask>
							</div>
							<div class="form-group" style="float:left;width:50%;padding-left:2px">
							  <label>Kecamatan</label>
							  <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" >
							</div>
							<div class="form-group" style="float:left;width:50%">
							  <label>Kota/Kabupaten</label>
							  <input type="text" class="form-control" name="kota" placeholder="Kota/Kabupaten" >
							</div>
							<div class="form-group" style="float:left;width:50%;padding-left:2px">
							  <label>Provinsi</label>
							  <input type="text" class="form-control" name="provinsi" placeholder="Provinsi" >
							</div>
							<div class="form-group">
							  <label>Alamat</label>
							  <textarea class="form-control" rows="2" name="alamat" ></textarea>
							</div>
							<!--<div class="btn-group">
							 <button type="button" class="btn btn-info">
								<i class="fa fa-search"></i> &nbsp;Pilih Alamat
							 </button>
							</div>-->
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
