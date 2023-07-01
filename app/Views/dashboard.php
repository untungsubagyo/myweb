<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    echo $this->include('layout/meta_head.php');
    ?>
</head>

<body>
    <div id="app">
        <?php
            echo $this->include('layout/sidebar_menu');
        ?>
        <div id="main">
            <?php
                echo $this->include('layout/navbar');
            ?>

            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Dashboard</h3>
                    <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
                </div>
                 
            </div>

            <?php
            echo $this->include('layout/footer');
            ?>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/themes/voler/dist/assets/js/feather-icons/feather.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/themes/voler/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/themes/voler/dist/assets/js/app.js"></script>

    <script src="<?php echo base_url(); ?>assets/themes/voler/dist/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/themes/voler/dist/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/themes/voler/dist/assets/js/pages/dashboard.js"></script>

    <script src="<?php echo base_url(); ?>assets/themes/voler/dist/assets/js/main.js"></script>
</body>

</html>