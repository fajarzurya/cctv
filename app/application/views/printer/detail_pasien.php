
<style>

table {
	border-collapse:collapse;
	}

table th, table td{
	border:#000 1px solid;
	border-collapse:collapse;
	padding:5px;
	text-align:left;
	}

</style>

<div><h4>Data Pasien Tahun <?php echo $th;?></h4></div>
<br>
				<table class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size:12px;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Tanggal</th>
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
                                            </td>
                                            
                                            <td>
                                            <?php echo $dokumen->kelamin;?>
                                            </td>
                                            <td>
                                            <?php echo $dokumen->alamat;?>
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