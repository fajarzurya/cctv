<?php
   error_reporting(E_ALL ^ E_DEPRECATED);
?>
<div class="container-fluid" style="margin-top:65px;position:relative;width:110%;margin-left:-5%">
<div class="row-fluid">

<div class="span12" style="background:#FFF;border-left:1px solid #06C;border-right:1px solid #06C;padding:25px;">   
      <div class="span5">
		<h3 class="gn-icon gn-icon-surat fleft">
        	Surat Masuk&nbsp;
        </h3>
       
        <?php 
		echo anchor('#','+', 
		array(
			  'class' => 'btn2 fleft btn2-mini btn2-primary',
			  'data-toggle' => 'modal',
			  'data-target' => '#myModal'
			  ));
		?>
    
	  </div>
      <hr style="margin:0px;margin-bottom:-8px;"/>
      
      <div class="clear"></div>
      
      <div class="container-fluid" style="margin-top:1%;position:relative;width:100%">
	  <div class="row-fluid ">
      <div class="span12" style="min-height:500px;padding:5px;overflow:hidden">
      <section id="flip-scroll">
      <table cellpadding="0" cellspacing="0" border="0" id="example" class="table table-striped table-bordered table-hover "  style="margin-left:13px;margin-top:10px;width:98%">
      <thead class="cf" >
          <tr style="position:relative;z-index:2;min-width:95px;text-align:left">
              <th >No</th>
              <th >No.Agenda</th>
              <th >No.Surat</th>
              <th >Tgl.Surat</th>
              <th >Tgl.Terima</th>
              <th >Pengirim</th>
              <th >Disposisi</th>
              <th >Perihal</th>
          </tr>
      </thead>
      <tbody style="position:relative;z-index:1">
      <?php
          $no = 1;
          foreach($data_surat->result()as $data_surat)
          {
      ?>
          <tr
          	  class="popedit" 
              style="cursor:pointer;" 
              data-toggle="modal" 
              data-target="#editModal" 
              data-id_up="<?php echo $data_surat->ID_SURAT;?>" 
              data-delete_up="home/delete_surat/<?php echo $data_surat->ID_SURAT;?>" 
              data-print_up="pdf/buatpdf/<?php echo $data_surat->ID_SURAT;?>" 
              data-disposisi_up="home/tambah_disposisi/<?php echo $data_surat->ID_SURAT;?>" 
              data-nomor_agenda="<?php echo $data_surat->NOMOR_AGENDA;?>" 
              data-tgl_penerimaan="<?php echo $data_surat->TGL_PENERIMAAN;?>" 
              data-nomor="<?php echo $data_surat->NOMOR;?>" 
              data-tgl_surat="<?php echo $data_surat->TGL_SURAT;?>" 
              data-dari="<?php echo $data_surat->DARI;?>" 
              data-perihal="<?php echo $data_surat->PERIHAL;?>" 
              data-sifat_surat="<?php echo $data_surat->SIFAT_SURAT;?>" 
              data-id_sifat="<?php echo $data_surat->ID_SIFAT_SURAT;?>" 
              data-diteruskan_ke="diteruskan_ke" 
              data-id_diteruskan="id_diteruskan" 
              data-lampiran="<?php echo base_url(); ?>asset/files/<?php echo $data_surat->LAMPIRAN;?>"
              data-lampiran2="<?php echo $data_surat->LAMPIRAN;?>"
              
          >
          
              <td style="width:5%;max-width:5%;"><?php echo $no;?></td>
              <td style="width:6%;max-width:6%;"><?php echo $data_surat->NOMOR_AGENDA;?>
			 	  <?php $idd = $data_surat->ID_DISPOSISI;?>
              </td>
              <td style="width:10%;max-width:10%;"><?php echo $data_surat->NOMOR;?></td>
              <td style="width:10%;max-width:10%;"><?php echo $data_surat->TGL_SURAT;?></td>
              <td style="width:10%;max-width:10%;"><?php echo $data_surat->TGL_PENERIMAAN;?></td>
              <td style="width:10%;max-width:10%;"><?php echo $data_surat->DARI;?></td>
              <td style="width:15%;overflow:hidden;text-align:left">
              	<div style="overflow-y:hidden;min-height:120px;width:180px">
			  	<?php 
				
				    $ids = $data_surat->ID_SURAT;
					$connection = mysql_connect("172.16.30.127", "root", "r4h4514@#!");
					mysql_select_db("surat_masuk");
					$sql = "SELECT *,JABATAN FROM DISPOSISI left join JABATAN on DISPOSISI.ID_JABATAN=JABATAN.ID_JABATAN where ID_SURAT=".$ids;
					$result = mysql_query($sql);
					
					?>
                    <ol style="margin-left:16px;padding-right:18px;">
                    <?php
					
					while($row = mysql_fetch_array($result)){
						
						if($idd==$row['ID_DISPOSISI']){
							//$sty = "label label-info";
							$sty = "background:#06F;color:#fff;padding:3px;padding-left:8px;padding-right:8px";
							}
						else{
							$sty = " ";
							}
							
						echo "<li>&nbsp;<span class='".$sty."' style='margin-left:2px;".$sty."'>".$row['JABATAN']."</span><br>.: ".$row['NAMA']."</li>";
						
					}
					?>
					</ol>
					<?php				 
					mysql_close($connection);
					
				?>
                </div>
              </td>
              <td style="width:15%;max-width:15%;"><?php echo $data_surat->PERIHAL;?></td>
          </tr>
      <?php 
          $no++;
          } 
		  
      ?>   
      </tbody>
      </table>
      </section>
      </div>
      
 
      </div>
      
