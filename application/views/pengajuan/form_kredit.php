<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">

      <h2>Form Pengajuan</h2>
      <div class="row">
      <div class="card col-lg-6 mt-3 mr-3">
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama *</label>
              <input type="text" name="nama" class="form-control form-control-sm" value="<?php echo $user['nama']; ?>">
            <?= form_error('nama','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email *</label>
              <input type="text" name="email" class="form-control form-control-sm" value="<?php echo $user['email']; ?>">
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
  <div class="card col-lg-4 mt-3">
    <div class="card-body">
      <h2><?php echo $pinjaman['bank_id']; ?></h2>
      <p><?php echo $pinjaman['nominal']; ?></p>
      <p><?php echo $pinjaman['waktu']; ?></p>
    </div>
  </div>
  </div>
</div>
