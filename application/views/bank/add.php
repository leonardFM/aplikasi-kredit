<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">

      <h2>Tambah Bank</h2>
      <div class="card col-lg-6 mt-3">
        <div class="card-body">
          <form action="<?php echo base_url('bankController/add'); ?>" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Bank *</label>
              <input type="text" name="nama" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
            <?= form_error('nama','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Keterangan <small style="font-size: 9px;">( Tidak wajib )</small></label>
              <textarea type="text" name="keterangan" class="form-control form-control-sm"></textarea>
            </div>
            <?= form_error('keterangan','<small class="text-danger">','</small>'); ?>
            <button type="" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
          </form>
    </div>
  </div>
</div>
