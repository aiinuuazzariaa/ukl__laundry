<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Show Transaction</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="home.php">Ainu's Laundry</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="tampil_transaksi.php">Show Transaction</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="login.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Add
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="tambah_member.php">Add Member</a>
                                    <a class="nav-link" href="tambah_paket.php">Add Package</a>
                                    <a class="nav-link" href="tambah_transaksi.php">Add Transaction</a>
                                    <a class="nav-link" href="tambah_user.php">Add User</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Login & Show
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.php">Login</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Show
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="tampil_member.php">Show Member</a>
                                            <a class="nav-link" href="tampil_paket.php">Show Package</a>
                                            <a class="nav-link" href="tampil_transaksi.php">Show Transaction</a>
                                            <a class="nav-link" href="tampil_user.php">Show User</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Show Transaction</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Show Transaction</li>
                        </ol>

                            <div class="card-body">
                                <table id="datatablesSimple">

        <thead>

            <tr>
                <th>No.</th>
                <th>Transaction Id</th>
                <th>Member Name</th>
                <th>Date</th>
                <th>Deadline</th>
                <th>Payment Date</th>
                <th>Status</th>
                <th>Paid</th>
                <th>Cashier</th>
                <th>Details</th>
                <th>Action</th>
                <th>Print</th>
            </tr>

        </thead>

        <tbody>

            <?php 
            include "koneksi.php";
            $qry_transaksi=mysqli_query($conn,"select transaksi.*,
                                                member.nama as nama_member, 
                                                user.nama as nama_user  
                                                from transaksi JOIN user ON user.id_user = transaksi.id_user 
                                                JOIN member ON member.id_member = transaksi.id_member
                                                order by id_transaksi");
            $no=0;
            while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
            $no++;?>

            <tr>
                  <td><?=$no?></td>
                  <td><?=$data_transaksi['id_transaksi']?></td>
                  <td><?=$data_transaksi['nama_member']?></td>
                  <td><?=$data_transaksi['tgl']?></td>
                  <td><?=$data_transaksi['batas_waktu']?></td>
                  <td><?=$data_transaksi['tgl_bayar']?></td>
                  <td><?=$data_transaksi['status']?></td>
                  <td><?=$data_transaksi['dibayar']?></td>
                  <td><?=$data_transaksi['nama_user']?></td>
                  <td><a class="btn btn-danger" href="tampil_detail_transaksi.php?id_transaksi=<?php echo $data_transaksi['id_transaksi']; ?>">Details</a></td>
                  <td><a href="ubah_transaksi.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>" class="btn btn-warning">Change</a></td>
                  <td><a target="_blank" class="btn btn-success" href="cetak.php?id_transaksi=<?php echo $data_transaksi['id_transaksi']; ?>">Print</a></td>

            </tr>

            <?php 
            }
            ?>

        </tbody>

    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>