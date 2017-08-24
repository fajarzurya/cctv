<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                
                <?php echo form_open_multipart('item/tambah_inv');?>
                <?php
                foreach($dokumen->result()as $dokumen)
					{
				?>
				<section class="content">
				  <div class="row">
				  <!-- general form elements -->
					  <div class="box box-primary">
						<div class="box-header with-border">
						  <h3 class="box-title">Inventory Detail</h3>
						</div>
						<!-- /.box-header -->
						  <div class="box-body">
							<div class="col-xs-3 form-group">
							  <label>Nomor Inventaris</label>
							  <input type="text" class="form-control" name="id_inventaris" placeholder="Nomor Inventaris" value="<?php echo $kode_inv;?>" readonly>
							  <input type="hidden" class="form-control" name="id_barang" placeholder="Nomor Item" value="<?php echo $dokumen->id_barang;?>" readonly>
							</div>
							<div class="col-xs-6 form-group">
							  <label>Deskripsi</label>
							  <input type="text" class="form-control" style="text-transform:uppercase;" name="deskripsi" value="<?php echo $dokumen->deskripsi;?>"  placeholder="Deskripsi Item" readonly>
							</div>
							
							<div class="col-xs-3 form-group">
							  <label>&nbsp;</label>
								<br><br><br>
							</div>
							
							<div class="col-xs-3 form-group">
							  <label>Jenis</label>
							  <input type="text" class="form-control" name="jenis" value="<?php echo $dokumen->jenis;?>"  placeholder="Jenis" readonly>
							</div>
							<div class="col-xs-3 form-group">
							  <label>Satuan</label>
							  <input type="text" class="form-control" name="satuan" value="<?php echo $dokumen->satuan;?>" placeholder="Satuan" readonly>
							</div>
							
							<div class="col-xs-6 form-group">
							  <label>&nbsp;</label>
								<br><br><br>
							</div>
							
							<div class="col-xs-2 form-group">
							  <label>Jumlah</label>
							  <input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
							</div>
							<div class="col-xs-2 form-group">
							  <label>Stok Minimum</label>
							  <input type="text" class="form-control" name="stokminimum" placeholder="Stok Minimum">
							</div>
							<!-- Harga -->
							<div class="col-xs-3 form-group">
							  <label>Harga</label>
							  <div class="input-group">
							   <input type="text" class="form-control" name="harga" placeholder="Harga">
							  </div>
							</div>
							
							<div class="col-xs-5 form-group">
							  <label>&nbsp;</label>
								<br><br><br>
							</div>
							
							<div class="col-xs-3 form-group">
							  <label>Kondisi</label>
							  <select class="form-control" name="kondisi">
								<option>Normal</option>
								<option>Bekas Pakai</option>
								<option>Bekas Perbaikan</option>
							  </select>
							</div>
							<!-- Gudang -->
							<div class="col-xs-3 form-group">
							  <label>Gudang</label>
							  <div class="input-group">
							   <input type="text" class="form-control" name="id_gudang" placeholder="Gudang">
							    <div class="input-group-addon">
								 <i class="fa fa-plus-square"></i>
								</div>
							  </div>
							</div>
							<!-- Manufaktur -->
							<div class="col-xs-7 form-group">
							  <label>Manufaktur</label>
							  <input type="text" class="form-control" style="text-transform:uppercase;" name="manufaktur" placeholder="Manufaktur"  value="<?php echo $dokumen->manufaktur;?>" readonly>
							</div>
							<!-- Grup -->
							<div class="col-xs-3 form-group">
							  <label>Grup</label>
							  <select class="form-control" name="grup"  readonly>
								<option><?php echo $dokumen->grup;?></option>
							  </select>
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