</div>
</div>
</div>

<!---tambah surat---->
      <div id="myModal" class="modal fade block-header" tabindex="-10" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:45px;padding-bottom:10px;height:400px auto;display:none;" >
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="judul_pjbs">
                <h5>Tambah Surat</h5>
            </div>
          </div>
          <div class="modal-body"  style="min-height:450px;">
              <div class="fleft scrollbar" id="style-3" style="min-height:390px;width:90%;padding-right:10px;">
              	<!--<form method="post" action="home/insert_surat" enctype="multipart/form-data">-->
                  <?php 
				  //echo form_open('home/insert_surat', array( 'enctype' => 'multipart/form-data'));
				  echo form_open_multipart('home/insert_surat');
				  $id_surat = $id_surat->row();
				  $maxid = $id_surat->MAXID_SURAT + 1;
				  ?>
                  
                  <div class="span2">No.Agenda</div>
                  <div class="span4">
                  <input type="hidden" name="id" class="span4" value="<?php echo $maxid;?>" required/>
                  <!--<input type="text" name="noagenda" placeholder="No.Agenda" class="span4" required/>-->
                  <select name="noagenda" class="span3">
                  	<option value="PJB">PJB</option>
                    <option value="PLN">PLN</option>
                    <option value="EKSTERN">EKSTERN</option>
                    <option value="INTERN_PJBS">INTERN PJBS</option>
                    <option value="DEKOM_PJBS">DEKOM PJBS</option>
                  </select>
                  </div>
                  <div class="clear" style="margin-bottom:10px;"></div>
                  
                  <div class="span2">Tgl.Penerimaan</div>
                  <div class="span4">
                  <input type="text" name="tglterima" id="inputDatepic" value="<?php echo date('Y-m-d');?>" placeholder="Tanggal Penerimaan" class="span4 inputDatepic" required/>
                  </div>
                  <div class="clear" style="margin-bottom:10px;"></div>
                  
                  <div class="span2">Nomor</div>
                  <div class="span4">
                  <input type="text"  name="nomor"  placeholder="Nomor" class="span4" required/>
                  </div>
                  <div class="clear" style="margin-bottom:10px;"></div>
                  
                  <div class="span2">Tgl.Surat</div>
                  <div class="span4">
                  <input type="text"  name="tglsurat" id="inputDatepic2" value="<?php echo date('Y-m-d');?>"  placeholder="Tanggal Surat" class="span4 inputDatepic2" required/>
                  </div>
                  <div class="clear" style="margin-bottom:10px;"></div>
                  
                  <div class="span2">Dari</div>
                  <div class="span4">
                  <input type="text"  name="dari" placeholder="Dari" class="span4" required/>
                  </div>
                  <div class="clear" style="margin-bottom:10px;"></div>
                  
                  <div class="span2">Perihal</div>
                  <div class="span4">
                  <textarea name="perihal" class="span4" maxlength="150" required></textarea>
                  </div>
                  <div class="clear" style="margin-bottom:10px;"></div>
                  
                  <div class="span2">Sifat Surat</div>
                  <div class="span4">
                  <select  name="sifatsurat" class="span3">
                      	<?php
							foreach($sifat_surat->result()as $sifat_surat)
							{
						?>
							<option value="<?php echo $sifat_surat->ID_SIFAT_SURAT;?>"><?php echo $sifat_surat->SIFAT_SURAT;?></option>
						<?php
							}
						?>
                  </select>
                  </div>
                  
                  <div class="clear" style="margin-bottom:10px;"></div>
                  
                  <div class="span2">Lampiran</div>
                  <div class="span4">
                      <input type="file" name="lampiran"/>
                      <input type="hidden" name="id_user" value="<?php  echo $this->session->userdata('user_id');?>" />
                  </div>
                  <div class="clear" style="margin-bottom:10px;"></div>
                  
                  <div class="span2"></div>
                  <div class="span4">
                  	<input class="btn2 btn2-primary" type="submit" name="go" value="Simpan" />
                  </div>
                  
                  <?php 
                  //echo form_close();
                  ?>
                  </form>
                  <br>
                  <div class="clear"></div>      
              </div>
              <div class="clear"></div>
          </div>
      </div>
