<?php include 'partials/header.php'; ?>

<?php
// Ambil parameter title dan url dari GET
$title = isset($_GET['title']) ? htmlspecialchars($_GET['title']) : 'Halaman';
$url_param = isset($_GET['url']) ? $_GET['url'] : '';
$content_html = '';

if ($url_param) {
    // Fetch data asli
    $full_url = "https://tamzis.id/" . $url_param;
    
    // Gunakan stream context agar request tidak ditolak
    $options = [
        "http" => [
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)\r\n"
        ]
    ];
    $context = stream_context_create($options);
    $html = @file_get_contents($full_url, false, $context);
    
    if ($html) {
        $dom = new DOMDocument();
        // Mute errors untuk HTML yang kurang rapi
        @$dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'), LIBXML_NOERROR | LIBXML_NOWARNING);
        $xpath = new DOMXPath($dom);
        
        // Cari container utama yang berisi paragraf atau gambar (biasanya di dalam div col-lg-12)
        $nodes = $xpath->query('//div[contains(@class, "col-lg-12")]');
        
        if ($nodes->length > 0) {
            foreach($nodes as $node) {
                // Lewati breadcrumb dan title box
                if (strpos($node->nodeValue, 'Home >') !== false) continue;
                if ($node->getElementsByTagName('h1')->length > 0) continue;
                
                // Jika memiliki p atau img, ini pasti konten utamanya
                if ($node->getElementsByTagName('p')->length > 0 || $node->getElementsByTagName('img')->length > 0) {
                    $innerHTML = '';
                    foreach ($node->childNodes as $child) {
                        $innerHTML .= $dom->saveHTML($child);
                    }
                    $content_html .= $innerHTML;
                }
            }
        }
        
        // Jika masih kosong, coba fallback ambil semua p
        if (empty($content_html)) {
            $p_nodes = $xpath->query('//p');
            foreach($p_nodes as $p) {
                $content_html .= $dom->saveHTML($p);
            }
        }
        
    } else {
        $content_html = "<div class='alert alert-danger'>Gagal memuat konten dari server sumber (Koneksi gagal atau halaman tidak ditemukan).</div>";
    }
} else {
    $content_html = "<div class='alert alert-warning'>Parameter URL tidak ditemukan.</div>";
}
?>

<!-- Page Header (Astra Style) -->
<div class="page-header-astra" style="background: var(--primary-color); padding: 80px 0; text-align: center; color: white;">
    <div class="container">
        <h1 style="margin: 0; font-weight: 700; font-size: 36px;"><?= $title ?></h1>
        <p style="margin-top: 10px; opacity: 0.8; font-size: 14px;">
            <a href="index.php" style="color: white; text-decoration: none;">Beranda</a> <i class="fa-solid fa-chevron-right" style="font-size: 10px; margin: 0 8px;"></i> <?= $title ?>
        </p>
    </div>
</div>

<!-- Page Content (Astra Clean Article Layout) -->
<div class="page-content-astra" style="padding: 60px 0; min-height: 50vh; background: var(--bg-light);">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <!-- Content Box -->
                <div style="background: white; padding: 50px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); border: 1px solid var(--border-color);">
                    <h2 style="margin-top: 0; color: var(--text-color); font-weight: 700; font-size: 28px; margin-bottom: 25px;">Tentang <?= $title ?></h2>
                    
                    <div class="content-body" style="color: var(--text-color); line-height: 1.8; font-size: 16px;">
                        <?= $content_html ?>
                    </div>
                    
                    <div style="margin-top: 40px; padding-top: 20px; border-top: 1px solid #eee;">
                        <a href="index.php" style="color: var(--primary-color); font-weight: 600; text-decoration: none;">
                            <i class="fa-solid fa-arrow-left" style="margin-right: 5px;"></i> Kembali ke Beranda
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>
