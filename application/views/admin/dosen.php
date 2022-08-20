<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Dosen</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Dosen</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card-body">
                <table class="table table-stripe">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Email</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($dosen as $dsn) : ?>
                            <tr>

                                <td><?php echo $i; ?></td>
                                <td><?php echo $dsn['nama']; ?></td>
                                <td><?php echo $dsn['alamat']; ?></td>
                                <td><?php echo $dsn['email']; ?></td>

                                <td>
                                    <a href="#" class="btn btn-warning" role="button">Edit</a> ||
                                    <a class="btn btn-danger" href="<?= base_url(); ?>/administrator/mahasiswa/hapus_mhs/<?= $dsn['id']; ?>" onclick="return confirm('Yakin Menghapus Data?');" role="button">Delete</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->