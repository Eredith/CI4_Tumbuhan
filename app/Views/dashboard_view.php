<!-- /.col -->
<!-- Main content -->
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tabel Tumbuhan</h3>
          </div>
          <div class="card-header">
            <?php if (session()->get('logged_in')) : ?>
              <a href="/tumbuhan">
                <div class="btn btn-primary">
                  + Tambahkan Tumbuhan
                </div>
              </a>
          </div>
        <?php endif; ?>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama Tumbuhan</th>
                <th>Nama Latin</th>
                <th>Jumlah Tumbuhan</th>
                <th>Foto Tumbuhan</th>
              </tr>
            </thead>
            <tbody>
              <?php $counter = 1;
              foreach ($dataTumbuhan as $tumbuh) : ?>
                <tr>
                  <td><?= $counter++ ?></td>
                  <td><?= $tumbuh->nama_tumbuhan ?></td>
                  <td><?= $tumbuh->nama_latin ?></td>
                  <td><?= $tumbuh->jumlah_tumbuhan ?></td>
                  <td><img class="img-fluid" src="<?= base_url('uploads/' . $tumbuh->foto_tumbuhan) ?>" style="width: 288px"></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Nama Tumbuhan</th>
                <th>Nama Latin</th>
                <th>Jumlah Tumbuhan</th>
                <th>Foto Tumbuhan</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->