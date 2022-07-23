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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <?php $this->load->view('admin_sidebar');?>
    <div class="main-content">
        <?php $this->load->view('admin_header', $user);?>
        <main>
            <div class="recent-grid">
                <div class="projects">
                    
                    <div class="card">
                        <h2 class="main-title">Form Undangan</h2>
                        <div class="top-section">
                            <!--
                            <div>
                                <textarea name="" id="" cols="100" rows="10" class="form-control" placeholder="Tuliskan template Undangan"></textarea>
                                <div>
                                    <a class="btn btn-main" href="">Simpan Template</a>
                                    <a class="btn btn-blue" href="">Edit Template</a>
                                </div>
                            </div>-->
                            <div>
                                <form id="form-link" action="<?=base_url();?>admin/buatlink" method="POST">
                                <input type="text" name="kode_pemesan" value="<?= $kode_pemesan?>" hidden="hidden" >
                                <input type="text" placeholder="Nama yang diundang" name="nama" class="form-control">
                                <div>
                                    <input type="submit" value="">
                                    <a class="btn btn-main" onclick="document.getElementById('form-link').submit();">Buat Link</a>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-header">
                            <h3>Undangan Terbaru</h3>
                            <a class="btn btn-main">See all <span class="las la-arrow-right"></span></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Nama</td>
                                            <td>Link Undangan</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $count=0;?>
                                        <?php foreach ($queryByName as $row) {?>
                                         
                                        <tr>
                                            <td><?= $row->nama_diundang?></td>
                                            <td>
                                                <p><?= $row->link_undangan?></p>
                                            </td>
                                            <td> 
                                                <a class="btn btn-small btn-red" href="<?=base_url();?>admin/hapus/<?= $row->id?>">Delete</a> 
                                            </td>
                                        </tr>
                                        <?php }?>
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

<script src="<?=base_url();?>assets/js/admin_script.js"></script>
</html>