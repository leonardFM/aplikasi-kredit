<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
    	<h2>Profil Saya</h2>
    	<hr>
    	<div class="card">
		  <div class="card-body">
		  	<div class="col-lg-6">
		  		<table class="table table-bordered">
		    		<tr>
			    		<td>nama</td>
			    		<td><?php echo $user['nama']; ?></td>    			
		    		</tr>

		    		<tr>
			    		<td>Email</td>
			    		<td><?php echo $user['email']; ?></td>    			
		    		</tr>

		    		<tr>
			    		<td>Alamat</td>
			    		<td><?php echo $user['alamat']; ?></td>    			
		    		</tr>

		    		<tr>
			    		<td>No Telepon</td>
			    		<td><?php echo $user['no_telepon']; ?></td>    			
		    		</tr>

		    		<tr>
			    		<td>No Rekening</td>
			    		<td><?php echo $user['no_rekening']; ?></td>    			
		    		</tr>
		    		
		    	</table>
		    	<a href="<?php echo base_url('userController/editProfil'); ?>" class="btn btn-success btn-sm">Edit Profil</a>
		    	<a href="" class="btn btn-warning btn-sm text-white">Info</a>
		  	</div>
		  </div>
		</div>
    	
    </div>
  </div>
</div>
