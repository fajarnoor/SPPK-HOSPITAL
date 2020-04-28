<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('particals/header.php')?>
    </head>
    <body class="sb-nav-fixed">
        <?php $this->load->view('particals/navbar.php')?>
        <div id="layoutSidenav">
            <?php $this->load->view('particals/sidebar.php') ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">MASTER DATA PASIEN</h1>
                        <?php $this->load->view('particals/breadcrumb.php');?>
                        <?php $this->load->view('particals/content-crud.php');?>
                        <?php $this->load->view('particals/modal.php');?>
                    </div>
                </main>
                <?php $this->load->view('particals/footer.php');?>
            </div>
        </div>
        <?php $this->load->view('particals/js.php');?>
    </body>
</html>
