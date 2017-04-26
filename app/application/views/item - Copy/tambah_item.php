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
                
                <?php echo form_open_multipart('item/tambah_daftar');?>
				<table class="table" id="dataTables-example" style="font-size:12px;">
                                    
                                    <tbody>
 
                                    	<tr>
                                        	<td colspan="2">
                                            Deskripsi :<br> 
                                            <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" maxlength="50" required>
                                            </td>
											<td>
											Quantity : <br>
											<input type="text" class="form-control" name="jumlah" placeholder="Jumlah" maxlength="3" required style="width:30%">
											</td>
											<td>
											<br>
											<input type="checkbox" name="grup" checked> Material Utama?
											</td>
                                        	<td rowspan="4" >
                                                Preview Item : <br>
                                            	<textarea style="width:100%" maxlength="1000" ></textarea>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                        	<td>
                                            Satuan : <br>
                                            <select class="form-control" name="satuan">
                                                <option value="Buah">Buah
                                                </option>
                                                <option value="Lusin">Lusin
                                                </option>
                                            </select>
                                            </td>
											<td>
											Kondisi :
											<select class="form-control" name="kondisi">
												<option value="Baru">Baru
                                                </option>
                                                <option value="Ex-Pakai">Ex-Pakai
                                                </option>
                                            </select>
											</td>
											<td colspan='2'>
											Gudang :
											<select class="form-control" name="id_gudang">
                                                <option value="Gudang Material">Gudang Material
                                                </option>
                                                <option value="Gudang Tools">Gudang Tools
                                                </option>
                                            </select>
											</td>                                            
                                        </tr>
										<tr>
											<td>
											Harga : <br>
											<input type="text" class="form-control" name="harga" placeholder="Rp. 0">
											</td>
											<td>
											Supplier : <br>
											<select class="form-control" name="id_supplier">
                                                <option value="PT">PT
                                                </option>
                                                <option value="CV">CV
                                                </option>
                                            </select>
											</td>
                                        </tr>                                     
                                        
                                        <tr>
                                        	<td colspan="3">
                                               
                                               <div class="form-group">
                                                    <input type="submit" class="btn btn-primary btn-sm" value="Simpan" />
                                                </div>
                                            
                                            </td>
                                        </tr>
                                        
                                        
                                    </tbody>
                   </table>
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