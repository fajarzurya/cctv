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
                
                <?php echo form_open_multipart('instalasi/edit_ins');?>
                <?php
                foreach($dokumen->result()as $dokumen)
											{
				?>
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
								  <input type="text" class="form-control" name="id_instalasi" placeholder="Nomor Instalasi" readonly value="<?php echo $dokumen->id_instalasi;?>">
								</div>
								<div class="col-xs-6 form-group">
								  <label>Deskripsi</label>
								  <input type="text" class="form-control" style="text-transform:uppercase;" name="deskripsi" placeholder="Deskripsi Instalasi" value="<?php echo $dokumen->deskripsi;?>">
								</div>
								<div class="col-xs-3 form-group">
								  <label>Status</label>
								  <select class="form-control" name="status">
									  <option> - Terpilih <?php echo $dokumen->status;?> - </option>
									  <option>Aktif</option>
									  <option>Pending</option>
								  </select>
								</div>
								<div data-toggle="collapse" data-parent="#accordion" href="#collapseOne">&nbsp;</div>
								<div class="col-xs-3 form-group">
									<label>Pelanggan</label>
									<div class="input-group">
									  <input type="text" name="pelanggan" id="set1" class="form-control" placeholder="Pelanggan" readonly value="<?php echo $dokumen->id_customer;?>">
									  <span class="input-group-addon"><i class="fa fa-plus"></i></span>
									</div>
								</div>
								<div class="col-xs-3 form-group">
								  <label>Jenis</label>
								  <select class="form-control" name="jenis">
									  <option> - Terpilih <?php echo $dokumen->jenis;?> - </option>
									  <option>Beli</option>
									  <option>Sewa</option>
								  </select>
								</div>
								<div class="col-xs-2 form-group">
								  <label>Drawing Lokasi</label>
								  <input type="file" name="drawing" value="<?php echo $dokumen->drawing;?>">
								</div>
								
								<div class="col-xs-4 form-group">
								  <label>&nbsp;</label>
									<br><br><br>
								</div>
								
								<!------ Hide ---->
								<div id="collapseOne" class="panel-collapse collapse out">
									<div class="col-xs-12 form-group">
										<!-- Contact -->
										<label>&nbsp;</label>
										<div class="row">
											<div class="box box-warning">
											<div class="box-header">
											  <h3 class="box-title">Pelanggan</h3>
											  <div class="box-tools">
												<ul class="pagination pagination-sm no-margin pull-right">
												  <li><a href="#">&laquo;</a></li>
												  <li><a href="#">1</a></li>
												  <li><a href="#">&raquo;</a></li>
												</ul>
											  </div>
											</div>
											<!-- /.box-header -->
											<div class="box-body no-padding">
											  <table class="table">
												<tr>
												  <th>No.</th>
												  <th>Kode Pelanggan</th>
												  <th>Nama Pelanggan</th>
												  <th>Tipe</th>
												</tr>
												  <?php
													$no = 1;
													foreach($pelanggan->result()as $pelanggan)
													{
												  ?>
												<tr>
													<td><?php echo $no;?></td>
													<td>
													<?php echo "<a id='".$pelanggan->ID_CUSTOMER."' onclick='changeValue(this)'>".$pelanggan->ID_CUSTOMER."</a>";?>
													</td>
													<td>
													<?php echo $pelanggan->CUSTOMER;?>
													</td>
													<td>
													<?php 
													if($pelanggan->TIPE==1)
													{
														echo "Perusahaan";
													}else if($pelanggan->TIPE==2){
														echo "Perorangan";
													}
													?>
													</td>
												</tr>
												<?php 
												$no++;
												}
												?>
											  </table>
											</div>
											<!-- /.box-body -->
										  </div>
										  <!-- /.box -->
										</div>
									</div>
								</div>
								
								<div data-toggle="collapse" data-parent="#accordion" href="#collapse2">&nbsp;</div>
								<div class="col-xs-3 form-group">
								  <label>Pelaksana</label>
								  <div class="input-group">
									  <input type="text" class="form-control" id="set2" name="pelaksana" placeholder="Pelaksana" readonly value="<?php echo $dokumen->pelaksana;?>">
									  <span class="input-group-addon"><i class="fa fa-plus"></i></span>
								  </div>
								</div>							
								<div class="col-xs-3 form-group">
								  <label>Total Biaya</label>
								  <div class="input-group">
									  <input type="text" name="total" class="form-control" placeholder="Rp. " readonly value="<?php echo "Rp.".$dokumen->total;?>">
								  </div>
								</div>
								
								<div class="col-xs-6 form-group">
								  <label>&nbsp;</label>
									<br><br><br>
								</div>
								
								<!------ Hide ---->
								<div id="collapse2" class="panel-collapse collapse">
									<div class="col-xs-12 form-group">
										<!-- Contact -->
										<label>&nbsp;</label>
										<div class="row">
											<div class="box box-warning">
											<div class="box-header">
											  <h3 class="box-title">Karyawan</h3>
											  <div class="box-tools">
												<ul class="pagination pagination-sm no-margin pull-right">
												  <li><a href="#">&laquo;</a></li>
												  <li><a href="#">1</a></li>
												  <li><a href="#">&raquo;</a></li>
												</ul>
											  </div>
											</div>
											<!-- /.box-header -->
											<div class="box-body no-padding">
											  <table class="table">
												<tr>
												  <th>No.</th>
												  <th>Nomor Karyawan</th>
												  <th>Karyawan</th>
												  <th>Jabatan</th>
												  <th>Departemen</th>
												</tr>
												  <?php
													$no = 1;
													foreach($karyawan->result()as $karyawan)
													{
												  ?>
												<tr>
													<td><?php echo $no;?></td>
													<td>
													<?php echo "<a id='".$karyawan->nopeg."' onclick='ganti2(this)'>".$karyawan->nopeg."</a>";?>
													</td>
													<td>
													<?php echo $karyawan->nama;?>
													</td>
													<td>
													<?php echo $karyawan->jabatan;?>
													</td>
													<td>
													<?php echo $karyawan->departemen;?>
													</td>
												</tr>
												<?php 
												$no++;
												}
												?>
											  </table>
											</div>
											<!-- /.box-body -->
										  </div>
										  <!-- /.box -->
										</div>
									</div>
								</div>
								
								  <!-- Enter -->
								  <div class="col-xs-4 form-group">
									<label>Tanggal Mulai :</label>

									<div class="input-group date">
									  <input type="text" class="form-control pull-right" id="datepicker" name="tglmulai" value="<?php echo $dokumen->tgl_mulai;?>">
									  <div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									  </div>
									</div>
									<!-- /.input group -->
								  </div>
								  <!-- /.form group -->
								  
								  <!-- Terminated -->
								  <div class="col-xs-4 form-group">
									<label>Tanggal Selesai :</label>
									<div class="input-group date">
									  <input type="text" class="form-control pull-right" id="datepicker2" name="tglselesai" value="<?php echo $dokumen->tgl_selesai;?>">
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
						<div class="col-md-6" >
						<!-- Contact -->
						  <div class="box box-info">
							<div class="box-header with-border">
							  <h3 class="box-title">Kebutuhan Barang</h3>
							  <div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" id="satu_klik_min"><i class="fa fa-minus"></i></button>
								<button type="button" class="btn btn-box-tool" id="satu_klik_plus"><i class="fa fa-plus"></i></button>
							  </div>
							</div>
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
						  <!-- /.box --> 
						</div>
						<!--/.col (left) -->
						<!-- right column -->
						<div class="col-md-6" >
						<!-- general form elements -->
						  <div class="box box-info">
							<div class="box-header with-border">
							  <h3 class="box-title">Kontrak</h3>
							  <div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" id="minus"><i class="fa fa-minus"></i></button>
								<button type="button" class="btn btn-box-tool" id="plus"><i class="fa fa-plus"></i></button>
							  </div>
							</div>
							<!-- /.box-header -->
							  <div class="box-body" id="dua">
								<div class="col-xs-11 input-group">
								<input type="text" class="form-control" placeholder="Nama Kontrak" readonly>
								<span class="input-group-addon"><i class="fa fa-search"></i></span>
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