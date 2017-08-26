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
											<th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
											foreach($dokumen->result()as $dokumen)
											{
												
										?>
                                    	<tr>
                                            <td>
											<?php echo anchor('pelepasan/edit_dis/'.$dokumen->id_instalasi, '<i class="fa fa-pencil-square fa-fw"></i>'.$dokumen->id_instalasi);?>
                                            </td>
                                            <td>
                                            <?php echo $dokumen->deskripsi;?>
                                            </td>
                                            <td>
                                            <?php echo $dokumen->customer;?>
                                            </td>
											<td>
                                            <?php echo $dokumen->tgl_mulai;?>
                                            </td>
											<td>
                                            <?php echo $dokumen->tgl_selesai;?>
                                            </td>
											<td>
                                            <?php 
											if($dokumen->status == 'Disetujui1'){
												echo 'Disetujui Instalasi';
											}elseif($dokumen->status == 'Disetujui2'){
												echo 'Disetujui Pelepasan';
											}
											?>
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