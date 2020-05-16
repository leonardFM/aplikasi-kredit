<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
    <h2>Tipe Pinjaman</h2>
      <div class="card mt-3">
        <div class="card-body">
          <a href="<?php echo base_url('tipePinjamanController/add'); ?>"class="btn btn-primary btn-sm mb-3" style="float: right;"><i class="fas fa-user-plus mr-2"></i>Tambah</a>
          <table id="table_id" class="table table-bordered">
              <thead>
                  <tr>
                      <th class="table-utama" >No</th>
                      <th class="table-utama" >Bank</th>
                      <th class="table-utama">Nominal</th>
                      <th class="table-utama" >Waktu/Cicilan</th>
                      <th class="table-utama">Perbulan</th>
                      <th class="table-utama" style="width: 130px;">Action</th>
                  </tr>
              </thead>
              <tbody>
                <?php $i=1; foreach ($pinjaman as $row) : ?>
                  <tr>
                      <td class="table-utama"><?php echo $i++; ?></td>
                      <td class="">Bank <?php echo $row['nama_bank']; ?></td>
                      <td class="table-utama">Rp. <?php echo $row['nominal']; ?></td>
                      <td class="table-utama"><?php echo $row['waktu']; ?> Bulan</td>
                      <td class="">Rp. <?php echo round($row['nominal'] / $row['waktu'],2);  ?> / bulan</td>
                      <td class="table-utama">
                        <a href="<?php echo base_url(); ?>tipePinjamanController/edit/<?php echo $row['id']; ?>" class="btn btn-success btn-sm mr-2"><i class="fas fa-user-edit"></i></a>
                        <a href="<?php echo base_url(); ?>tipePinjamanController/detail/<?php echo $row['id']; ?>" class="btn btn-primary btn-sm mr-2"><i class="fas fa-info-circle"></i></a>
                        <a href="<?php echo base_url(); ?>tipePinjamanController/delete/<?php echo $row['id']; ?>" class="btn btn-danger btn-sm mr-2"><i class="fas fa-trash"></i></a>
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
