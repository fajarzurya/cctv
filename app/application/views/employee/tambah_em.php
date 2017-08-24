<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper">
                
                <?php echo form_open_multipart('employee/tambah_daftar');?>
				<section class="content">
				  <div class="row">
				  <!-- general form elements -->
					  <div class="box box-primary">
						<div class="box-header with-border">
						  <h3 class="box-title">Employee Detail</h3>
						</div>
						<!-- /.box-header -->
						  <div class="box-body">
							<div class="col-xs-3 form-group">
							  <label>Nomor Pegawai</label>
							  <input type="text" class="form-control" name="nopeg" value="<?php echo $kode_em; ?>" placeholder="Nomor Pegawai" readonly>
							</div>
							<div class="col-xs-7 form-group">
							  <label>Nama</label>
							  <input type="text" class="form-control" style="text-transform:uppercase;" name="nama" placeholder="Nama" onkeyup="sync(this)" required>
							</div>
							<!-- select -->
							<div class="col-xs-2 form-group">
							  <label>Status</label>
							  <select class="form-control" name="status">
								<option>Aktif</option>
								<option>Berhenti</option>
							  </select>
							</div>
							<div class="col-xs-3 form-group">
							  <label>Jabatan</label>
							  <select class="form-control select2" style="width: 100%;" name="jabatan">
								  <option selected="selected">Staff Junior</option>
								  <option>Staff Senior</option>
								  <option>Asisten Manager</option>
								  <option>Manager</option>
								  <option>General Manager</option>
								  <option>Direktur</option>
								</select>
							</div>
							<div class="col-xs-4 form-group">
							  <label>Departemen</label>
							  <select class="form-control select2" style="width: 100%;" name="departemen">
								  <option selected="selected">Administrasi</option>
								  <option>Keuangan</option>
								  <option>Pemasaran</option>
								  <option>Proyek</option>
								  <option>Teknologi</option>
								</select>
							</div>
							  <!-- Enter -->
							  <div class="col-xs-6 form-group">
								<label>Tanggal Masuk :</label>

								<div class="input-group date">
								  <input type="text" class="form-control pull-right" id="datepicker" name="tglmasuk">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								</div>
								<!-- /.input group -->
							  </div>
							  <!-- /.form group -->
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
							<input type="text" class="form-control" placeholder="Nama Kontak" name="kontak" id="kontak">
							<span class="input-group-addon"><i class="fa fa-address-card"></i></span>
						  </div>
						  <br>
						  <div class="input-group">
							<input type="email" class="form-control" placeholder="Email" name="email">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						  </div>
						  <br>
						  
						  <h4>Phone</h4>

						  <div class="input-group">
							<input type="text" class="form-control" placeholder="HP" data-inputmask='"mask": "(62)99999999999"' data-mask name="hp">
							<span class="input-group-addon"><i class="fa fa-mobile-phone fa-lg"></i></span>
						  </div>
						  <br>
						  <div class="input-group">
							<input type="text" class="form-control" placeholder="Telephone Rumah" name="telepon" data-inputmask='"mask": "(999)9999999"' data-mask>
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
							  <input type="text" class="form-control" name="kodepos" placeholder="Kode Pos" data-inputmask='"mask": "99999"' data-mask>
							</div>
							<div class="form-group" style="float:left;width:50%;padding-left:2px">
							  <label>Kecamatan</label>
							  <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan">
							</div>
							<div class="form-group" style="float:left;width:50%">
							  <label>Kota/Kabupaten</label>
							  <input type="text" class="form-control" name="kota" placeholder="Kota/Kabupaten">
							</div>
							<div class="form-group" style="float:left;width:50%;padding-left:2px">
							  <label>Provinsi</label>
							  <input type="text" class="form-control" name="provinsi" placeholder="Provinsi">
							</div>
							<div class="form-group">
							  <label>Alamat</label>
							  <textarea class="form-control" rows="2" name="alamat"></textarea>
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