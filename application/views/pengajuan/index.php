<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
    <h2>Daftar Pengajuan</h2>
      <div class="card mt-3">
        <div class="card-body">
          <table id="table_id" class="table table-bordered">
              <thead>
                  <tr>
                      <th class="table-utama" >No</th>
                      <th class="table-utama" >Nama</th>
                      <th class="table-utama" >Alamat</th>
                      <th class="table-utama" >No Telepon</th>
                      <th class="table-utama">Bank</th>
                      <th class="table-utama">Nominal</th>
                      <th class="table-utama">Waktu</th>
                      <th class="table-utama">Status</th>
                      <th class="table-utama" >Action</th>
                  </tr>
              </thead>
              <tbody>
                <?php $i=1; foreach ($pengajuan as $row) : ?>
                  <tr>
                      <td class="table-utama"><?php echo $i++; ?></td>
                      <td class="table-utama"><?php echo $row['nama']; ?></td>
                      <td class="table-utama"><?php echo $row['alamat']; ?></td>
                      <td class="table-utama"><?php echo $row['no_telepon']; ?></td>
                      <td class="table-utama"><?php echo $row['nama_bank']; ?></td>
                      <td class="table-utama"><?php echo $row['nominal']; ?></td>
                      <td class="table-utama"><?php echo $row['waktu']; ?></td>
                      <td class="table-utama">
                        <?php if ($row['status'] == 1) : ?>
                          <p class="btn-success btn-sm">Disetujui</p>
                        <?php else : ?>
                          <p class="btn-warning btn-sm text-white">Pending</p>
                        <?php endif; ?>    
                      </td>
                      <td class="table-utama">
                        <a href="<?php echo base_url(); ?>pengajuanController/detail/<?php echo $row['id']; ?>" class="btn btn-primary btn-sm mr-2">Lihat</a>
                        <?php if ($row['status'] == 0) : ?>
                        	<a href="<?php echo base_url(); ?>pengajuanController/setuju/<?php echo $row['id']; ?>" class="btn btn-success btn-sm mr-2">Setuju</a>
                        <?php else : ?>	
                        	<a href="<?php echo base_url(); ?>pengajuanController/batal/<?php echo $row['id']; ?>" class="btn btn-danger btn-sm mr-2">Batal</a>
                        <?php endif; ?>
                      </td>
                  </tr>
                <?php endforeach; ?>  
              </tbody>
          </table>        
        </div>
      </div>
    </div>
  </div>
</div>