<!---tambah surat---->

<!-- update --> 
<script>
	$(function(){
		  
		  $("#example").on('hover', '.popedit', function() {
					id_up = $(this).attr("data-id_up");
					delete_up = $(this).attr("data-delete_up");
					print_up = $(this).attr("data-print_up");
					disposisi_up = $(this).attr("data-disposisi_up");
					nomor_agenda = $(this).attr("data-nomor_agenda");
					tglpenerimaan = $(this).attr("data-tgl_penerimaan");
					nomor = $(this).attr("data-nomor");
					tglsurat = $(this).attr("data-tgl_surat");
					dari = $(this).attr("data-dari");
					perihal = $(this).attr("data-perihal");
					sifat_surat = $(this).attr("data-sifat_surat");
					id_sifat = $(this).attr("data-id_sifat");
					diteruskan_ke = $(this).attr("data-diteruskan_ke");
					id_diteruskan = $(this).attr("data-id_diteruskan");
					lampiran = $(this).attr("data-lampiran");
					lampiran2 = $(this).attr("data-lampiran2");
					
			})
			$('#editModal').on('show', function(){
					$("#example").on('click', '.popedit', function() {
					id_up = $(this).attr("data-id_up");
					delete_up = $(this).attr("data-delete_up");
					print_up = $(this).attr("data-print_up");
					disposisi_up = $(this).attr("data-disposisi_up");
					nomor_agenda = $(this).attr("data-nomor_agenda");
					tglpenerimaan = $(this).attr("data-tgl_penerimaan");
					nomor = $(this).attr("data-nomor");
					tglsurat = $(this).attr("data-tgl_surat");
					dari = $(this).attr("data-dari");
					perihal = $(this).attr("data-perihal");
					sifat_surat = $(this).attr("data-sifat_surat");
					id_sifat = $(this).attr("data-id_sifat");
					diteruskan_ke = $(this).attr("data-diteruskan_ke");
					id_diteruskan = $(this).attr("data-id_diteruskan");
					lampiran = $(this).attr("data-lampiran");
					lampiran2 = $(this).attr("data-lampiran2");
			})
		
		  
		  
		  
		  $(this).find('#id_up').html($('<input type="hidden" name="id" class="span3" required value="' + id_up  + '">'));
		  $(this).find('#delete_up').html($('<a href="'+ delete_up +'" >Hapus</a>'));
		  $(this).find('#print_up').html($('<a href="'+ print_up +'" target="_blank">Print</a>'));
		  $(this).find('#disposisi_up').html($('<a href="'+ disposisi_up +'" >Disposisi</a>'));
		
		  $(this).find('#nomor_agenda').html($('<input type="text" name="noagenda" placeholder="Nomor Agenda" class="span4" required value="' + nomor_agenda  + '" >'));
		  $(this).find('#tglpenerimaan').html($('<span>'+tglpenerimaan+'</span>'));
		  $(this).find('#nomor').html($('<input type="text" name="nomor" placeholder="Nomor Surat" class="span4" required value="' + nomor  + '">'));
		  $(this).find('#tglsurat').html($('<span>'+tglsurat+'</span>'));
		  $(this).find('#dari').html($('<input type="text" name="dari" placeholder="Nomor Agenda" class="span4" required value="' + dari  + '">'));
		  $(this).find('#perihal').html($('<textarea class="span4" name="perihal" maxlength="150" required>'  + perihal + '</textarea>'));
		  $(this).find('#sifat_surat').html($('<option  selected="selected" value="' + id_sifat  +'">- '+ sifat_surat +' -</option>'));
		  $(this).find('#diteruskan_ke').html($('<option  selected="selected" value="' + id_diteruskan  +'">- '+ diteruskan_ke +' -</option>'));
		  $(this).find('#lampiran').html($('<a href="'+ lampiran  + '" target="_blank">Download</a>'));
		  $(this).find('#lampiran2').html($('<span>'+ lampiran2  + '</span>'));
			
	});
});
</script>



