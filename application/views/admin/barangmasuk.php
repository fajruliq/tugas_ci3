<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Barang Masuk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard Data Barang</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <?php if ($this->session->flashdata('flash')) : ?>
                <!-- Alert simpan -->
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil</strong>
                    <?php echo $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel Barang Masuk</h3>
                    <div class="d-flex justify-content-end"><a class="btn btn-primary" href="<?php base_url(); ?>home/tambah_barangmasuk" role="button">Tambah Data</a></div>
                </div>


                <div class="card-body">
                    <table class="table table-stripe">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama Barang</th>
                                <th>Nama</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($barangmasuk as $brgmsk) : ?>
                                <tr>

                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $brgmsk['nama_barang']; ?></td>
                                    <td><?php echo $brgmsk['stock_barang']; ?></td>

                                    <td>
                                        <a href="<?= base_url(); ?>/home/update_barangmasuk/<?= $brgmsk['id']; ?>"  class="btn btn-warning" role="button">Edit</a> ||
                                        <a class="btn btn-danger" href="<?= base_url(); ?>/home/hapus_barangmasuk/<?= $brgmsk['id']; ?>" onclick="return confirm('Yakin Menghapus Data?');" role="button">Delete</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->