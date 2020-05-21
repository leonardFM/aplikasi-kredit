<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">

      <h2>Ganti password</h2>
      <div class="card col-lg-6 mt-3">
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Password Lama *</label>
              <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
              <input type="password" name="password_lama" class="form-control form-control-sm">
            <?= form_error('password_lama','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Password Baru *</label>
              <input type="password" name="password_baru" class="form-control form-control-sm">
            <?= form_error('password_baru','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Repeat Password Baru *</label>
              <input type="password" name="conf_password_baru" class="form-control form-control-sm" >
            <?= form_error('conf_password_baru','<small class="text-danger">','</small>'); ?>
            </div>
            
            <button type="" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary btn-sm">Ganti</button>
          </form>
    </div>
  </div>
</div>
