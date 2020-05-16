<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">

      <h2>Tambah Tipe Pinjaman</h2>
      <div class="card col-lg-6 mt-3">
        <div class="card-body">
          <form action="<?php echo base_url('tipePinjamanController/add'); ?>" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Bank *</label>
              <select name="bank" class="form-control form-control-sm">
                <?php foreach ($bank as $row) : ?>  
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['bank']; ?></option>
                <?php endforeach; ?>  
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nominal *</label>
              <input type="text" name="nominal" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
            <?= form_error('nominal','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">waktu/cicilan *</label>
              <input type="text" name="waktu" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
            <?= form_error('waktu','<small class="text-danger">','</small>'); ?>
            </div>
            <?= form_error('keterangan','<small class="text-danger">','</small>'); ?>
            <button type="" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
          </form>
    </div>
  </div>
</div>
