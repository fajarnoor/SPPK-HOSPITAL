<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('particals/header.php') ?>
</head>

<body class="bg-primary" style="color:black;">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">SPP-K HOSPITAL</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post" action='<?php echo base_url() ?>login/index'>
                                        <?php
                                        if (!empty($this->session->userdata('log'))) {
                                            if ($this->session->userdata('log') == 'ng') {
                                                echo "<div class='alert alert-danger' role='alert'>
                                                    Maaf ID / Password Anda Salah / Tidak Valid</div>";
                                            }
                                        }
                                        ?>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">ID / EMAIL</label>
                                            <input class="form-control py-4" id="inputid" type="text" name='id' placeholder="Masukan ID / Email Anda" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">KATASANDI</label>
                                            <input class="form-control py-4" id="inputKatasandi" type="password" name='katasandi' placeholder="Masukan Katasandi" required />
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                <label class="custom-control-label" for="rememberPasswordCheck">Ingat Password</label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><button class="btn btn-primary" type='submit'>Masuk</button></div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="<?php echo base_url() ?>login/menu_daftar">Belum Punya Akun? Daftar!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">All Right Reserved &copy; SPP-K HOSPITAL 2020</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>