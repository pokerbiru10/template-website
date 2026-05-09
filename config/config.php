<?php
// Database Configuration
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "tamzis_db");

// Site Configuration
define("SITE_URL", "http://localhost/tamzis-landing");
define("SITE_NAME", "KSPPS Tamzis Bina Utama");
define("SITE_TAGLINE", "Baittuttamwil Tamzis: Happy LIFE, Happy Syariah");

// Theme Configuration
define("THEME_DIR", "assets");
define("CSS_DIR", THEME_DIR . "/css");
define("JS_DIR", THEME_DIR . "/js");
define("IMAGES_DIR", THEME_DIR . "/images");

// Social Media Links
$social_media = [
    "whatsapp" => "http://wa.me/6281284618561?text=Assalamu`alaikum TAMZIS,",
    "instagram" => "https://www.instagram.com/tamzisbinautama/",
    "facebook" => "https://www.facebook.com/tamzisbinautama/",
    "youtube" => "https://youtube.com/c/tamzisbinautama"
];

// Menu Navigation
$menu_items = [
    "Beranda" => "index.php",
    "Profile" => "#",
    "Baitul Maal" => "#",
    "Simpanan" => "#",
    "Pembiayaan" => "#",
    "Simulasi" => "#",
    "Info Karir" => "https://karir.tamzis.id"
];

// Product/Service Links
$services = [
    "Ikhtiar Utama Syariah" => "page/9-pembiayaan-ikhtiar-utama-syariah",
    "Porsi Haji dan Umroh" => "page/18-pembiayaan-porsi-haji-tamzis",
    "Wakaf Uang Tamzis (WUT)" => "page/15-wakaf-uang-tamzis-wut",
    "Zakat on Tamzis" => "page/13-zakat-on-tamzis"
];
?>
