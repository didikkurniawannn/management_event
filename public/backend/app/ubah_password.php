<!DOCTYPE html>
<html lang="en">

<head>
  <!-- HTML base URL. Remove upon app developing. -->
  <?php include "../_base.php" ?>
  <title>Ubah Password | <?= $app_data->app_name ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "../_head.php" ?>
</head>

<body class="skin-blue fixed-layout">
  <!-- ============================================================== -->
  <!-- Preloader -->
  <!-- ============================================================== -->
  <div class="preloader">
    <?php include "../_preloader.php" ?>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header -->
    <!-- ============================================================== -->
    <header class="topbar">
      <?php include "../_topbar.php" ?>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav">
            <?php include "../_sidebar.php" ?>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
          <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Ubah Password</h4>
          </div>
          <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $app_data->app_name ?></li>
                <li class="breadcrumb-item active">Ubah Password</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <form action="app/ubah_password" method="post" id="form_data" class="form-horizontal needs-validation" novalidate data-alert-message="Ubah password berhasil!">
                  <div class="form-body">
                    <div class="alert alert-secondary p-y-8 text-muted">
                      <i>*) Wajib diisi</i>
                    </div>
                    <div class="form-group row">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="old_password">Password Lama<span class="text-danger">*</span></label>
                      <div class="col-md-9">
                        <input type="password" id="old_password" name="old_password" class="form-control" placeholder="Ketikkan password lama Anda" value="P@ssw0rd" minlength="8" required>
                        <span class="form-text">Min. 8 karakter, terdiri dari kombinasi huruf kecil, huruf kapital, simbol, dan angka</span>
                        <div class="invalid-feedback">
                          Password Lama tidak valid
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="new_pasword">Password Baru<span class="text-danger">*</span></label>
                      <div class="col-md-9">
                        <input type="password" id="new_pasword" name="new_pasword" class="form-control" placeholder="Ketikkan password baru Anda" value="P@ssw0rd*123" minlength="8" required>
                        <span class="form-text">Min. 8 karakter, terdiri dari kombinasi huruf kecil, huruf kapital, simbol, dan angka</span>
                        <div class="invalid-feedback">
                          Password Baru tidak valid
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="re_password">Ulangi Password Baru<span class="text-danger">*</span></label>
                      <div class="col-md-9">
                        <input type="password" id="re_password" name="re_password" class="form-control" placeholder="Ketikkan ulang password baru Anda" value="P@ssw0rd*123" minlength="8" required>
                        <span class="form-text">Min. 8 karakter, terdiri dari kombinasi huruf kecil, huruf kapital, simbol, dan angka</span>
                        <div class="invalid-feedback">
                          Password tidak valid
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-actions m-t-30">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="offset-sm-2 col-md-9">
                            <button type="submit" class="m-s-5 btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-muted">
      <?php include "../_footer.php" ?>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <?php include "../_scripts.php" ?>
</body>

</html>
