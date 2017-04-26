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
											<input type="text" class="form-control pull-left" name="jumlah" placeholder="Jumlah" maxlength="3" required style="width:30%">&nbsp;&nbsp;&nbsp;
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
											<input type="text" class="form-control pull-left" name="satuan" placeholder="Satuan" style="width:80%" readonly>
											<?php 
											echo anchor('satuan/detail_satuan/','<i class="fa fa-plus-square"></i>', array('class' => 'btn btn-primary btn-sm pull-left'));
											?>
                                            <!--<select class="form-control" name="satuan">
                                                <option value="Buah">Buah
                                                </option>
                                                <option value="Lusin">Lusin
                                                </option>
                                            </select>-->
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
											<td>
											Gudang : <br>
											<input type="text" class="form-control pull-left" name="gudang" placeholder="Gudang" style="width:60%" readonly>
											<?php 
											echo anchor('gudang/detail_gudang/','<i class="fa fa-plus-square"></i>', array('class' => 'btn btn-primary btn-sm pull-left'));
											?>
											</td>          
										</tr>
										<tr>
											<td>
											Harga : <br>
											<input type="text" class="form-control" name="harga" placeholder="Rp. 0">
											</td>
											<td>
											Supplier : <br>
											<input type="text" class="form-control pull-left" name="supplier" placeholder="Supplier" style="width:70%" readonly>
											<button type="button" class="btn btn-info btn-lg fa fa-plus-square fa-lg" data-toggle="modal" data-target="#modalSupplier"></button>
											<!-------Modal Supplier---------->
											<div class="modal fade" id="modalSupplier" role="dialog">
											  <div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header" style="padding:20px 50px;">
													  <button type="button" class="close" data-dismiss="modal">&times;</button>
													  <h4><span class="fa fa-users fa-lg"></span> List Supplier</h4>
													</div>
													<div class="modal-body" style="padding:40px 50px;">
													  <form role="form">
														<div class="form-group">
														  <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
														  <input type="text" class="form-control" id="usrname" placeholder="Enter email">
														</div>
														<div class="form-group">
														  <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
														  <input type="text" class="form-control" id="psw" placeholder="Enter password">
														</div>
													  </form>
													</div>
													<div class="modal-footer">
													  <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
													  <button type="submit" class="btn btn-success btn-default pull-right"><span class="glyphicon glyphicon-off"></span> OK</button>
													</div>
												  </div><!-- /.modal-content -->
											  </div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
											
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