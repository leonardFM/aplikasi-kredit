<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">

      <h2>Form Pengajuan Peminjaman</h2>
      <div class="row">
      <div class="card col-lg-6 mt-3 mr-3">
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama </label>
              <input type="text" name="nama" class="form-control form-control-sm" value="<?php echo $user['nama']; ?>" readonly>
            <?= form_error('nama','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email </label>
              <input type="text" name="email" class="form-control form-control-sm" value="<?php echo $user['email']; ?>" readonly>
            <?= form_error('email','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat *</label>
              <input type="text" name="alamat" class="form-control form-control-sm" value="<?php echo $user['alamat']; ?>">
            <?= form_error('alamat','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">No telepon *</label>
              <input type="text" name="no_telepon" class="form-control form-control-sm" value="<?php echo $user['no_telepon']; ?>">
            <?= form_error('no_telepon','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">No rekening *</label>
              <input type="text" name="no_rekening" class="form-control form-control-sm" value="<?php echo $user['no_rekening']; ?>">
            <?= form_error('no_rekening','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alasan Pengajuan *</label>
              <textarea type="text" name="keterangan" class="form-control form-control-sm"><?php echo set_value('keterangan'); ?> </textarea>
            <?= form_error('keterangan','<small class="text-danger">','</small>'); ?>
            </div>
            <input type="hidden" name="bank" value="<?php echo $pinjaman['bank_id']; ?>">
            <input type="hidden" name="nominal" value="<?php echo $pinjaman['nominal']; ?>">
            <input type="hidden" name="waktu" value="<?php echo $pinjaman['waktu']; ?>">
            
            <button type="" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary btn-sm">Edit</button>
          </form>
    </div>
  </div>
  <div class="card col-lg-5 mt-3">
    <div class="card-body">
      <h2>Rincian Peminjaman</h2>
      <hr>
      <h2>Bank <b> <?php echo $pinjaman['nama_bank']; ?></b></h2>
      <h3>Rp.<?php echo $pinjaman['nominal']; ?></h3>
      <h3><?php echo $pinjaman['waktu']; ?> Bulan</h3>
      <td>Rp. <?php echo round($pinjaman['nominal'] / $pinjaman['waktu'],2);  ?> / bulan</td>
      <br><br>
      <h2>Persyaratan</h2>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. </p>
    </div>
  </div>
  </div>
</div>
