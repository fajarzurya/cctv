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
                
                <?php echo form_open_multipart('pasien/edit_pasien');?>
                <?php
                foreach($dokumen->result()as $dokumen)
											{
				?>
				<table class="table" id="dataTables-example" style="font-size:12px;">
                                    
                                    <tbody>
 
                                    	<tr>
                                        	<td colspan="2">
                                            KTP :<br> 
                                            <input type="hidden" class="form-control" name="id" placeholder="KTP" value="<?php echo $dokumen->id;?>" maxlength="17" required>
                                            <input type="text" class="form-control" name="ktp" placeholder="KTP" value="<?php echo $dokumen->ktp;?>" maxlength="17" required>
                                            </td>
                                            <td>
                                            Nama : <br>
                                            <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $dokumen->nama;?>" required maxlength="50">
                                            </td>
                                        	<td rowspan="3" >
                                            	<table style="width:100%">
                                            	<tr>
                                                	<td>
                                                    Alamat : <br>
                                            		<textarea name="alamat" style="width:100%" required maxlength="1000" ><?php echo $dokumen->alamat;?></textarea>
                                                    </td>
                                                    <td>
                                                    Keluhan : <br>
                                           			<textarea name="keluhan" style="width:100%" required maxlength="1000"><?php echo $dokumen->keluhan;?></textarea>
                                                    </td>
                                                    <td>
                                                    Obat : <br>
                                           			<textarea name="obat" style="width:100%" required maxlength="1000" ><?php echo $dokumen->obat;?></textarea>
                                                    </td>
                                                </tr>
                                            </table>
                                            </td>
                                            
                                        </tr>
                                        
                                        <tr>
                                        	<td colspan="2">
                                            Jenis Kelamin : <br>
                                            <select class="form-control" name="jenis_kelamin">
                                                <option value="<?php echo $dokumen->kelamin;?>" selected="selected">Terpilih <?php echo $dokumen->kelamin;?></option>
                                                <option value="laki-laki">laki-laki
                                                </option>
                                                <option value="perempuan">perempuan
                                                </option>
                                            </select>
                                            </td>
                                            <td>
                                            Usia (th) : <br>
                                            <input type="text" name="usia" class="form-control" style="width:40%" value="<?php echo $dokumen->usia;?>" placeholder="21" maxlength="2"/>
                                            </td>                                            
                                        </tr>
                                        
                                        <tr>
                                        	<td colspan="2">
                                            Tanggal Periksa (dd-MM-YYYY): <br>
                                            <input type="text" class="form-control" id="datepicker" name="date" placeholder="<?php echo date('d-M-Y');?>" value="<?php echo $dokumen->tanggal;?>" required maxlength="10" >
                                            </td>
                                            <td>
                                            Jam Periksa (Jam:Menit) : <br>
                                            <input type="text" name="jam" class="form-control" style="width:40%" placeholder="<?php echo date('h:m');?>" maxlength="5" value="<?php echo $dokumen->jam;?>">
                                            </td>                                            
                                        </tr>                                       
                                        
                                        <tr>
                                        	<td colspan="4">
                                               
                                               <div class="form-group">
                                                    <input type="submit" class="btn btn-primary btn-sm" value="Simpan" />
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