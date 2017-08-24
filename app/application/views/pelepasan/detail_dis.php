<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!--<div class="panel-heading">
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                    
                    <div style="float:left">
                    <?php echo anchor('printer/detail_dis/','<i class="fa fa-print fa-fw"></i> Download Excel',array('target'=>'_blank'));?>
                    </div>
                    
                    <?php echo form_open_multipart('pelepasan/detail_dis');?>
                    </div>
                    
                    </div>
                   
                    
                </div>
            </div> -->
            
            <!-- /.panel-heading -->
            <div class="panel-body">
				<div class="box-footer clearfix">
                    <!--x-->
						<div class="btn-group">
							<?php
							//echo anchor('printer/detail_dis/','<i class="fa fa-print fa-fw"></i> Export Excel', array('target' => '_blank', 'class' => 'btn btn-primary btn-sm '));
							echo anchor('pelepasan/edit_dis/','<i class="fa fa-print fa-fw"></i> Export Excel', array('target' => '_blank', 'class' => 'btn btn-primary btn-sm '));
							?>
                        </div>
						
                    <!--x-->
                </div>
                <div><?php echo '&nbsp;'; ?></div>
                <div class="dataTable_wrapper">
                
				<table class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size:12px;">
                                    <thead>
                                        <tr>
                                            <th>Nomor Instalasi</th>
                                            <th>Deskripsi</th>
                                            <th>Pelanggan</th>
											<th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th>
                                            <th>Tanggal Pelepasan</th>
											<th>Status</th>
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
											<?php echo anchor('pelepasan/edit_em/'.$dokumen->id, '<i class="fa fa-pencil-square fa-fw"></i>'.$dokumen->emomer);?>
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
                                                                <?php echo 'em : '.$dokumen->emomer;?>
                                                                </div>
                                                            </span>
                                                        </li>        
                                                        <li>
                                                            <?php 
															  echo anchor('pelepasan/delete_em/'.$dokumen->id,'Hapus', 
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
                                            <?php echo $dokumen->alamat;?>
                                            </td>
                                            <td>
                                            <?php echo $dokumen->kontak;?>
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