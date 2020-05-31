<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
    	<h2>Pengajuan pinjaman Saya</h2>
    	<hr>
    	<div class="card">
		  <div class="card-body">
		  		<table id="table_id" class="table table-bordered">
	              <thead>
	                  <tr>
	                      <th class="table-utama" >No</th>
	                      <th class="table-utama" >Nama</th>
	                      <th class="table-utama">Tanggal Pengajuan</th>
	                      <th class="table-utama">Bank</th>
	                      <th class="table-utama">Nominal</th>
	                      <th class="table-utama" >Waktu/Cicilan</th>
	                      <th class="table-utama">Perbulan</th>
	                      <th class="table-utama">Status</th>
	                  </tr>
	              </thead>
	              <tbody>
	                <?php $i=1; foreach ($statusPengajuan as $row) : ?>
	                  <tr>
	                      <td class="table-utama"><?php echo $i++; ?></td>
	                      <td class="table-utama"><?php echo $row['nama']; ?></td>
	                      <td class="table-utama"><?php echo date('d F Y', $row['tgl_ajuan']); ?></td>
	                      <td class="">Bank <?php echo $row['nama_bank']; ?></td>
	                      <td class="table-utama">Rp. <?php echo $row['nominal']; ?></td>
	                      <td class="table-utama"><?php echo $row['waktu']; ?> Bulan</td>
	                      <td class="">Rp. <?php echo round($row['nominal'] / $row['waktu'],2);  ?> / bulan</td>
	                      <td class="table-utama">
	                      	<?php if ($row['status'] == 1) : ?>
	                          <p class="btn-success btn-sm">Disetujui</p>
	                        <?php else : ?>
	                          <p class="btn-warning btn-sm text-white">Pending</p>
	                        <?php endif; ?>
	                      </td>
	                  </tr>
	                <?php endforeach; ?>  
	              </tbody>
	          </table>       
		    	<a href="<?php echo base_url('userController/editProfil'); ?>" class="btn btn-success btn-sm">Edit Profil</a>
		    	<a href="" class="btn btn-warning btn-sm text-white">Info</a>
		  	</div>
		  </div>
    	
    </div>
  </div>
</div>
