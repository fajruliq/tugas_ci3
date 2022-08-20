<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Stock Barang</h3>
                </div>

                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">This is a danger alert—check it out!
                        </div>
                        <span class="text-danger"><?php echo validation_errors(); ?></span>
                    <?php endif; ?>
                    <!-- Form input mahasiswa -->
                    <form action="" method="POST">
                        <div class="form-group row">
                            <label for="namabarang" class="col-sm-2 col-form-label">Nama Barang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="namabarang" name="namabarang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stockbarang" class="col-sm-2 col-form-label">Stock Barang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control mb-4" id="stockbarang" name="stockbarang">
                            </div>
                      
                        <button type="reset" name="reset" class="btn btn-sm btn-warning w-auto m-2">Reset</button>
                        <button type="submit" name="simpan" class="btn-sm btn btn-primary w-auto m-2">Simpan</button>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->