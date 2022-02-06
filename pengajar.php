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
                            <a class="nav-link collapsed" href="pengajar.php" >
                                <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></i></div>
                                Pengajar
                            </a>

                            <a class="nav-link collapsed" href="pelajaran.php" >
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
                        <h1 class="mt-4">JAJARAN GURU <i class="fas fa-chalkboard-teacher"></i></i></h1>
                       
                       
                        <div class="card mb-4">
                            <div class="card-header">
                             <!-- Button to Open the Modal -->
                             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                Tambah
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Biodata Pengajar</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <form method="post">
                                        <div class="modal-body">
                                        <input type="text" name="nip" placeholder="Nip" class="form-control" required> 
                                        <br>
                                        <input type="text" name="nama" placeholder="Nama" class="form-control" required>
                                        <br>
                                        <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" class="form-control" required>
                                        <br>
                                        <input type="text" name="alamat" placeholder="Alamat" class="form-control" required>
                                        <br>
                                        <input type="text" name="foto" placeholder="Foto" class="form-control" required>
                                        <br>
                                        <button type="submit" class="btn btn-primary" name="add">Submit</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        

                            </div>
                            <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nip</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    <?php while ($data = mysqli_fetch_array($result)){ ?>
                                    <tr>
                                        <th scope="row"><?php echo $no; ?></th>
                                        <td><?php echo $data['nip']; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['jenis_kelamin']; ?></td>
                                        <td><?php echo $data['alamat']; ?></td>
                                        <td ><?php echo "<img src='assets/img/$data[foto]' width='70' height='90' />";?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['nip']; ?>">
                                                Edit
                                            </button>
                                            
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo $data['nip']; ?>">
                                                Delete
                                            </button>
                                        </td>
                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="delete<?php echo $data['nip']; ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Hapus Pengajar?</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <form method="post">
                                                            <div class="modal-body">
                                                                Yakin Ingin Menghapus data <?php echo $data['nama']; ?>?
                                                                <br>
                                                                <br>
                                                                <button type="submit" class="btn btn-danger" name="hapuspengajar">Delete</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                            </div>
                                    </tr>
                                    
                                     <!-- Edit Modal -->
                                    <div class="modal fade" id="edit<?php echo $data['nip']; ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Pengajar</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <form method="post">
                                                <div class="modal-body">
                                                <input type="text" name="nip" value="<?php echo $data['nip']; ?>" class="form-control" required> 
                                                <br>
                                                <input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control" required>
                                                <br>
                                                <input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>" class="form-control" required>
                                                <br>
                                                <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" class="form-control" required>
                                                <br>
                                                <input type="text" name="foto" value="<?php echo $data['foto']; ?>" class="form-control" required>
                                                <br>
                                                <button type="submit" class="btn btn-primary" name="editpengajar">Update</button>
                                                </div>
                                            </form>
                                            

                                        </div>
                                          
                                    </div>
                                    <?php $no++ ?>
                                    <?php } ?>
                                </tbody>
                            </table>
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
  
</div>
</div>
</html>
