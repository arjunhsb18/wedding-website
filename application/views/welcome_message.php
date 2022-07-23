<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daulat & Anisa</title>

	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	
</head>
<body>
	<audio control autoplay loop  id="playAudio">
        <source src="<?=base_url();?>assets/audio/janjisuci.mp3">
    </audio>
    <!--Hero-->
    <div class="hero vh-100 d-flex align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h1 class="display-10 text-white">The Wedding of</h1>
                    <p class="text-white my-3 font-name">Daulat & Anisa</p>
                    
                </div>
            </div>
            <div class="row g-4" id="yth" >
                <div class="col-lg-7 mx-auto text-center">
                    <h4 class="text-white">Kepada Yang Terhormat : </h4>
                    <p class="text-white"><?= $invited;?></p>
					<a href="#" id="bukaundangan" class="btn btn-outline-light">Buka Undangan</a>
                </div>
            </div>
        </div>
    </div>
    <!--End of Hero-->

    
    <!--Services-->
    <section id="services" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center" >
                    <p data-aos="fade-left" data-aos-duration="2000" >“Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu pasangan-pasangan dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.”</p>
                    <p data-aos="fade-left" data-aos-duration="2000" class="mt-4">(QS. Ar-Rum : 21)</p>
                </div>
            </div>
        </div>
    </section>
    <!--End of Services-->

    <!--Features-->
    <section class="row w-100 py-0 bg-light" id="features" style="display: none;" data-aos="zoom-in" data-aos-delay="20">
        <div class="col-lg-6 col-img"></div>
        <div class="col-lg-6 py-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-10 offset-md-1">
                        <p data-aos="fade-bottom" data-aos-delay="50" data-aos-duration="100">Bismillahirrahmanirrahim</p>
                        <p data-aos="fade-right">Assalamu'alaikum Warahmatullahi Wabarakatuh</p>
                        <p  data-aos="fade-left">Maha suci Allah yang telah menciptakan makhluk-Nya berpasang-pasangan. Tanpa mengurangi rasa hormat izinkan kami mengundang Bapak/Ibu/Saudara/i untuk hadir memberikan do'a restu pada acara pernikahan kami :</p>
                      
                        <h1 data-aos="zoom-in-left" class="lobster mt-4">Daulat Siregar, S. Sos</h1>
                        <p data-aos="fade-bottom-left" class="">Putra dari Bapak Ahmad Siregar dan Ibu Tiotni Harahap</p>
                        <h3 data-aos="zoom-in" class="lobster fw-100">and</h3>
                        <h1 data-aos="zoom-in-right" class="lobster">Nur Anisa Harahap, S. Pd</h1>
                        <p data-aos="fade-bottom-right">Putri pertama dari Bapak H. Bahron Harahap, S. Pd. I dan Ibu Hj. Agustina Siregar, S. Pd. I</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of Features-->

     <!--Services-->
     <section id="services" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <p>Yang InsyaAllah akan dilaksanakan :</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-sm-6 text-center" data-aos="zoom-in">
                    <div class="service card-effect">

                        <h5 class="mt-4 mb-2 lobster fs-30">Resepsi/Haroro ni itak</h5>
                        <hr>
                        <p class="fs-20 c-g"><i class="bx bxs-calendar fs-20 "></i class="ml-4">Minggu, 13 Maret 2022</p>
                        <p class="fs-20 c-g"><i class="bx bxs-time fs-20 "></i class="ml-4">09.00 WIB s/d Selesai</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 text-center" data-aos="zoom-in">
                    <div class="service card-effect">
                        <h5 class="mt-4 mb-2 lobster fs-30">Margondang</h5>
                        <hr>
                        <p class="fs-20 c-g"> <i class="ml-4 bx bxs-calendar fs-20 "></i>Senin, 14 Maret 2022</p>
                        <p class="fs-20 c-g"> <i class="bx bxs-time fs-20 "></i class="ml-4">09.00 WIB s/d Selesai</p>
                    </div>
                </div>                
            </div>
            <div class="row mx-auto" data-aos="zoom-in">
                <div class="col-lg-6 col-sm-6 mx-auto mt-4 text-center">
                    <p>Desa Gunung Manaon Kec. Barumun Tengah, Kab. Padang Lawas</p>
                    <a href="#" id="map" class="c-g btn btn-outline-light"> <i class="bx bxs-map"></i> Menuju Lokasi</a>
                    <a href="#" id="map" class="c-g btn btn-outline-light"> <i class="bx bxs-alarm"></i> Tambah Pengingat</a>
                </div>
            </div>
        </div>
    </section>
    <!--End of Services-->

    <!--Pricing-->
    <section id="pricing" class="bg-light" style="display: none;">
        <div class="container" id="protokol">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h1 data-aos="zoom-in">Protokol Kesehatan</h1>
                    <p data-aos="zoom-in">Berhubungan dalam kondisi pandemi. Bagi para tamu undangan diharapkan untuk </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6" data-aos="slide-right">
                    <div class="pricing card-effect text-center">
                        <img src="<?=base_url();?>assets/img/use masker.png" alt="">
                        <h6 class="mt-4">Gunakan Masker</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="slide-down">
                    <div class="pricing card-effect text-center">
                        <img src="<?=base_url();?>assets/img/menjaga jarak.png" alt="">
                        <h6 class="mt-4">Jaga Jarak</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="slide-up">
                    <div class="pricing card-effect text-center">
                        <img src="<?=base_url();?>assets/img/Mencuci tangan.png" alt="">
                        <h6 class="mt-4">Cuci Tangan</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="slide-left">
                    <div class="pricing card-effect text-center">
                        <img src="<?=base_url();?>assets/img/kurangi besentuhan.png" alt="">
                        <h6 class="mt-4">Kurangi Bersentuhan</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of Pricing-->

     <!--Projects-->
     <section id="projects" style="display: none;" data-aos="zoom-in">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h1>Galeri Foto </h1>
                    
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="<?=base_url();?>assets/img/bg.jpeg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Project Title</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="<?=base_url();?>assets/img/bg.jpeg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Project Title</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="<?=base_url();?>assets/img/bg.jpeg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Project Title</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="<?=base_url();?>assets/img/bg.jpeg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Project Title</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="<?=base_url();?>assets/img/bg.jpeg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Project Title</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="<?=base_url();?>assets/img/bg.jpeg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Project Title</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of Projects-->


    <!--Features-->
    <section class="row w-100 py-0 bg-light" id="features" style="display: none;" data-aos="flip-left">
        <div class="col-lg-6 py-5 px-5">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h1 class="rsvp">RSVP</h1>
                </div>
            </div>
            <form action="<?=base_url();?>daulatandanisa/kirim/<?= $invited?>" method="POST" class="row g-3 ml-4 justify-content-center">
                <div class="col-md-10">
                    <input type="text" class="form-control" placeholder="Nama" name="nama">
                </div>               
                <div class="col-md-10">
                    <textarea id="" cols="30" rows="5" name="ucapan" class="form-control" placeholder="Ucapan & Do'a yang ingin disampaikan"></textarea>
                </div>
                <div class="col-md-10">
                    <p>Apakah Anda berkenan hadir?:</p>
					<select name="hadir" id="kehadiran" class="form-control">
						<option value="Hadir">Hadir</option>
						<option value="Tidak Hadir">Tidak Hadir</option>
					</select>
                </div>
                <div class="col-md-10" >
                    <p>Berapa tamu yang akan hadir?</p>
                    <input type="text" name="jumlah_hadir" id="" placeholder="0" class="form-control">
                </div>
                <div class="col-md-10 d-grid">
                    <!---<a href="<?=base_url();?>daulatandanisa/kirim/<?= $invited?>" class="c-g b-1 btn btn-outline-light" >Kirim</a>-->
                    <button type="submit" class="c-g b-1 btn btn-outline-light">Kirim</button>
                </div>
            </form>
        </div>
        <div class="col-lg-6 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        
                        <h1 class="text-center">Ucapan & Do'a</h1>

                        <div id="message" class="g-4 mt-4 message">
                            <?php foreach ($queryByName as $row) {?>
                            <div class="box-message feature d-flex">
                                <div>
                                    <h6><?= $row->nama?></h6>
                                    <p><?= $row->ucapan?></p>
                                </div>
                            </div>
                            <?php }?>
                            <div class="box-message g feature d-flex">
                                <div>
                                    <h6>AAAAAA</h6>
                                    <p>ccccccc</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of Features-->

    <!--Services-->
    <section id="services" style="display: none;" data-aos="zoom-in">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h1>Kado Pernikahan</h1>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-sm-6 text-center">
                    <div class="service card-effect">

                        <h5 class="mt-4 mb-2 lobster fs-30">BRI</h5>
                        <hr>
                        <p class="fs-20 c-g"> <i class="ml-4 bx bx-credit-card-front fs-20" style="margin-right: 5px;"></i>00000-0000-00000</p>
                        <p class="fs-20 c-g">Daulat Siregar</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 text-center">
                    <div class="service card-effect">
                        <h5 class="mt-4 mb-2 lobster fs-30">BNI</h5>
                        <hr>
                        <p class="fs-20 c-g"> <i class="ml-4 bx bx-credit-card-front fs-20 " style="margin-right: 5px;"></i>00000-0000-00000</p>
                        <p class="fs-20 c-g">Daulat Siregar</p>
                    </div>
                </div>                
            </div>
        </div>
    </section>
    <!--End of Services-->

    <footer class="mt-4" style="display: none;">
        <div class="footer-bottom py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        2022 ATMR Grafika
                    </div>
                    <div class="col-md-6 ">
                        <div class="social-icons mx-right">
                            <a href=""> <i class="bx bxl-facebook"></i> </a>
                            <a href=""> <i class="bx bxl-twitter"></i> </a>
                            <a href=""> <i class="bx bxl-instagram"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="<?=base_url();?>assets/js/script.js"></script>
</body>
</html>