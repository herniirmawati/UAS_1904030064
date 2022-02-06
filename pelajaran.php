<?php
require 'function.php';

include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>uas_1904030064</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">SD HARAPAN KITA</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="pengajar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></i></div>
                                Pengajar
                            </a>

                            <a class="nav-link collapsed" href="pelajaran.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pelajaran
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                       HERNI IRMA WATI
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">MATA PELAJARAN<i class="fas fa-chalkboard-teacher"></i></i></h1>
                       
                       
                        <div class="card mb-4">
                            <div class="card-header">
                             <!-- Button to Open the Modal -->
                             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                Tambah
                            </button>
                           
                        
                            <div class="card-body">
                                <div class="table-responsive">
                                   
                                <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nama Pelajaran</th>
                                    <th scope="col">Jenis Pelajaran</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    <?php while ($data = mysqli_fetch_array($ambil)){ ?>
                                    <tr>
                                    <th scope="row"><?php echo $no; ?></th>
                                    <td><?php echo $data['id']; ?></td>
                                    <td><?php echo $data['nama_pelajaran']; ?></td>
                                    <td><?php echo $data['jenis_pelajaran']; ?></td>
                                    <td><?php echo $data['keterangan']; ?></td>
                                    <td>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id']; ?>">
                                                Edit
                                            </button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo $data['id']; ?>">
                                                Delete
                                            </button>
                                    </td>
                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="delete<?php echo $data['id']; ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Hapus Pelajaran</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <form method="post">
                                                    <div class="modal-body">
                                                        Yakin ingin menghapus <?php echo $data['nama_pelajaran']; ?> ?
                                                        <br>
                                                        <br>
                                                        <button type="submit" class="btn btn-danger" name="hapuspelajaran">Hapus</button>
                                                    </div>
                                                    </form>
                                                </div>

                                            </div>
                                    </div>
                                    <!-- edit Modal -->
                                    <div class="modal fade" id="edit<?php echo $data['id']; ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Mata Pelajaran</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <!-- Modal body -->
                                                <form method="post">
                                                <div class="modal-body">
                                                    <input type="text" name="id" value="<?php echo $data['id']; ?>" class="form-control" required>
                                                    <br>
                                                    <input type="text" name="nama_pelajaran" value="<?php echo $data['nama_pelajaran']; ?>" class="form-control" required>
                                                    <br>
                                                    <input type="text" name="jenis_pelajaran" value="<?php echo $data['jenis_pelajaran']; ?>" class="form-control" required>
                                                    <br>
                                                    <input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>" class="form-control" required>
                                                    <br>
                                                    <button type="submit" class="btn btn-primary" name="editpelajaran">Update</button>
                                                </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                    </tr>
                                    <?php $no++ ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                                </div>
                               
                            </div>
                            
                        </div>

           
                    </div>
                </main>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Mata Pelajaran</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <form method="post">
                                        <div class="modal-body">
                                            <input type="text" name="id" placeholder="id" class="form-control" required>
                                            <br>
                                            <input type="text" name="nama_pelajaran" placeholder="Nama Pelajaran" class="form-control" required>
                                            <br>
                                            <input type="text" name="jenis_pelajaran" placeholder="Jenis Pelajaran" class="form-control" required>
                                            <br>
                                            <input type="text" name="keterangan" placeholder="Keterangan" class="form-control" required>
                                            <br>
                                            <button type="submit" class="btn btn-primary" name="addpelajaran">Submit</button>
                                        </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        
                           
</html>
