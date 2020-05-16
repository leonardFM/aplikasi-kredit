<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
    	<h2>Detail Pengajuan</h2>
    	<hr>
    	<div class="card">
		  <div class="card-body">
		  	<div class="row">
		  	<div class="col-lg-6 mr-2">
		  		<table class="table ">
		    		<tr>
			    		<td>nama</td>
			    		<td>:</td>
			    		<td><?php echo $pengajuan['nama']; ?></td>    			
		    		</tr>

		    		<tr>
			    		<td>Email</td>
			    		<td>:</td>
			    		<td><?php echo $pengajuan['email']; ?></td>    			
		    		</tr>

		    		<tr>
			    		<td>Alamat</td>
			    		<td>:</td>
			    		<td><?php echo $pengajuan['alamat']; ?></td>    			
		    		</tr>

		    		<tr>
			    		<td>No Telepon</td>
			    		<td>:</td>
			    		<td><?php echo $pengajuan['no_telepon']; ?></td>    			
		    		</tr>

		    		<tr>
			    		<td>No Rekening</td>
			    		<td>:</td>
			    		<td><?php echo $pengajuan['no_rekening']; ?></td>    			
		    		</tr>


		    		<tr>
			    		<td>Bank</td>
			    		<td>:</td>
			    		<td><?php echo $pengajuan['nama_bank']; ?></td>    			
		    		</tr>

		    		<tr>
			    		<td>Nominal</td>
			    		<td>:</td>
			    		<td>Rp. <?php echo $pengajuan['nominal']; ?></td>    			
		    		</tr>

		    		<tr>
			    		<td>Waktu/Cicilan</td>
			    		<td>:</td>
			    		<td><?php echo $pengajuan['waktu']; ?> Bulan</td>    			
		    		</tr>

		    		<tr>
			    		<td>Status</td>
			    		<td>:</td>
			    		<td>
			    			<?php if ($pengajuan['status'] == 0): ?>
			    				<p class="btn btn-warning btn-sm text-white">Pending</p>
			    			<?php else : ?>
			    				<p class="btn btn-success btn-sm">Diterima</p>	
			    			<?php endif; ?>
			    		</td>    			
		    		</tr>
		    		
		    	</table>
		    	</div>

		    	<div class="col-lg">
		    		<div class="card">
					  <div class="card-body">
					    <h5 class="text-center"><b>Alasan Pengajuan</b></h5>
					    <p class="card-text"><?php echo $pengajuan['keterangan']; ?></p>
					  </div>
					</div>
		    	</div>
		    	
		  	</div>
		  </div>
		</div>
    	
    </div>
  </div>
</div>
