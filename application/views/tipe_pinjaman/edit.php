<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">

      <h2>Edit Tipe Pinjaman</h2>
      <div class="card col-lg-6 mt-3">
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Bank *</label>
              <select name="bank" class="form-control form-control-sm">
                <?php foreach ($bank as $row) : ?>  
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['bank']; ?></option>
                <?php endforeach; ?>  
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nominal  *</label>
              <input type="text" name="nominal" class="form-control form-control-sm" value="<?php echo $pinjaman['nominal']; ?>">
            <?= form_error('nominal','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Waktu/Cicilan *</label>
              <input type="text" name="waktu" class="form-control form-control-sm" value="<?php echo $pinjaman['waktu']; ?>">
            <?= form_error('waktu','<small class="text-danger">','</small>'); ?>
            </div>
            
            <button type="" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary btn-sm">Edit</button>
          </form>
    </div>
  </div>
</div>
