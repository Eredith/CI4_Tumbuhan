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
                                <th>Edit Tumbuhan</th>
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
                                    <td><img src="<?= base_url('uploads/' . $tumbuh->foto_tumbuhan) ?>" class="img-fluid" style="width: 288px"></td>
                                    <td>
                                        <!-- Delete button with Bootstrap styling -->
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?= $tumbuh->id ?>">
                                            Delete
                                        </button>

                                        <!-- Delete Confirmation Modal -->
                                        <div class="modal fade" id="deleteModal<?= $tumbuh->id ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Anda yakin ingin menghapus <?= $tumbuh->nama_tumbuhan ?>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <a href="<?= base_url('admin/delete/' . $tumbuh->id) ?>" class="btn btn-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
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
                                <th>Edit Tumbuhan</th>
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