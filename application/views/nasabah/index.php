<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
    <h2>Daftar Nasabah</h2>
      <div class="card mt-3">
        <div class="card-body">
          <table id="table_id" class="table table-bordered">
              <thead>
                  <tr>
                      <th class="table-utama" >No</th>
                      <th class="table-utama" >Nama</th>
                      <th class="table-utama">Role</th>
                      <th class="table-utama" >Email</th>
                      <th class="table-utama" >Alamat</th>
                      <th class="table-utama" >No Telepon</th>
                      <th class="table-utama" >Action</th>
                  </tr>
              </thead>
              <tbody>
                <?php $i=1; foreach ($nasabah as $row) : ?>
                  <tr>
                      <td class="table-utama"><?php echo $i++; ?></td>
                      <td class="table-utama"><?php echo $row['nama']; ?></td>
                      <td class="table-utama">
                        <?php if ($row['role_id'] == 1) : ?>
                          <p class="btn-success btn-sm">Admin</p>
                        <?php else : ?>
                          <p class="btn-primary btn-sm">User</p>
                        <?php endif; ?>    
                      </td>
                      <td class="table-utama"><?php echo $row['email']; ?></td>
                      <td class="table-utama"><?php echo $row['alamat']; ?></td>
                      <td class="table-utama"><?php echo $row['no_telepon']; ?></td>
                      <td class="table-utama">
                        <a href="<?php echo base_url(); ?>nasabahController/edit/<?php echo $row['id']; ?>" class="btn btn-success btn-sm mr-2"><i class="fas fa-user-edit"></i></a>
                        <a href="<?php echo base_url(); ?>nasabahController/detail/<?php echo $row['id']; ?>" class="btn btn-primary btn-sm mr-2"><i class="fas fa-info-circle"></i></a>
                        <a href="<?php echo base_url(); ?>nasabahController/delete/<?php echo $row['id']; ?>" class="btn btn-danger btn-sm mr-2"><i class="fas fa-trash"></i></a>
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
