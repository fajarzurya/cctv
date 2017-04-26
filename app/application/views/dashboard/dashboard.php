
<div class="row">
<?php //-------------------?>
                <div class="col-lg-3 col-md-6">
                    <div class="panel " style="background:#069;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3" style="color:#FFF">
                                    <i class="fa fa-plus fa-2x"></i>
                                </div>
                                <div class="col-xs-12 text-right">
                                    <div style="font-size:16px;color:#FFF">
                                    <?php //echo str_replace('CHECK LIST ','',strtoupper($jenis));?>
                                     Statistik Pasien 
                                     <span>
                                        <ul style="list-style:none">
                                            <li class="dropdown">Tahun 
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#FFF">
                                                    <?php echo $th?> <i class="fa fa-caret-down"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-messages">
                                                    <?php
                                                    for($i=2016;$i<=2025;$i++){
													?>
                                                    <li>
                                                        <?php 
                                                          echo anchor('home/index/'.$i,'Data Tahun - '.$i);
                                                        ?>
                                                    </li>
                                                    <?php } ?>                                                
                                                </ul>
                                                <!-- /.dropdown-messages -->
                                            </li>
                                        </ul>
                                        </span>
                                        
                                    </div>
                                    <div>
                                    <?php
									//echo $jm1;
									?>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <div class="panel-footer" style="font-size:13px">
                        	<table style="width:100%">
                            	<tr>
                                	<td>Pria</td>
                                    <td style="text-align:right;">
                                    <?php 
									//echo $this->mastermodel->count_pasien_jk('laki-laki',$th)->num_rows();
									?>
                                    </td>
                                 </tr>
                                 <tr>
                                	<td>Wanita</td>
                                    <td style="text-align:right;">
                                    <?php 
									//echo $this->mastermodel->count_pasien_jk('perempuan',$th)->num_rows();
									?>
                                    </td>
                                 </tr>
                            </table>
                            <hr />
                            <table style="width:100%">
                                 <tr>
                                	<td>Usia 0-5</td>
                                    <td style="text-align:right;">
                                    <?php 
									/*$jml = 0;
									for($i=0;$i<=5;$i++){
										$jml = $jml + $this->mastermodel->count_pasien_um($i,$th)->num_rows();
										}
									echo $jml;
									
									*/
									?>
                                    </td>
                                 </tr>
                                 <tr>
                                	<td>Usia 6-10</td>
                                    <td style="text-align:right;">
                                    <?php 
									/*$jml = 0;
									for($i=6;$i<=10;$i++){
										$jml = $jml + $this->mastermodel->count_pasien_um($i,$th)->num_rows();
										}
									echo $jml;
									
									*/
									?>
                                    </td>
                                 </tr>
                                 <tr>
                                	<td>Usia 11-20</td>
                                    <td style="text-align:right;">
                                    <?php 
									/*$jml = 0;
									for($i=11;$i<=20;$i++){
										$jml = $jml + $this->mastermodel->count_pasien_um($i,$th)->num_rows();
										}
									echo $jml;
									
									*/
									?>
                                    </td>
                                 </tr>
                                 <tr>
                                	<td>Usia 21-30</td>
                                    <td style="text-align:right;">
                                    <?php 
									/*$jml = 0;
									for($i=21;$i<=30;$i++){
										$jml = $jml + $this->mastermodel->count_pasien_um($i,$th)->num_rows();
										}
									echo $jml;
									
									*/
									?>
                                    </td>
                                 </tr>
                                 <tr>
                                	<td>Usia 31-40</td>
                                    <td style="text-align:right;">
                                    <?php 
									/*$jml = 0;
									for($i=31;$i<=40;$i++){
										$jml = $jml + $this->mastermodel->count_pasien_um($i,$th)->num_rows();
										}
									echo $jml;
									
									*/
									?>
                                    </td>
                                 </tr>
                                 <tr>
                                	<td>Usia 41-50</td>
                                    <td style="text-align:right;">
                                    <?php 
									/*$jml = 0;
									for($i=41;$i<=50;$i++){
										$jml = $jml + $this->mastermodel->count_pasien_um($i,$th)->num_rows();
										}
									echo $jml;
									
									*/
									?>
                                    </td>
                                 </tr>
                                 <tr>
                                	<td>Usia >51</td>
                                    <td style="text-align:right;">
                                    <?php 
									/*$jml = 0;
									for($i=51;$i<=100;$i++){
										$jml = $jml + $this->mastermodel->count_pasien_um($i,$th)->num_rows();
										}
									echo $jml;
									
									*/
									?>
                                    </td>
                                 </tr>
                                 <tr>
                                	<td><br>Total Pasien</td>
                                    <td style="text-align:right;"><br>
                                    <?php 
									
									//echo $this->mastermodel->pasien($th)->num_rows();
										
									
									?>
                                    </td>
                                 </tr>
                            </table>
                            
                        </div>
                    </div>
                </div>
                
                
                <!--<div class="col-lg-3 col-md-6">
                    <div class="panel " style="background:#069;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3" style="color:#FFF">
                                    <i class="fa fa-file-text fa-2x"></i>
                                </div>
                                <div class="col-xs-12 text-right">
                                    <div style="font-size:16px;color:#FFF">
                                    Statistik Obat
                                    </div>
                                    <div>
                                    <?php
									//echo $jm1;
									?>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <div class="panel-footer" style="font-size:13px">
                        	<table style="width:100%">
                            	<tr>
                                	<th>No</th>
                                    <th>Nama Obat</th>
                                    <th style="text-align:right;">
                                    Jumlah
                                    </th>
                                    <th style="text-align:right;">Satuan</th>
                                 </tr>
                                 <tr>
                                	<td>1</td>
                                    <td>
                                    Obat 1
                                    </td>
                                    <td style="text-align:right;">
                                    100
                                    </td>
                                    <td style="text-align:right;">ml</td>
                                 </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel " style="background:#069;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3" style="color:#FFF">
                                    <i class="fa fa-file-text fa-2x"></i>
                                </div>
                                <div class="col-xs-12 text-right">
                                    <div style="font-size:16px;color:#FFF">
                                    Statistik Keuangan
                                    </div>
                                    <div>
                                    <?php
									//echo $jm1;
									?>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <div class="panel-footer" style="font-size:13px">
                        	<table style="width:100%">
                            	<tr>
                                	<td>Pengeluaran</td>
                                    <td style="text-align:right;">
                                    2.000.000
                                    </td>
                                 </tr>
                                 <tr>
                                	<td>Pemasukan</td>
                                    <td style="text-align:right;">
                                    2.000.000
                                    </td>
                                 </tr>
                            </table>
                        </div>
                    </div>
                </div>
                -->
                
<?php //-------------------?>
</div>

