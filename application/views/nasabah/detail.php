<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
    <h2>Detail Nasabah</h2>
    <hr>
      <div class="card col-lg-8 mt-3">
        <div class="card-body">
        	<table class="table table-bordered">
        		<tr>
        			<td>Nama</td>
        			<td><?php echo $nasabah['nama']; ?></td>
        		</tr>
        		<tr>
        			<td>Email</td>
        			<td><?php echo $nasabah['email']; ?></td>
        		</tr>
        		<tr>
        			<td>Alamat</td>
        			<td><?php echo $nasabah['alamat']; ?></td>
        		</tr>
        		<tr>
        			<td>No Rekening</td>
        			<td><?php echo $nasabah['no_rekening']; ?></td>
        		</tr>
        		<tr>
        			<td>No Telepon</td>
        			<td><?php echo $nasabah['no_telepon']; ?></td>
        		</tr>
        	</table> 	        
        </div>
      </div>
    </div>
  </div>
</div>