<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template -->
    <link href="<?= base_url('assets'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url('assets'); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        @media screen and (max-width: 400px) {
            .container-fluid {
                margin-top: 10%;
            }
        }
    </style>
</head>

<body id="page-top">
    <div class="bg-blur bg-secondary" style="position: absolute; top: 0; bottom: 0; right: 0; left: 0; z-index: 80; opacity: .3; display: none;"></div>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-dark bg-primary fixed-top">
                    <span class="navbar-brand mb-0 h1">PT. Internal Tekstil Group</span>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" style="margin-top: 6%;">

                    <h1 class="mt-3 text-gray-900 font-weight-bold">Staff Internal</h1>
                    <!-- DataTales Example -->
                    <div class="row justify-content-center">
                        <div class="col-lg-5 Form" style="display: none; z-index: 81; position: absolute; top: 10%;">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h3 class="text-gray-800 text-center font-weight-bold judulForm">Tambah Staff</h3>
                                    <form action="" method="post" class="formStaff">
                                        <div class="form-group">
                                            <label for="nama">Nama Staff</label>
                                            <input type="hidden" name="id" id="id" class="form-control" placeholder="Masukan id Staff">
                                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Staff">
                                            <div class="invalid-feedback invalid-nama"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="kota">Kota</label>
                                            <input type="text" name="kota" id="kota" class="form-control" placeholder="Masukan Kota Staff">
                                            <div class="invalid-feedback invalid-kota"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="devisi">Devisi</label>
                                            <select name="devisi" id="devisi" class="form-control">
                                                <option value="">Pilih Devisi</option>
                                                <?php foreach ($devisi as $row) : ?>
                                                    <option value="<?= $row['id']; ?>"><?= $row['devisi']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="invalid-feedback invalid-devisi"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="devisi">Alamat</label>
                                            <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" placeholder="Alamat"></textarea>
                                            <div class="invalid-feedback invalid-alamat"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <button type="button" onclick="hilangForm(`Form`)" name="kirim" class="btn btn-sm btn-warning btn-block"> Batal </button>
                                                </div>
                                                <div class="col-6">
                                                    <button type="button" name="kirim" onclick="simpanStaff(`Proses/prosesSimpanStaff`, `formStaff`)" class="btn btn-sm btn-block btn-primary"> Simpan </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow my-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Staff PT. Internal Tekstil Group</h6>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3 justify-content-between">
                                <div class="col-md-2 mb-2">
                                    <button type="button" name="kirim" onclick="tampilForm(`Form`)" class="btn btn-sm btn-block btn-primary"> Tambah Staff </button>
                                </div>
                                <div class="col-md-2 mb-2">
                                    <button type="button" name="kirim" onclick="formEdit()" class="btn btn-sm btn-block btn-info"> Ubah Staff </button>
                                </div>
                                <div class="col-md-2 mb-2">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <button type="button" name="kirim" class="btn btn-sm btn-block btn-info mb-2" onclick="tampilFilter(`inputFilter`)"> Filter </button>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="button" name="kirim" class="btn btn-sm btn-block btn-primary mb-2" onclick="getTable(`<?= base_url('Home/getTable'); ?>`)"> <i class="fas fa-retweet"></i> </button>
                                        </div>
                                    </div>
                                    <select name="devisi" onclick="cariDevisi(`<?= base_url('Proses/cariDevisi'); ?>`+ `/` + $(this).val())" id="devisi" class="form-control inputFilter" style="display: none;">
                                        <option value="">Pilih Devisi</option>
                                        <?php foreach ($devisi as $row) : ?>
                                            <option value="<?= $row['id']; ?>"><?= $row['devisi']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-2 mb-2">
                                    <button type="button" name="kirim" onclick="formHapus()" class="btn btn-sm btn-block btn-danger"> Hapus </button>
                                </div>
                            </div>
                            <hr>
                            <div id="table"></div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets'); ?>/js/jquery.js"></script>
    <script src="<?= base_url('assets'); ?>/js/sweetalert2.js"></script>
    <script src="<?= base_url('assets'); ?>/js/myjs.js"></script>

    <script>
        getTable("<?= base_url('Home/getTable'); ?>")
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>


</body>

</html>