<div id="editModal" class="modal hide fade" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true"  style="margin-top:45px;padding-bottom:10px;height:400px auto;display:none;">
    <div class="modal-header">      
      <div class="btn2-group fright" style="margin-left:5px;margin-right:5px;">
        <button data-toggle="dropdown" class="btn2 btn2-mini btn2-primary dropdown-toggle">opsi</button>
            <ul class="dropdown-menu" style="font-size:11px; text-align:left">
              <li>
                  <span style="margin-left:10px;cursor:pointer;" data-dismiss="modal" aria-hidden="true" >Batal Edit</span>
              </li>
              <li>
                  <span id="disposisi_up" style="margin-left:10px;">Disposisikan</span>
              </li>
              <li>
                  <span id="print_up" style="margin-left:10px;">Print</span>
              </li>
              <li>
                  
              </li>
              <li>
                  <span id="delete_up" style="margin-left:10px;">Hapus</span>
              </li>
            </ul>
      </div> 
      <div class="judul_pjbs">
          <h5>Edit Surat</h5>
      </div>
    </div>
    <div class="modal-body" style="min-height:450px;">
    <div class="fleft scrollbar" id="style-3" style="min-height:390px;width:90%;padding-right:10px;">
    <?php 
	echo form_open_multipart('home/update_surat');
	?>
    <span id="id_up"></span>

    <div class="span2">No.Agenda</div>
    <div class="span4">
    	<span id="nomor_agenda"></span>
    </div>
    <div class="clear" style="margin-bottom:10px;"></div>
    
    <div class="span4">Tgl.Penerimaan, <span style="font-size:10px;color:#09C">sebelumnya (<span id="tglpenerimaan"></span>)</span></div>
    <div class="span4">
    	<input type="text" id="inputDatepic3" name="tglpenerimaan" placeholder="Tanggal Penerimaan" class="span4 inputDatepic3" required value="<?php echo date('Y-m-d');?>">
    </div>
    <div class="clear" style="margin-bottom:10px;"></div>
    
    <div class="span2">Nomor</div>
    <div class="span4">
    	<span id="nomor"></span>
    </div>
    <div class="clear" style="margin-bottom:10px;"></div>
    
    <div class="span4">Tgl.Surat, <span style="font-size:10px;color:#09C">sebelumnya (<span id="tglsurat"></span>)</span></div>
    <div class="span4">
    	<input type="text" id="inputDatepic4" name="tglsurat" placeholder="Tanggal Surat" class="span4 inputDatepic4" required value="<?php echo date('Y-m-d');?>">
    </div>
    <div class="clear" style="margin-bottom:10px;"></div>
    
    <div class="span2">Dari</div>
    <div class="span4">
    	<span id="dari"></span>
    </div>
    <div class="clear" style="margin-bottom:10px;"></div>
    
    <div class="span2">Perihal</div>
    <div class="span4">
    	<span id="perihal"></span>
    </div>
    <div class="clear" style="margin-bottom:10px;"></div>
    
    <div class="span2">Sifat Surat</div>
    <div class="span4">
		<select name="sifatsurat" class="span3">
            <optgroup id="sifat_surat"></optgroup>
            <optgroup>
            	<?php
                	foreach($sifat_surat2->result()as $sifat_surat2)
          			{
				?>
                    <option value="<?php echo $sifat_surat2->ID_SIFAT_SURAT;?>"><?php echo $sifat_surat2->SIFAT_SURAT;?></option>
                <?php
					}
				?>
            </optgroup>
        </select>
    </div>
    <div class="clear" style="margin-bottom:10px;"></div>
    
    <div class="span4">Lampiran, 
    	<span style="font-size:10px">sebelumnya 
		<?php 
          	$lampiran2 = "<div id='lampiran2'></div>";
            if($lampiran2 != '<span></span>'){
        ?>
        		<div id="lampiran"></div>
        <?php
            }
            else{
                echo "tidak ada lampiran";
                }
        ?>
        </span>
    </div>
    <div class="span4">
    	<input type="file" name="lampiran"/>
    </div>
    <div class="clear" style="margin-bottom:10px;"></div>
    
    <div class="span2"></div>
    <div class="span4">
    	<input type="submit" value="Ubah Data" class="btn2 btn2-mini btn2-primary "/>
    </div>
    <?php 
	echo form_close();
	?>
    </div>
    </div>   
	</div>
</div>
<!-- /update --> 

</div> 
</div>  