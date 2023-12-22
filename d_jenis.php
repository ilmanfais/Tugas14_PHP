<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Jenis</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Jenis</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">


          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Detail Jenis Barang</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php
              include_once 'controllers/class_jenis.php';
              // ciptakan object dari class jenis
              $id = $_REQUEST['id'];
              $obj = new Jenis($dbh);
              // panggil method tampilkan data jenis
              $rs = $obj->getJenis($id);
              ?>
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-text">
                                    Id : <?= $rs->id; ?>
                                    <br/>Nama  : <?= $rs->nama; ?>
                                </p>
                      <br>
                      <a href="indexjenis.php" class="btn btn-primary">Go Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- 834 - 1746 -->