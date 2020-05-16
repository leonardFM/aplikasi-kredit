<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">

      <h2>Edit Bank</h2>
      <div class="card col-lg-6 mt-3">
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Bank *</label>
              <input type="text" name="nama" class="form-control form-control-sm" value="<?php echo $nasabah['nama']; ?>">
            <?= form_error('nama','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email *</label>
              <input type="text" name="email" class="form-control form-control-sm" value="<?php echo $nasabah['email']; ?>">
            <?= form_error('email','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">No Rekening *</label>
              <input type="text" name="no_rekening" class="form-control form-control-sm" value="<?php echo $nasabah['no_rekening']; ?>">
            <?= form_error('no_telepon','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">No Telepon *</label>
              <input type="text" name="no_telepon" class="form-control form-control-sm" value="<?php echo $nasabah['no_telepon']; ?>">
            <?= form_error('no_telepon','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat *</label>
              <input type="text" name="alamat" class="form-control form-control-sm" value="<?php echo $nasabah['alamat']; ?>">
            <?= form_error('alamat','<small class="text-danger">','</small>'); ?>
            </div>
            
            <?= form_error('keterangan','<small class="text-danger">','</small>'); ?>
            <button type="" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
          </form>
    </div>
  </div>
</div>
