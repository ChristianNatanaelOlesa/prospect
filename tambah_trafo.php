


<div class="box">

	<header>
		<h5>Tambah Barang Dari Erasoft</h5>
		
	</header>
		<div class="body">
			<form method="post" action="" class="form-horizontal" name='frmParent'>		
			
			<div class="form-group">
							<label class="control-label col-lg-4">KODE BARANG</label>
							<div class="col-lg-4">															
							<input  type="text"  name="kode_barang" id ="kode_barang" autofocus  class="form-control" readonly required />	
							<a href="javascript:void(0);" NAME="My Window Name" title=" My title here "
							onClick='javascript:window.open("pop.php","Ratting",
							"width=950,height=170,left=150,top=200,toolbar=1,status=1,");'> Klik ini : Cari barang Erasoft </a>
							</div>
						 
						   <div class="col-lg-4">	
						   <input type="submit" name="tpp" value="DETAIL" class="form-control" />    									
						   </div>		
				
			</div>	
			
			</form>				
			
			<form action='' method="post" class="form-horizontal" name='koveng'>		
			<div class="form-group">
							<label class="control-label col-lg-4">NAMA BARANG</label>
							<div class="col-lg-4">															
							<input  type="text" name="barang" id ="barang" value ="<?php echo $nama;?>""autofocus required class="form-control" />									 	
							</div>
							<div class="col-lg-4">	
							
							<input  type="text" name="kode" id="kode" value ="<?php echo $kode;?>" autofocus readonly class="form-control" />						
											 	
							</div>
						   
			</div>	
			
			<div class="form-group">
							<label class="control-label col-lg-4">NAMA BARANG 2</label>
							<div class="col-lg-4">															
							<input  type="text" name="barang2" id ="barang2" value ="<?php echo $nama2;?>" autofocus readonly  class="form-control" />									 	
							</div>
							<div class="col-lg-4">															
							<input  type="text" name="barang3" id ="barang3" value ="<?php echo $nama3;?>" autofocus readonly class="form-control" />									 	
							</div>
						   
			</div>	
			
																							
			<div class="form-group">
							<label class="control-label col-lg-4">QTY</label>
							<div class="col-lg-4">							 
							 <input type="number" name="qty"  id="ex" autofocus required class="form-control" placeholder="qty" onkeyup="copytext();" /> 
								
							</div>
							<div class="col-lg-4">								 
							 <input hidden type="text" name="qty1" id="qty1"  autofocus   class="form-control" placeholder="Qty" />
							
							</div>
			</div>			
			<div class="form-group">
							<label class="control-label col-lg-4">Unit</label>
							<div class="col-lg-4">
							 <input hidden type="text" name="unit" autofocus value ="<?php echo $sat;?>"  class="form-control" value="<?php echo $data["STN"];?>" placeholder="UNIT"readonly  />
								
							</div>
							<div class="col-lg-4">								 
							 <input hidden type="text" name="id_head" autofocus  class="form-control" value="<?php echo $editDb["id"];?>" readonly />
							
							</div>
			</div>			
			

			
			<div class="form-group">
							<label class="control-label col-lg-4">HARGA</label>
							<div class="col-lg-4">
								 <input type="number" name="harga" id="harga" autofocus required class="form-control" placeholder="harga" onkeyup="copyharga();" />
								
							</div>
							<div class="col-lg-4">
								  <input hidden type="text" name="harga1" id="harga1"   class="form-control" placeholder="Harga"readonly  />								
							</div>
			</div>	
				
		
			<div class="form-group">
							<label class="control-label col-lg-4">NOMOR MEMO</label>
							<div class="col-lg-4">
								 <input type="text" name="nomemo" autofocus  class="form-control" value="<?php echo $editDb["nomemo"];?>" readonly />
							</div>
							<div class="col-lg-4">								 
								 <input type="text" name="catatan" autofocus  class="form-control" placeholder="Catatan" />
							</div>
			</div>
			
			
						
			<div class="form-actions no-margin-bottom" style="text-align:center;">
			<input type="submit" name="pasien" value="SIMPAN" class="btn btn-primary" />  <a href="?menu=edit_tambah_data_memo&aksi=edit&nmr=<?php echo $editDb['nomemo'];?>"  class="btn btn-primary">  Batal</a>
																							
			</div>		
			

			</form>
			
		
	</div>
</div>
<script>
document.getElementById("tombol_form").
addEventListener("click", tampilkan_nilai_form);
  
function tampilkan_nilai_form(){
    var nilai_form=document.getElementById("kode_barang").value;
    document.getElementById("hasil").innerHTML=nilai_form;
}
</script>

<script type="text/javascript">   
<?php echo $jsArray; ?> 
function changeValue(no_pasien){ 
document.getElementById('nm').value = dtMhs[no_pasien].nama; 
document.getElementById('jrsn').value = dtMhs[no_pasien].jrsn; 
 }; 
 
 
function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
 
function copytext()
 {
document.getElementById('qty1').value = formatRupiah(document.getElementById('ex').value);
}

function copyharga()
 {
document.getElementById('harga1').value = formatRupiah(document.getElementById('harga').value);
}
</script> 

<script src="main.js"></script>

