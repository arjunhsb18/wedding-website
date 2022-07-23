<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Admin-Daulat & Anisa</title>
    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
--><link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/admin_style.css">
</head>

<body>
    <?php $this->load->view('admin_sidebar');?>
    <div class="main-content">
        <?php $this->load->view('admin_header', $user);?>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1><?=$numrowslink?></h1>
                        <span>Diundang</span>
                    </div>
                    <div>
                        <span class="las la-users">
                            
                        </span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1><?=$numrowsucapan?></h1>
                        <span>Memberikan Ucapan & Do'a</span>
                    </div>
                    <div>
                        <span class="las la-users">
                            
                        </span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1><?= $jumlahkonfhadir?></h1>
                        <span>Konfirmasi Kehadiran</span>
                    </div>
                    <div>
                        <span class="las la-users">

                        </span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1><?= $jumlahhadir?></h1>
                        <span>Yang akan hadir</span>
                    </div>
                    <div>
                        <span class="las la-users">

                        </span>
                    </div>
                </div>    
            </div>
        </main>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?= base_url();?>assets/js/admin.js"></script>
</html>