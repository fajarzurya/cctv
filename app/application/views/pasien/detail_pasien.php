<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                    
                    <div style="float:left">
                    <?php echo anchor('printer/detail_pasien/'.$th, '<i class="fa fa-print fa-fw"></i> Download Excel',array('target'=>'_blank'));?>
                    </div>
                    
                    <?php echo form_open_multipart('pasien/detail_pasien');?>
                    <div style="float:right">
                    <select class="form-control" name="tahun" style="float:left;width:70%">
                        <option value="<?php echo $th;?>" selected="selected">Th. <?php echo $th;?></option>
                        <?php
                        for($i=2016;$i<=2025;$i++){
						?>
                        <option value="<?php echo $i;?>"><?php echo $i?></option>
                    	<?php
						}
						?>
                    </select><input type="submit" class="btn btn-primary btn-sm" style="float:left" value="Cari" />
                    
                    </div>
                    
                    </div>
                    <!-- /.table-responsive -->
                    
                </div>
            </div>
            
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                
				<table class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size:12px;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Tanggal</th>
                                            <th>Usia</th>
                                            <th>Keluhan</th>
                                            <th>Obat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
											$no = 1;
											foreach($dokumen->result()as $dokumen)
											{
												
										?>
                                    	<tr>
                                        	<td><?php echo $no;?></td>
                                            
                                            <td>
											<?php echo anchor('pasien/edit_pasien/'.$dokumen->id, '<i class="fa fa-pencil-square fa-fw"></i>'.$dokumen->nama);?>
                                            <span style="float:right;">
                                            <ul style="list-style:none">
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                        <i class="fa fa-times fa-fw"></i>  <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-messages">
                                                        <li style="background:#C00;color:#FFF;min-width:400px;padding-left:10px">
                                                        	<span>
                                                                <div>
                                                                    <strong>Delete</strong>
                                                                </div>
                                                                <div >
                                                                <?php echo 'Pasien : '.$dokumen->nama;?>
                                                                </div>
                                                            </span>
                                                        </li>        
                                                        <li>
                                                            <?php 
															  echo anchor('pasien/delete_pasien/'.$dokumen->id,'Hapus', 
															  array(
																	'class' => 'btn2 btn2-warning btn2-small fleft dropdown-toggle'
																	)
																	);
															?>
                                                        </li>                                                
                                                    </ul>
                                                    <!-- /.dropdown-messages -->
                                                </li>
                                        	</ul>
                                            </span>
                                           
                                            </td>
                                            
                                            <td>
                                            <?php echo $dokumen->kelamin;?>
                                            </td>
                                            <td>
                                            <?php echo $dokumen->alamat;?>
                                            </td>
                                            <td>
                                            <?php echo $dokumen->usia;?>
                                            </td>
                                            <td>
                                            <?php echo $dokumen->tanggal;?>
                                            </td>
                                            <td>
											<?php echo $dokumen->keluhan;?>
                                            </td>
                                            <td>
                                            <?php echo $dokumen->obat;?>
                                            </td>
                                            
                                        </tr>
                                        <?php 
										$no++;
										
										}
										?>
                                    </tbody>
                   </table>
                
                </div>
                <!-- /.table-responsive -->
                
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>