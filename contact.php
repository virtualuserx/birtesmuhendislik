

<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BİRTES</title>
    <link rel="icon" type="image/png" href="images/desen1-transparent.png">
    <link rel="stylesheet" href="library/css/bootstrap.css">
    <link rel="stylesheet" href="library/css/aos.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="library/fontawesome/css/all.css">
</head>

<body>

    <nav>
        <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
        </div>
        <div class="logo">
            <a href="index.html"><img src="images/logo_beyaz.png" alt="BİRTES"></a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.html">Anasayfa</a></li>
                <li><a href="referanslar.html">Referanslar</a></li>
                <!-- <li><a href="form.php">Hizmetler</a></li> -->
                <li><a href="about.html">Hakkımızda</a></li>
                <li><a href="contact.php">İletişim</a></li>
            </ul>
        </div>
    </nav>





    <div class="top-head text-center">
        <img src="images/contact1.jpeg" alt="">
        <div class="title">
            <h1>İLETİŞİM</h1>
            <h4><a href="index.html">Anasayfa</a> -> <a href="contact.php">İletişim</a></h4>
            <i class="fas fa-angle-down"></i>
        </div>
    </div>







    <div class="contact-map-form row col-12 col-sm-10 mx-auto">

        <div class="contacts row col-12 mx-auto mt-5">

            <a href="tel:+903123242425" class="contactt col-12 col-md-6 mx-auto  row">
                <div class="col-12 col-md-10 mx-auto py-3">
                    <i class="fas fa-phone-volume my-auto"></i>
                    <span>+90 (312) 324 24 25</span>
                </div>
            </a>
            <a href="https://wa.me/905423064367?text=Merhaba BİRTES Mühendislik" target="_blank"
                class="contactt col-12 col-md-6 mx-auto  row">
                <div class="col-12 col-md-10 mx-auto  py-3">
                    <i class="fab fa-whatsapp my-auto"></i>
                    <span>+90 (542) 306 43 67</span>
                </div>
            </a>

            <a href="#mailme" class="contactt col-12 col-md-6 mx-auto   row">
                <div class="col-12 col-md-10 mx-auto  py-3">
                    <i class="fas fa-envelope my-auto"></i>
                    <span>info@ <span>birtesmuhendislik</span> .com</span>
                </div>
            </a>


            <a href="https://www.instagram.com/birtesgrupmuhendislik/" target="_blank"
                class="contactt col-12 col-md-6 mx-auto  row">
                <div class="col-12 col-md-10 mx-auto  py-3">
                    <i class="fab fa-instagram my-auto"></i>
                    <span>@<span>birtes</span> grupmuhendislik</span>
                </div>
            </a>
            <a href="#" target="_blank" class="contactt col-12 col-md-6 mx-auto  row">
                <div class="col-12 col-md-10 mx-auto  py-3">
                    <i class="fab fa-facebook my-auto"></i>
                    <span>@<span>birtes</span> grupmuhendislik</span>
                </div>
            </a>
            <a href="#" target="_blank" class="contactt col-12 col-md-6 mx-auto  row">
                <div class="col-12 col-md-10 mx-auto  py-3">
                    <i class="fab fa-linkedin my-auto"></i>
                    <span>@<span>birtes</span> grupmuhendislik</span>
                </div>
            </a>

            <a href="https://g.page/birtesmuhendislik?share" target="_blank" class="contactt col-12 mx-auto  row">
                <div class="col-11 mx-auto py-3">
                    <i class="fas fa-map-marked-alt my-auto"></i>
                    <span>Hacı Bayram Mahallesi Mehmet Karagöz Cad. No:19/C Rüzgarlı / Ulus / ANKARA</span>
                </div>
            </a>
        </div>




        <iframe id="map" style="background-color: white; max-height: 60vh; height: 600px; " class="border-0 col-12 pt-3"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12235.498500971424!2d32.8528679!3d39.944194!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x72114dda675bd096!2zQsSwUlRFUyBHUlVQIE3DnEhFTkTEsFNMxLBLIElTSSBTxLBTVEVNTEVSxLAgxLBOxZ5BQVQgVMSwQy5MVEQuxZ5UxLAu!5e0!3m2!1str!2str!4v1619947667594!5m2!1str!2str"
            allowfullscreen="" loading="lazy"></iframe>

        <div id=mailme class="container contact-form col-12 mt-0 pt-0">
            <div class="contact-image">
                <img src="images/bluemail.png" alt="rocket_contact" />
            </div>
            <form method="POST" action="contactt.php">
                <h3>Birtes'e Mail Gönder</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="İsminiz *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="usermail" class="form-control" placeholder="Mail *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="userphone" class="form-control" placeholder="Telefon No *"
                                value="" />
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="usermessage" class="form-control" placeholder="Mesajınız.. *"
                                style="width: 100%; height: 150px;"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Gönder" />
                        </div>
                    </div>

 

    <?php if (isset($_GET['action'])): ?>
        <div class="alert alert-danger">Mesajınız iletilememiştir! </div>
<p class="col-12"><em>Girdiğiniz bilgilerin doğruluğundan emin olunuz</em></p>

<?php else: ?>

    

<?php endif ?>

<?php if (isset($_GET['success'])): ?>

<div class="alert alert-success">Mesajınız Başarı ile iletildi.</div>


<?php else: ?>

    

<?php endif ?>
    

                </div>
            </form>
        </div>



    </div>


































    <footer>
        <div class="social container pt-4 pb-2">
            <!-- <a href=""> <i class="fab fa-facebook"></i> </a> -->
            <a href="https://www.instagram.com/birtesgrupmuhendislik/" title="@birtesgrupmuhendislik" target="_blank">
                <i class="fab fa-instagram"></i> </a>

            <a href="https://g.page/birtesmuhendislik?share" target="_blank"><i class="fas fa-map-marked-alt"></i></a>
            <!-- <a href=""> <i class="fab fa-twitter"></i> </a> -->
            <a href="#mailme" title="info@birtesmuhendislik.com"><i class="fas fa-envelope"></i></a>
            <a href="https://wa.me/905423064367?text=Merhaba BİRTES Mühendislik" target="_blank"> <i
                    class="fab fa-whatsapp"> </i></a>
        </div>
        <hr class="mx-auto">
        <div class="yazi mx-auto mt-4">
            <h5>

                Müşteri memnuniyetini yüksek tutmak ve farklı taleplere en uygun ürünleri sunmak adına, Türkiye’nin dört
                bir yanından sektörde öncü konumda olan üreticiler ve tedarikçilerle, ulusal ve uluslar arası
                standartları referans alarak çalışmaktayız.
            </h5>
            <img src="images/signature.png" alt="">
        </div>
    </footer>

    <a id="whatsapp" title="Whatsapp İletişim" href="https://wa.me/905423064367?text=Merhaba BİRTES Mühendislik"
        target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <div id="preloader">
        <img src="images/loading.gif" alt="">
    </div>


    <script src="library/js/jquery-3.6.0.min.js"></script>
    <script src="library/js/bootstrap.js"></script>
    <script src="library/js/main.js"></script>
    <script src="library/js/aos.js"></script>
    <script>
        AOS.init();
    </script>

<script type="text/javascript">
        window.history.forward();
    </script>

</body>

</html>

