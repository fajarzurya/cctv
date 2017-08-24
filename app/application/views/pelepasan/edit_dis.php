<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper">
                
                <?php echo form_open_multipart('item/edit_item');?>
                <?php
                // foreach($dokumen->result()as $dokumen)
											// {
				// ?>
				<section class="content">
				  <div class="row">
				  <!-- general form elements -->
					  <div class="box box-primary">
						<div class="box-header with-border">
						  <h3 class="box-title">Instalasi Detail</h3>
						</div>
						<!-- /.box-header -->
						  <div class="box-body">
							<div class="col-xs-3 form-group">
							  <label>Nomor Instalasi</label>
							  <input type="text" class="form-control" name="id_instalasi" readonly>
							</div>
							<div class="col-xs-6 form-group">
							  <label>Deskripsi</label>
							  <input type="text" class="form-control" name="deskripsi" readonly>
							</div>
							<div class="col-xs-2 form-group">
							  <label>Status</label>
							  <select class="form-control" name="status">
								  <option>Aktif</option>
								  <option>Pending</option>
								  <option selected="selected">Selesai</option>
							  </select>
							</div>
							
							<div class="col-xs-1 form-group">
							  <label>&nbsp;</label>
								<br><br><br>
							</div>
							
							<div class="col-xs-3 form-group">
							  <label>Pelaksana</label>
							  <div class="input-group">
								  <input type="text" class="form-control" placeholder="Pelaksana" readonly>
								  <span class="input-group-addon"><i class="fa fa-search"></i></span>
							  </div>
							</div>
							<div class="col-xs-3 form-group">
								<label>Pelanggan</label>
								<div class="input-group">
								  <input type="text" class="form-control" readonly>
								</div>
							</div>
							<div class="col-xs-3 form-group">
							  <label>Jenis</label>
							  <select class="form-control" name="jenis" disabled="disabled">
								  <option selected="selected"></option>
							  </select>
							</div>
							<div class="col-xs-2 form-group">
							  <label>Drawing Lokasi</label>
							  <input type="file" name="drawing">
							</div>
							
							<!-- Tanggal Pelepasan -->
							  <div class="col-xs-4 form-group">
								<label>Tanggal Pelepasan :</label>

								<div class="input-group date">
								  <input type="text" class="form-control pull-right" id="datepicker" name="tglmulai">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								</div>
								<!-- /.input group -->
							  </div>
							  <!-- /.form group -->
							  <!-- Tanggal Mulai -->
							  <div class="col-xs-3 form-group">
								<label>Tanggal Mulai :</label>

								<div class="input-group date">
								  <input type="text" class="form-control pull-right" name="tglmulai" readonly>
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								</div>
								<!-- /.input group -->
							  </div>
							  <!-- /.form group -->
							  
							  <!-- Tanggal Selesai -->
							  <div class="col-xs-3 form-group">
								<label>Tanggal Selesai :</label>

								<div class="input-group date">
								  <input type="text" class="form-control pull-right" name="tglselesai" readonly>
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								</div>
								<!-- /.input group -->
							  </div>
							  <!-- /.form group -->
							  <div class="col-xs-7 form-group">
								  <label>Keterangan</label>
								  <input type="text" class="form-control" name="keterangan">
							  </div>
							</div>
						  </div>
						  <!-- /.box-body -->
					  </div>
					  <!-- /.box -->
						<!-- left column -->
						<div class="col-md-6" >
						<!-- Contact -->
						  <div class="box box-info">
							<div class="box-header with-border">
							  <h3 class="box-title">Kebutuhan Barang</h3>
							</div>
							<div class="box-body">
							  <div class="col-xs-12 input-group">
								<input type="text" class="form-control" placeholder="Nama Barang" readonly>
							  </div><br>
							  <div class="col-xs-4 input-group">
								<input type="text" class="form-control" placeholder="Jumlah" readonly>
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
						  <!-- /.box --> 
						</div>
						<!--/.col (left) -->
						<!-- right column -->
						<div class="col-md-6" >
						<!-- general form elements -->
						  <div class="box box-info">
							<div class="box-header with-border">
							  <h3 class="box-title">Kontrak</h3>
							</div>
							<!-- /.box-header -->
							  <div class="box-body">
								<div class="col-xs-11 input-group">
								<input type="text" class="form-control" placeholder="Nama Kontrak" readonly>
							  </div><br><br><br>
							  <div class="col-xs-6 input-group">
								<input type="text" class="form-control" placeholder="Tanggal Mulai" readonly>
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							  </div>
							  <div class="col-xs-6 input-group">
								<input type="text" class="form-control" placeholder="Tanggal Selesai" readonly>
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
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
                   <?php
					// }
				   // ?>
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