<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>General Form</h1>
                    <!-- error data -->
                    <?php if (session('validation')) : ?>
                        <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <ul>
                                <?php foreach (session('validation')->getErrors() as $error) : ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif ?>
                    <!-- error data -->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form Data Tumbuhan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Masukkan Data Tumbuhan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/insert" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_tumbuhan">Nama Tumbuhan</label>
                                    <input type="text" class="form-control" id="nama_tumbuhan" name="nama_tumbuhan" placeholder="Enter nama tumbuhan">
                                </div>
                                <div class="form-group">
                                    <label for="nama_latin">Nama Latin</label>
                                    <input type="text" class="form-control" id="nama_latin" name="nama_latin" placeholder="Enter nama Latin">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_tumbuhan">Jumlah Tumbuhan</label>
                                    <input type="number" class="form-control" id="jumlah_tumbuhan" name="jumlah_tumbuhan" placeholder="Enter jumlah tumbuhan">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" id="foto_tumbuhan" name="foto_tumbuhan">
                                        <label class="custom-file-label" for="foto_tumbuhan" id="fileLabel">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->