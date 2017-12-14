<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beranda</title>

    <!-- CSS BOOTStrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ;?>" rel="stylesheet">

    <!-- CSS sendiri/custom -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/beranda.css') ;?>">

    <!-- css datatables -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css') ;?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css') ;?>">


  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('halaman/view/beranda') ;?>">Beranda<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('halaman/view/tentang') ;?>">Tentang
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navigation -->

    <!-- Tabel Mahasiswa -->
    <section style="height: 40rem;">
      <div class="container" style="height: 20rem;">
            <h2 display-text-4 class="mb-5">Data Mahasiswa Teknik Mesin</h2>
                <table id="data" class="table table-hover">
                  <thead>
                    
                      <th scope="col">Nama</th>
                      <th scope="col">NIM</th>
                      <th scope="col">Tanggal Lahir</th>
                    
                  </thead>

                  <tbody>
                    
                    <?php foreach($mahasiswa as $mhs): ?>
                    <tr>

                      <td><?php echo $mhs->nama; ?></td>
                      <td><?php echo $mhs->nim ?></td>
                      <td><?php echo $mhs->tanggal_lahir ?></td>
                    </tr>
                  <?php endforeach; ?>

                  </tbody>
                </table>
             
      </div>
    </section>
      
    
    <!-- Akhir Tabel -->

    <script src="<?php echo base_url('assets/bootstrap/js/jquery-3.2.1.min.js') ;?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js') ;?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js') ;?>"></script>
    
    

    <script>
       $(document).ready(function(){
          $('#data').DataTable();
      });
    </script>
    
    

  
    

