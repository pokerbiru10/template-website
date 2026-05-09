
<!-- Footer -->
<footer class="site-footer">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!-- About Column -->
                <div class="col-lg-4 col-md-6 col-sm-12 footer-widget">
                    <div class="footer-about">
                        <div class="footer-logo">
                            <a href="<?php echo SITE_URL; ?>/index.php">
                                <img src="<?php echo SITE_URL; ?>/assets/images/logo-tamzis-footer.png" alt="Tamzis Logo" class="img-responsive">
                            </a>
                        </div>
                        <p><?php echo SITE_TAGLINE; ?></p>
                        <p>KSPPS Tamzis Bina Utama adalah lembaga keuangan syariah yang berkomitmen memberikan layanan terbaik bagi umat.</p>
                        <ul class="footer-social list-inline">
                            <li><a href="<?php echo $social_media['whatsapp']; ?>" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="<?php echo $social_media['instagram']; ?>" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="<?php echo $social_media['facebook']; ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo $social_media['youtube']; ?>" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 col-sm-12 footer-widget">
                    <h3 class="footer-title">Profil</h3>
                    <ul class="footer-links">
                        <li><a href="<?php echo SITE_URL; ?>/company-profile.php">Company Profile</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/visi-misi.php">Visi & Misi</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/corporate-culture.php">Corporate Culture</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/penghargaan.php">Penghargaan</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/alamat-kantor.php">Alamat Kantor</a></li>
                    </ul>
                </div>

                <!-- Layanan -->
                <div class="col-lg-3 col-md-6 col-sm-12 footer-widget">
                    <h3 class="footer-title">Layanan</h3>
                    <ul class="footer-links">
                        <li><a href="<?php echo SITE_URL; ?>/pembiayaan-ikhtiar.php">Ikhtiar Utama Syariah</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/porsi-haji.php">Porsi Haji & Umroh</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/simpanan-mutiara.php">Simpanan Mutiara</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/ijabah.php">Simpanan Berjangka</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/ziswaf.php">ZISWAF</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div class="col-lg-3 col-md-6 col-sm-12 footer-widget">
                    <h3 class="footer-title">Kontak Kami</h3>
                    <ul class="footer-contact">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Jl. KH. Wahid Hasyim No. 27<br>Purwokerto, Jawa Tengah</span>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <span><a href="tel:+62286325303">0286-325303</a></span>
                        </li>
                        <li>
                            <i class="fab fa-whatsapp"></i>
                            <span><a href="<?php echo $social_media['whatsapp']; ?>" target="_blank">0812-8461-8561</a></span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span><a href="mailto:info@tamzis.id">info@tamzis.id</a></span>
                        </li>
                    </ul>
                    <!-- WhatsApp Float Button -->
                    <div class="footer-wa-btn">
                        <a href="<?php echo $social_media['whatsapp']; ?>" target="_blank" class="btn btn-wa">
                            <i class="fab fa-whatsapp"></i> Chat WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <p class="copyright">&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <ul class="footer-bottom-links list-inline pull-right">
                        <li><a href="<?php echo SITE_URL; ?>/company-profile.php">Company Profile</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/alamat-kantor.php">Kontak Kami</a></li>
                        <li><a href="https://karir.tamzis.id" target="_blank">Karir</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Back to Top -->
<a href="#" class="back-to-top" id="back-to-top">
    <i class="fas fa-chevron-up"></i>
</a>

<!-- WhatsApp Float -->
<a href="<?php echo $social_media['whatsapp']; ?>" target="_blank" class="whatsapp-float" id="whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- Scripts -->
<script src="<?php echo SITE_URL; ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/aos.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/jquery.sticky.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/jquery.counterup.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/waypoints.min.js"></script>

<!-- Custom Scripts -->
<script src="<?php echo SITE_URL; ?>/assets/js/main.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/custom.js"></script>

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-53605304-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){ dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'UA-53605304-1');
</script>

<!-- Tawk.to Chat -->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function(){
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/677b458a49e2fd8dfe030734/1igsof9qq';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>

</body>
</html>
