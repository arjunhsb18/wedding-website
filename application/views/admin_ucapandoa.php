<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Admin-Daulat & Anisa</title>
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/admin_style.css">
</head>

<body>
    <?php $this->load->view('admin_sidebar');?>
    <div class="main-content">
        <?php $this->load->view('admin_header', $user);?>
        <main>
            <div class="recent-grid">
                <div class="projects">
                    
                    <div class="card">
                        <div class="card-header">
                            <h3>Ucapan & Do'a</h3>
                            <!--<button>See all <span class="las la-arrow-right"></span></button>-->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Nama</td>
                                            <td>Ucapan/Doa</td>
                                            <td>Kehadiran</td>
                                            <td>Jumlah yang hadir</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($queryByName as $row) {
                                              
                                        ?>
                                        <tr>
                                            <td><?php echo $row->nama?></td>
                                            <td><?php echo $row->ucapan;?></td>
                                            <?php if ($row->kehadiran==1){?>
                                            <td>Hadir</td>
                                            <?php } else{?>
                                            <td class="absent"> Tidak Hadir</td>
                                            <?php }?>
                                            <td><?php echo $row->jumlah_hadir;?></td>
                                        </tr>
                                        <?php } ?>
                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?= base_url();?>assets/js/admin.js"></script>
</html>