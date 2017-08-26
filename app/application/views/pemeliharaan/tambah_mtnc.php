<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                
                <?php echo form_open_multipart('pemeliharaan/tambah_daftar');?>
				<section class="content">
				  <div class="row">
				  <!-- general form elements -->
					  <div class="box box-primary">
						<div class="box-header with-border">
						  <h3 class="box-title">Pemeliharaan Detail</h3>
						</div>
						<!-- /.box-header -->
						  <div class="box-body">
							<div class="col-xs-3 form-group">
							<label>Nomor Instalasi</label>
							<div class="input-group">
							  <input type="text" class="form-control" name="id_instalasi" placeholder="Nomor Instalasi" readonly>
							  <span class="input-group-addon"><i class="fa fa-plus"></i></span>
							</div>
							</div>
							<div class="col-xs-3 form-group">
							  <label>Nomor Pemeliharaan</label>
							  <input type="text" class="form-control" name="id_pemeliharaan" placeholder="Nomor Pemeliharaan" readonly value="<?php echo $kode_mtnc;?>">
							</div>
							<div class="col-xs-6 form-group">
							  <label>Deskripsi</label>
							  <input type="text" class="form-control" style="text-transform:uppercase;" name="deskripsi" placeholder="Deskripsi Pemeliharaan">
							</div>
							
							<div class="col-xs-3 form-group">
							  <label>Pelaksana</label>
							  <div class="input-group">
								  <input type="text" class="form-control" placeholder="Pelaksana">
								  <span class="input-group-addon"><i class="fa fa-plus"></i></span>
							  </div>
							</div>
							<div class="col-xs-3 form-group">
								<label>Pelanggan</label>
								<input type="text" class="form-control" placeholder="Pelanggan" readonly>
							</div>
							<div class="col-xs-2 form-group">
							  <label>Jenis</label>
							  <select class="form-control" disabled="disabled">
								  <option>Sewa</option>
							  </select>
							</div>
							<div class="col-xs-4 form-group">
							  <label>&nbsp;</label>
								<br><br><br>
							</div>
							
							  <!-- Enter -->
							  <div class="col-xs-4 form-group">
								<label>Jadwal Mulai :</label>

								<div class="input-group date">
								  <input type="text" class="form-control pull-right" id="datepicker">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								</div>
								<!-- /.input group -->
							  </div>
							  <!-- /.form group -->
							  
							  <!-- Terminated -->
							  <div class="col-xs-4 form-group">
								<label>Jadwal Selesai :</label>

								<div class="input-group date">
								  <input type="text" class="form-control pull-right" id="datepicker1">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								</div>
								<!-- /.input group -->
							  </div>
							  <!-- /.form group -->
							  
							  <div class="col-xs-2 form-group">
								  <label>&nbsp;</label>
									<br><br><br>
							  </div>
							  
							  <!-- Enter -->
							  <div class="col-xs-4 form-group">
								<label>Aktual Mulai :</label>

								<div class="input-group date">
								  <input type="text" class="form-control pull-right" id="datepicker2">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								</div>
								<!-- /.input group -->
							  </div>
							  <!-- /.form group -->
							  
							  <!-- Terminated -->
							  <div class="col-xs-4 form-group">
								<label>Aktual Selesai :</label>

								<div class="input-group date">
								  <input type="text" class="form-control pull-right" id="datepicker3">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								</div>
								<!-- /.input group -->
							  </div>
							</div>
						  </div>
						  <!-- /.box-body -->
					  </div>
					  <!-- /.box -->
					  
					  <div class="row">
					  <!-- general form elements -->
						  <div class="box box-info">
							<div class="box-header with-border">
							  <h3 class="box-title">Kebutuhan Barang</h3>
							  <div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" id="satu_klik_min"><i class="fa fa-minus"></i></button>
								<button type="button" class="btn btn-box-tool" id="satu_klik_plus"><i class="fa fa-plus"></i></button>
							  </div>
							</div>
							<!-- /.box-header -->
							  <div class="box-body" id="satu">
								  <div class="col-xs-11 input-group">
									<input type="text" class="form-control" placeholder="Nama Barang" readonly>
									<span class="input-group-addon"><i class="fa fa-search"></i></span>
								  </div><br><br><br>
								  <div class="col-xs-4 input-group">
									<input type="text" class="form-control" placeholder="Jumlah">
								  </div>
								  <div class="col-xs-4 input-group">
									<input type="text" class="form-control" placeholder="Satuan" readonly>
								  </div><br><br><br>
								  <div class="col-xs-4 input-group">
									<input type="text" class="form-control" placeholder="Gudang" readonly>
								  </div>
								  <div class="col-xs-8 input-group">
									<input type="text" class="form-control" placeholder="Manufaktur" readonly>
								  </div>
								  <!-- /input-group -->
								</div>
								<!-- /.box-body -->
							  </div>
							  <!-- /.box-body -->
						  </div>
						  <!-- /.box -->
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