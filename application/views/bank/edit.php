<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">

      <h2>Edit Bank</h2>
      <div class="card col-lg-6 mt-3">
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Bank *</label>
              <input type="text" name="nama" class="form-control form-control-sm" value="<?php echo $bank['bank']; ?>">
            <?= form_error('nama','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" value="<?php echo $bank['bank']; ?>">Keterangan <small style="font-size: 9px;">( Tidak wajib )</small></label>
              <textarea type="text" name="keterangan" class="form-control form-control-sm"><?php echo $bank['keterangan']; ?></textarea>
            </div>
            <?= form_error('keterangan','<small class="text-danger">','</small>'); ?>
            <button type="" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
          </form>
    </div>
  </div>
</div>
