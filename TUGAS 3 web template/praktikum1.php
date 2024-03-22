<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<!-- mine.php -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>PRAKTIKUM 1</h1>

                </div>
            </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">JUDUL</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">




                            <link rel="stylesheet"
                                href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                            <link rel="stylesheet"
                                href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                            <h1>Form Pendaftaran Siswa</h1>
                            <form method="POST" action="#">
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">NAMA</label>
                                    <div class="col-8">
                                        <input id="nama" name="nama" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">JENIS KELAMIN</label>
                                    <div class="col-8">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="jk" id="jk_0" type="radio" class="custom-control-input"
                                                value="Laki - Laki">
                                            <label for="jk_0" class="custom-control-label">Laki - Laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="jk" id="jk_1" type="radio" class="custom-control-input"
                                                value="Perempuan">
                                            <label for="jk_1" class="custom-control-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">HOBI</label>
                                    <div class="col-8">
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="hobi[]" id="hobi_0" type="checkbox"
                                                class="custom-control-input" value="sepak bola">
                                            <label for="hobi_0" class="custom-control-label">sepak bola</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="hobi[]" id="hobi_1" type="checkbox"
                                                class="custom-control-input" value="main game">
                                            <label for="hobi_1" class="custom-control-label">main game</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="hobi[]" id="hobi_2" type="checkbox"
                                                class="custom-control-input" value="maraton">
                                            <label for="hobi_2" class="custom-control-label">maraton</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ipk" class="col-4 col-form-label">IPK</label>
                                    <div class="col-8">
                                        <input id="ipk" name="ipk" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>

                            <?php
                            $nama = $_POST['nama'];
                            $jk = $_POST['jk'];
                            $hobi = $_POST['hobi'];
                            $ipk = $_POST['ipk'];


                            //cetak
                            echo "<h2>informasi yang anda kirim<h2>";
                            echo "Nama: $nama <br>";
                            echo "Jenis Kelamin: $jk <br>";
                            echo "Hobi: ";
                            foreach ($hobi as $value) {
                                echo "$value,";
                            }
                            echo "<br>";
                            echo "IPK: $ipk <br>";
                            function status($ipk)
                            {
                                if ($ipk >= 3 && $ipk <= 4) {
                                    return "    lulus";
                                } else {
                                    return "GAGAL";
                                }
                            }
                            echo "status:" . status($ipk);
                            ?>





                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            INI HASIL PRAKTIKUM 1
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once 'footer.php';
?>