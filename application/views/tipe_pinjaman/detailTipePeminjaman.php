<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
    <h2>Detail Tipe Pinjaman</h2>
      <div class="card mt-3">
        <div class="card-body">
            <table class="table ">
              <tr>
                <td>Bank</td>
                <td>:</td>
                <td><?php echo $pinjaman['nama_bank']; ?></td>          
              </tr>

              <tr>
                <td>Nominal/jumlah</td>
                <td>:</td>
                <td>Rp. <?php echo $pinjaman['nominal']; ?></td>         
              </tr>

              <tr>
                <td>Waktu</td>
                <td>:</td>
                <td><?php echo $pinjaman['waktu']; ?> Bulan</td>          
              </tr>

              <tr>
                <td>Pembayaran perbulan</td>
                <td>:</td>
                <td>Rp. <?php echo round($pinjaman['nominal'] / $pinjaman['waktu'],2);  ?> / Bulan</td>          
              </tr>

              <tr>
                <td>Bunga</td>
                <td>:</td>
                <td> - </td>          
              </tr>

          </table>      
        </div>
      </div>
    </div>
  </div>
</div>
