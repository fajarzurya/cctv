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
				<table class="table" id="dataTables-example" style="font-size:12px;" border='0'>
                                    
                                    <tbody>
 
                                    	<tr>
                                        	<td colspan="2">
                                            Deskripsi :<br> 
                                            <input type="hidden" class="form-control" name="id" placeholder="id" value="<?php echo $dokumen->id;?>" maxlength="17" required>
                                            <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="<?php echo $dokumen->deskripsi;?>" maxlength="17" required>
                                            </td>
											<td>
											Quantity : <br>
											<input type="text" class="form-control pull-left" name="jumlah" placeholder="Jumlah" maxlength="3" required style="width:30%" value="<?php echo $dokumen->jumlah;?>">&nbsp;&nbsp;&nbsp;
											<input type="checkbox" name="grup" checked> Material Utama ?
											</td>
                                        	<td rowspan="4" >
                                                Preview Item : <br>
                                            	<textarea style="width:100%" maxlength="1000" ></textarea>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                        	<td>
                                            Satuan : <br>
                                            <input type="text" class="form-control pull-left" name="satuan" placeholder="Satuan" style="width:84%" value="<?php echo $dokumen->satuan;?>" readonly>
											<?php 
											echo anchor('satuan/detail_satuan/','<i class="fa fa-plus-square"></i>', array('class' => 'btn btn-primary btn-sm pull-left'));
											?>
                                            </td>
											<td>
											Kondisi :
											<select class="form-control" name="kondisi">
                                                <option value="<?php echo $dokumen->kondisi;?>" selected="selected"></option>
												<option value="Baru">Baru
                                                </option>
                                                <option value="Ex-Pakai">Ex-Pakai
                                                </option>
                                            </select>
											</td>
											<td>
											Gudang : <br>
											<input type="text" class="form-control pull-left" name="gudang" placeholder="Gudang" style="width:60%" value="<?php echo $dokumen->id_gudang;?>" readonly>
											<?php 
											echo anchor('gudang/detail_gudang/','<i class="fa fa-plus-square"></i>', array('class' => 'btn btn-primary btn-sm pull-left'));
											?>
											</td>                                            
                                        </tr>
										<tr>
											<td>
											Harga : <br>
											<input type="text" class="form-control" name="harga" placeholder="Rp. 0" value="<?php echo $dokumen->harga;?>">
											</td>
											<td>
											Supplier : <br>
											<input type="text" class="form-control pull-left" name="supplier" placeholder="Supplier" style="width:60%" readonly value="<?php echo $dokumen->id_gudang;?>">
											<?php 
											echo anchor('supplier/detail_supplier/','<i class="fa fa-plus-square"></i>', array('class' => 'btn btn-primary btn-sm pull-left'));
											?>
											</td>
										</tr>
                                        <tr>
                                        	<td colspan="3">
                                               
                                               <div class="form-group">
                                                    <input type="submit" class="btn btn-primary btn-sm" value="Update" />
                                                    <input type="button" onclick="location.href='<?php echo base_url(); ?>index.php/item/detail_item'" class="btn btn-primary btn-sm" value="Cancel" />
                                               </div>
                                            </td>
                                        </tr>
                                        
                                        
                                    </tbody>
                   </table>
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