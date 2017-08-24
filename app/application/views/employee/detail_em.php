<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!--<div class="panel-heading">
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                    
                    <div style="float:left">
                    <?php echo anchor('printer/detail_em/','<i class="fa fa-print fa-fw"></i> Download Excel',array('target'=>'_blank'));?>
                    </div>
                    
                    <?php echo form_open_multipart('employee/detail_em');?>
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
							echo anchor('employee/tambah_daftar/','<i class="fa fa-plus fa-fw"></i> Employee Baru', array('class' => 'btn btn-primary btn-sm '));
							echo '&nbsp;';
							?>
						</div>
						<div class="btn-group">
							<?php
							echo anchor('printer/detail_em/','<i class="fa fa-print fa-fw"></i> Export Excel', array('target' => '_blank', 'class' => 'btn btn-primary btn-sm '));
							?>
                        </div>
						
                    <!--x-->
                </div>
                <div><?php echo '&nbsp;'; ?></div>
                <div class="dataTable_wrapper">
                
				<table class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size:12px;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Employee</th>
                                            <th>Jabatan</th>
                                            <th>Departemen</th>
											<th>Tanggal Masuk</th>
											<th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
											foreach($dokumen->result()as $dokumen)
											{
												
										?>
                                    	<tr>
                                        	<td><?php echo $dokumen->nopeg;?></td>
                                            
                                            <td>
											<?php echo anchor('employee/edit_em/'.$dokumen->nopeg, '<i class="fa fa-pencil-square fa-fw"></i>'.$dokumen->nama);?>
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
                                                                <?php echo 'Employee : '.$dokumen->nama;?>
                                                                </div>
                                                            </span>
                                                        </li>        
                                                        <li>
                                                            <?php 
															  echo anchor('employee/delete_em/'.$dokumen->nama,'Hapus', 
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
                                            <?php echo $dokumen->jabatan;?>
                                            </td>
                                            <td>
                                            <?php echo $dokumen->departemen;?>
                                            </td>
											<td>
                                            <?php echo $dokumen->tgl_masuk;?>
                                            </td>
											<td>
                                            <?php echo $dokumen->status;?>
                                            </td>
                                        </tr>
                                        <?php 
										
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