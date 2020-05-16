<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
    <h2>Daftar Bisnis</h2>
      <div class="card mt-3">
        <div class="card-body">
          <table id="table_id" class="table table-bordered">
              <thead>
                  <tr>
                      <th class="table-utama" >No</th>
                      <th class="table-utama" >Bank</th>
                      <th class="table-utama">Nominal</th>
                      <th class="table-utama" >Cicilan</th>
                      <th class="">Pembayaran Perbulan </th>
                      <th class="table-utama" >Action</th>
                  </tr>
              </thead>
              <tbody>
                <?php $i=1; foreach ($pinjaman as $row) : ?>
                <?php if ($row['nominal'] > 100000000) : ?>
                  <tr>
                      <td class="table-utama"><?php echo $i++; ?></td>
                      <td class="">Bank <?php echo $row['nama_bank']; ?></td>
                      <td class="table-utama">Rp. <?php echo $row['nominal']; ?></td>
                      <td class="table-utama"><?php echo $row['waktu']; ?> Bulan</td>
                      <td class="table-utama">Rp. <?php echo round($row['nominal'] / $row['waktu'],2);  ?> /bulan</td>
                      <td class="table-utama">
                        <a href="<?php echo base_url(); ?>pengajuanController/form/<?php echo $row['id']; ?>" class="btn btn-success btn-sm mr-2"><i class="fas fa-check-circle mr-1"></i>Pilih</a>
                        <a href="<?php echo base_url(); ?>nasabahController/detail/<?php echo $row['id']; ?>" class="btn btn-warning text-white btn-sm"><i class="fas fa-info-circle mr-1"></i>Info</a>
                      </td>
                  </tr>
                <?php endif ?>  
                <?php endforeach; ?>  
              </tbody>
          </table>        
        </div>
      </div>
    </div>
  </div>
</div>
