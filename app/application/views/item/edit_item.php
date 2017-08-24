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
                
                <?php echo form_open_multipart('item/edit_item');?>
                <?php
                foreach($dokumen->result()as $dokumen)
											{
				?>
				<section class="content">
				  <div class="row">
				  <!-- general form elements -->
					  <div class="box box-primary">
						<div class="box-header with-border">
						  <h3 class="box-title">Item Detail</h3>
						</div>
						<!-- /.box-header -->
						  <div class="box-body">
							<div class="col-xs-4 form-group">
							  <label>Nomor Item</label>
							  <input type="text" class="form-control" name="noitem" placeholder="Nomor Item" value="<?php echo $dokumen->id_barang;?>" readonly>
							</div>
							<div class="col-xs-6 form-group">
							  <label>Deskripsi Item</label>
							  <input type="text" class="form-control" style="text-transform:uppercase;" name="deskripsi" value="<?php echo $dokumen->deskripsi;?>" placeholder="Deskripsi Item">
							</div>
							<div class="col-xs-2 form-group">
							  <label>&nbsp;</label>
								<br><br><br>
							</div>
							<!-- Status
							<div class="col-xs-2 form-group">
							  <label>Status</label>
							  <select class="form-control" name="status">
								<option>Aktif</option>
								<option>Tidak Aktif</option>
							  </select>
							</div> -->
							<!-- Jenis -->
							<div class="col-xs-3 form-group">
							  <label>Jenis Kamera</label>
							   <select class="form-control" name="jenis">
								<option value="<?php echo $dokumen->jenis;?>">- Terpilih <?php echo $dokumen->jenis;?> -</option>
								<option>BULLET CAM</option>
								<option>IP CAM</option>
								<option>IR CAM</option>
								<option>PORTABLE CAM</option>
							  </select>
							</div>
							<!-- Satuan -->
							<div class="col-xs-3 form-group">
							  <label>Satuan</label>
							  <div class="input-group">
							   <input type="text" class="form-control" name="satuan" placeholder="Satuan" readonly>
							    <div class="input-group-addon">
								 <i class="fa fa-plus-square"></i>
								</div>
							  </div>
							  <!--<button type="button" class="btn btn-primary btn-md fa fa-plus-square pull-left" data-toggle="modal" data-target="#modalSatuan"></button>-->
							</div>
							<!-- Gambar -->
							<div class="form-group">
							  <label>Foto</label>
							  <input type="file" name="gambar" value="<?php echo $dokumen->gambar;?>">
							</div>
							<!-- Manufaktur -->
							<div class="col-xs-7 form-group">
							  <label>Manufaktur</label>
							  <input type="text" class="form-control" style="text-transform:uppercase;" name="manufaktur" placeholder="Manufaktur" value="<?php echo $dokumen->manufaktur;?>">
							</div>
							<!-- Grup -->
							<div class="col-xs-3 form-group">
							  <label>Grup</label>
							  <select class="form-control" name="grup">
								<option value="<?php echo $dokumen->grup;?>">- Terpilih <?php echo $dokumen->grup;?> -</option>
								<option>Utama</option>
								<option>Pendukung</option>
							  </select>
							</div>
							  <!--<button type="button" class="btn btn-primary btn-md fa fa-plus-square pull-left" data-toggle="modal" data-target="#modalSatuan"></button>-->
							</div>
						  </div>
						</div>
						  <!-- /.box-body -->
					  </div>
					  <!-- /.box -->
					<div class="box-footer">
						<button type="submit" class="btn btn-block bg-green-active">Simpan</button>
						<!--<button type="button" class="btn btn-block bg-light-blue" data-dismiss>Batal</button>-->
					</div>
				</section>
                   <?php
					}
				   ?>
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