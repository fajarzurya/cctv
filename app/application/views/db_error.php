<!DOCTYPE html>
<html lang="en">
<head>
<title>Perintah Ditolak</title>
   <link href="<?php echo base_url();?>asset/css/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
   <link href="<?php echo base_url();?>asset/css/DT_bootstrap.css" rel="stylesheet" media="screen">
   <link href="<?php echo base_url();?>asset/css/btnx.css" rel="stylesheet" media="screen">
   <link href="<?php echo base_url();?>asset/css/moris.css" rel="stylesheet" media="screen">
   <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<style>
	body{
		
		}
	h2{
		font-family:Arial, Helvetica, sans-serif;
		font-size:30px;		
		text-align:left;
		letter-spacing:0px;
		margin:0px;
		color:#F30
		}
	img{
		max-width:80%;
		}
</style>

<script>
	function goBack()
	  {
	  window.history.go(-1)
	  }
</script>
</head>
<body>
<center>
<div style="margin-left:8%;width:100%;margin-top:5%">
	<div class="row-fluid">
    
       <div class="panel50kr" style="padding:10px;float:left;width:40%">
       		<div style="padding:2px;text-align:left">
            <h2>Perintah ditolak</h2>
            <span style="color:#666;font-size:12px;margin-top:-20px;">Perintah anda tidak dapat diterima oleh sistem.</span>
            <br><br><br>
            </div>
            <div class="clear"></div>
            <div style="padding:10px;text-align:left;">
                <span style="margin-bottom:10px;">Kemungkinan :</span>
                <br><br>
                <ol>
					<li>Ada data lain yang terkait dengan data yang akan anda hapus.</li>
                </ol>
            </div>
            <div class="clear"></div>
            <div style="padding:5px;text-align:left;font-size:12px;">
            <br>
            * Jika menurut anda system yang melakukan kesalahan mohon untuk mengisi pesan di bawah ini
            <br>
            <?php echo form_open('insert_koment');?> 
            <input type="hidden" name="nama" value="<?php echo $this->session->userdata('nama')?>">
            <input type="hidden" name="id" value="<?php echo $this->session->userdata('user_id')?>">
            <textarea class="span12" style="min-height:150px;max-height:150px;" name="keterangan">
            </textarea>
            <br>
            <input type="reset" class="btn2 btn2-inverse btn2-small fleft" value="Kembali" style="float:left" onclick="goBack()" />
            <input type="submit" class="btn2 btn2-warning btn2-small" value="Kirim" style="float:left"/>
            <?php echo form_close(); ?>
            </div>
       </div>
       <div class="panel50kr" style="padding:10px;float:left;width:40%;">
       		<div style="padding:10px;"></div>
            
            <div class="clear"></div>
            
            <div style="padding:5px;">
            	<img src="<?php echo base_url();?>asset/images/detec.jpg" alt="under construction"/>
            </div>
            
            <div class="clear"></div>
            
            <div style="padding:10px;"></div>
      
       </div>
       
    </div>
</div>
</center>
</body>
</html>

