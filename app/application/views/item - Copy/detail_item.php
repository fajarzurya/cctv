<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                    
                    <div style="float:left">
                    <?php echo anchor('printer/detail_item/','<i class="fa fa-print fa-fw"></i> Download Excel',array('target'=>'_blank'));?>
                    </div>
                    
                    <?php echo form_open_multipart('item/detail_item');?>
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
                                            <th>Deskripsi</th>
                                            <th>Jumlah</th>
                                            <th>Satuan</th>
											<th>Gudang</th>
											<th>Kondisi</th>
											<th>Grup</th>
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
											<?php echo anchor('item/edit_item/'.$dokumen->id, '<i class="fa fa-pencil-square fa-fw"></i>'.$dokumen->deskripsi);?>
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
                                                                <?php echo 'Item : '.$dokumen->deskripsi;?>
                                                                </div>
                                                            </span>
                                                        </li>        
                                                        <li>
                                                            <?php 
															  echo anchor('item/delete_item/'.$dokumen->id,'Hapus', 
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
                                            <?php echo $dokumen->jumlah;?>
                                            </td>
                                            <td>
                                            <?php echo $dokumen->satuan;?>
                                            </td>
											<td>
                                            <?php echo $dokumen->id_gudang;?>
                                            </td>
                                            <td>
                                            <?php echo $dokumen->kondisi;?>
                                            </td>
											<td>
                                            <?php echo $dokumen->grup;?>
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