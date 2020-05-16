<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
    <h2>Master Bank</h2>
      <div class="card mt-3">
        <div class="card-body">
          <a href="<?php echo base_url('bankController/add'); ?>"class="btn btn-primary btn-sm mb-3" style="float: right;"><i class="fas fa-user-plus mr-2"></i>Tambah</a>
          <table id="table_id" class="table table-bordered">
              <thead>
                  <tr>
                      <th class="table-utama" style="width: 30px;">No</th>
                      <th class="table-utama" style="width: 200px;">Nama</th>
                      <th class="table-utama">Keterangan</th>
                      <th class="table-utama" style="width: 100px;">Action</th>
                  </tr>
              </thead>
              <tbody>
                <?php $i=1; foreach ($bank as $row) : ?>
                  <tr>
                      <td class="table-utama"><?php echo $i++; ?></td>
                      <td class="">Bank <?php echo $row['bank']; ?></td>
                      <td class="table-utama"><?php echo $row['keterangan']; ?></td>

                      <td class="table-utama">
                        <a href="<?php echo base_url(); ?>bankController/edit/<?php echo $row['id']; ?>" class="btn btn-success btn-sm mr-2"><i class="fas fa-user-edit"></i></a>
                        <a href="<?php echo base_url(); ?>bankController/delete/<?php echo $row['id']; ?>" class="btn btn-danger btn-sm mr-2"><i class="fas fa-trash"></i></a>
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

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('bankController'); ?>" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Bank</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" id="exampleInputPassword1">
          </div>
          <<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Tamah</button>
        </form>
      </div>
    </div>
  </div>
</div>