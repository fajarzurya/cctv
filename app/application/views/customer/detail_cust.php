<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!--<div class="panel-heading">
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                    
                    <div style="float:left">
                    <?php echo anchor('printer/detail_cust/','<i class="fa fa-print fa-fw"></i> Download Excel',array('target'=>'_blank'));?>
                    </div>
                    
                    <?php echo form_open_multipart('customer/detail_cust');?>
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
							echo anchor('customer/tambah_daftar/','<i class="fa fa-plus fa-fw"></i> Pelanggan Baru', array('class' => 'btn btn-primary btn-sm '));
							?>
						</div>
						<div class="btn-group">
							<?php
							echo anchor('printer/detail_cust/','<i class="fa fa-print fa-fw"></i> Export Excel', array('target' => '_blank', 'class' => 'btn btn-primary btn-sm '));
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
											<th>Kode Pelanggan</th>
                                            <th>Pelanggan</th>
                                            <th>Alamat</th>
                                            <th>Kontak</th>
											<th>Tipe</th>
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
											<?php echo anchor('customer/edit_cust/'.$dokumen->ID_CUSTOMER, '<i class="fa fa-pencil-square fa-fw"></i>'.$dokumen->ID_CUSTOMER);?>
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
                                                                <?php echo 'Customer : '.$dokumen->CUSTOMER;?>
                                                                </div>
                                                            </span>
                                                        </li>        
                                                        <li>
                                                            <?php 
															  echo anchor('customer/delete_cust/'.$dokumen->ID_CUSTOMER,'Hapus', 
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
											<?php echo $dokumen->CUSTOMER;?>
											</td>
                                            <td>
                                            <?php 
												echo $dokumen->KECAMATAN.',&nbsp'.$dokumen->KOTA.',&nbsp'.$dokumen->PROVINSI.',&nbsp'.$dokumen->KODE_POS;?> 
                                            </td>
                                            <td>
                                            <?php echo $dokumen->HP.',&nbsp'.$dokumen->EMAIL;?>
                                            </td>
											<td>
                                            <?php 
											if($dokumen->TIPE==1)
											{
												echo "Perusahaan";
											}else if($dokumen->TIPE==2){
												echo "Perorangan";
											}
											?>
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