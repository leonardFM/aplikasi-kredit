<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <h2>Dashboard User</h2>
      <hr>

    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Lihat Status Pengajuan</h5>
            <p class="card-text">status pengajuan pinjaman kredit</p>
            <a href="#" class="btn btn-primary btn-block btn-sm">Lihat</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary btn-block btn-sm">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>

    <h2 class="text-center">Partner Bank</h2>
    <hr>
    <ul class="list-group list-group-flush">
      <?php foreach ($bank as $row) : ?>
        <li class="list-group-item">Bank <?php echo $row['bank']; ?></li>
      <?php endforeach; ?>
    </ul>

    </div>
  </div>
</div>
