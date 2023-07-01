<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>

    <link rel="stylesheet" href="/assets/themes/voler/dist/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/themes/voler/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/themes/voler/dist/assets/css/app.css">
    <link rel="shortcut icon" href="/assets/themes/voler/dist/assets/images/favicon.svg" type="image/x-icon">
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
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Pengguna</h3>
                            <p class="text-subtitle text-muted">Halaman digunakan untuk mengelola data Pengguna.</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="/">Master</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pengguna</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        </div>

                        <div class="card-content">
                            <div class="table-responsive">
                                 <table  class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $i=0;
                                            foreach($users as $item){
                                                $i++;
                                                ?>
                                                <tr>
                                                    <td><?=$i;?></td>
                                                    <td><?=$item['user_name'];?></td>
                                                    <td><?=$item['user_username'];?></td>
                                                    <td><?=$item['user_email'];?></td>
                                                </tr>
                                                <?php
                                            }
                                        ?>
                                    </tbody>
                                 </table>
                            </div>
                        </div>
                    </div>
                </div>
                 

            </div>

            <?php 
                echo $this->include('layout/footer');
            ?>
        </div>
    </div>
    <script src="/assets/themes/voler/dist/assets/js/feather-icons/feather.min.js"></script>
    <script src="/assets/themes/voler/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/themes/voler/dist/assets/js/app.js"></script>

    <script src="/assets/themes/voler/dist/assets/js/main.js"></script>
</body>

</html>