<?php include 'partials/header.php'; ?>

<!-- Responsive CSS -->
<style>
	/* Responsive untuk Slider Section */
	@media (max-width: 768px) {
		.slider .carousel-inner img {
			height: 250px;
			object-fit: cover;
		}
	}

	@media (max-width: 480px) {
		.slider .carousel-inner img {
			height: 200px;
			object-fit: cover;
		}
	}

	/* Responsive untuk Product Section */
	@media (max-width: 992px) {
		.product .col-md-4 img {
			width: 280px !important;
			height: auto;
		}
	}

	@media (max-width: 768px) {
		.product .col-md-4 img {
			width: 250px !important;
			height: auto;
		}
	}

	@media (max-width: 480px) {
		.product .col-md-4 {
			display: block !important;
			text-align: center;
			margin: 0 auto 15px;
		}

		.product .col-md-4 img {
			width: 100% !important;
			max-width: 350px;
			height: auto;
		}
	}

	/* Responsive untuk Highlight Section */
	@media (max-width: 768px) {
		.highlight .col-md-4 {
			margin-bottom: 20px;
		}

		.highlight .card-img-wrapper img {
			width: 100%;
			height: auto;
		}
	}

	/* Responsive untuk Services Grid */
	@media (max-width: 768px) {
		.services-grid .service-card {
			margin-bottom: 20px;
		}

		.service-card-body h3 {
			font-size: 18px;
		}

		.service-card-body p {
			font-size: 14px;
		}
	}

	@media (max-width: 480px) {
		.service-card-body h3 {
			font-size: 16px;
		}

		.service-card-body p {
			font-size: 12px;
		}
	}

	/* Responsive untuk Why Section */
	@media (max-width: 768px) {
		.why-inner {
			flex-direction: column;
			text-align: center;
		}

		.why-text {
			margin-bottom: 30px;
		}

		.why-features {
			display: block;
		}

		.why-feature {
			margin-bottom: 20px;
		}
	}

	/* Responsive untuk Stats Bar */
	@media (max-width: 768px) {
		.stat-item {
			flex: 1 0 50%;
			margin-bottom: 20px;
		}

		.stat-num {
			font-size: 28px;
		}
	}

	@media (max-width: 480px) {
		.stat-item {
			flex: 1 0 100%;
		}

		.stat-num {
			font-size: 24px;
		}

		.stat-label {
			font-size: 14px;
		}
	}

	/* Responsive untuk Baitul Maal Grid */
	@media (max-width: 768px) {
		.maal-grid {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}

		.maal-card {
			flex: 1 0 45%;
			margin: 0 10px 20px;
		}
	}

	@media (max-width: 480px) {
		.maal-card {
			flex: 1 0 100%;
			margin: 0 0 20px;
		}
	}

	/* Responsive untuk CTA Strip */
	@media (max-width: 768px) {
		.cta-inner {
			text-align: center;
		}

		.cta-actions {
			margin-top: 20px;
		}

		.cta-actions .btn {
			margin: 5px;
		}
	}

	/* General styling */
	.section-tag {
		color: #ff6b35;
		font-weight: 600;
		text-transform: uppercase;
		font-size: 14px;
	}

	.divider-line {
		width: 60px;
		height: 3px;
		background: #ff6b35;
		margin: 20px 0;
	}

	@media (max-width: 768px) {
		.divider-line {
			margin: 15px 0;
		}
	}
</style>

<article class="astra-content">
    <!-- Hero Slider Section -->
    <section class="slider astra-section">
        <div class="container-fluid no-padding">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="https://tamzis.id/an-component/media/upload-gambar-pendukung/produk/iklan_pembiayaan_4.jpg" width="100%" alt="Iklan Pembiayaan 4">
                    </div>
                    <div class="item">
                        <img src="https://tamzis.id/an-component/media/upload-gambar-pendukung/produk/iklan_pembiayaan_2.jpg" width="100%" alt="Iklan Pembiayaan 2">
                    </div>
                    <div class="item">
                        <img src="https://tamzis.id/an-component/media/upload-gambar-pendukung/produk/iklan_pembiayaan_1.jpg" width="100%" alt="Iklan Pembiayaan 1">
                    </div>
                    <div class="item">
                        <img src="https://tamzis.id/an-component/media/upload-gambar-pendukung/produk/iklan_pembiayaan_3.jpg" width="100%" alt="Iklan Pembiayaan 3">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="fa-solid fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="fa-solid fa-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!-- STATS BAR -->
    <div class="stats-bar">
      <div class="stats-inner">
        <div class="stat-item">
          <span class="stat-num">33+</span>
          <div class="stat-label">Tahun Pengalaman</div>
        </div>
        <div class="stat-item">
          <span class="stat-num">100+</span>
          <div class="stat-label">Kantor Cabang</div>
        </div>
        <div class="stat-item">
          <span class="stat-num">200K+</span>
          <div class="stat-label">Anggota Aktif</div>
        </div>
        <div class="stat-item">
          <span class="stat-num">100%</span>
          <div class="stat-label">Berbasis Syariah</div>
        </div>
      </div>
    </div>

    <!-- LAYANAN KAMI -->
    <div class="section bg-light">
      <div class="section-header">
        <span class="section-tag">Produk Unggulan</span>
        <h2 class="section-title">Layanan Keuangan Syariah Kami</h2>
        <p class="section-sub">Kami hadir dengan produk-produk keuangan syariah yang lengkap untuk memenuhi kebutuhan Anda dan keluarga.</p>
        <div class="divider-line"></div>
      </div>
      <div class="services-grid">
        <a class="service-card" href="https://tamzis.id/page/9-pembiayaan-ikhtiar-utama-syariah">
          <img src="https://tamzis.id/an-component/media/upload-gambar-pendukung/produk/Ikhtiar utama syariah.png" alt="Ikhtiar Utama Syariah">
          <div class="service-card-body">
            <h3>Ikhtiar Utama Syariah</h3>
            <p>Pembiayaan modal usaha dengan prinsip bagi hasil yang adil dan transparan untuk mendorong pertumbuhan bisnis Anda.</p>
          </div>
          <div class="card-link">Selengkapnya</div>
        </a>
        <a class="service-card" href="https://tamzis.id/page/11-simpanan-mutiara">
          <img src="https://tamzis.id/an-component/media/upload-gambar-pendukung/produk/iklan_pembiayaan_2.jpg" alt="Simpanan Mutiara" style="object-position:top">
          <div class="service-card-body">
            <h3>Simpanan Mutiara</h3>
            <p>Tabungan syariah fleksibel dengan nisbah bagi hasil kompetitif. Setor dan tarik kapanpun sesuai kebutuhan Anda.</p>
          </div>
          <div class="card-link">Selengkapnya</div>
        </a>
        <a class="service-card" href="https://tamzis.id/page/18-pembiayaan-porsi-haji-tamzis">
          <img src="https://tamzis.id/an-component/media/upload-gambar-pendukung/produk/pendidikan.png" alt="Porsi Haji Umroh">
          <div class="service-card-body">
            <h3>Porsi Haji & Umroh</h3>
            <p>Wujudkan impian ke Tanah Suci dengan pembiayaan porsi haji dan umroh yang mudah dan sesuai syariah.</p>
          </div>
          <div class="card-link">Selengkapnya</div>
        </a>
        <a class="service-card" href="https://tamzis.id/page/26-rumah-tumbuh-bahagia">
          <img src="https://tamzis.id/an-component/media/upload-gambar-pendukung/produk/iklan_pembiayaan_3.jpg" alt="Rumah Tumbuh Bahagia">
          <div class="service-card-body">
            <h3>Rumah Tumbuh Bahagia</h3>
            <p>Pembiayaan hunian syariah dengan skema yang fleksibel. Wujudkan rumah impian keluarga Anda bersama TAMZIS.</p>
          </div>
          <div class="card-link">Selengkapnya</div>
        </a>
      </div>
    </div>

    <!-- WHY TAMZIS -->
    <section class="why-section">
      <div class="why-inner">
        <div class="why-text">
          <div class="section-header" style="text-align:left;margin-bottom:28px;">
            <span class="section-tag">Mengapa TAMZIS?</span>
            <h2 class="section-title">Kepercayaan Lebih dari Tiga Dekade</h2>
            <p class="section-sub">TAMZIS Bina Utama hadir sejak 1992, melayani masyarakat dengan keuangan syariah yang transparan, amanah, dan memberdayakan.</p>
            <div class="divider-line" style="margin-left:0;"></div>
          </div>
          <div class="why-features">
            <div class="why-feature">
              <div class="why-icon"><i class="fa-solid fa-mosque"></i></div>
              <div>
                <h4>100% Syariah</h4>
                <p>Seluruh produk sesuai fatwa DSN-MUI</p>
              </div>
            </div>
            <div class="why-feature">
              <div class="why-icon"><i class="fa-solid fa-shield-halved"></i></div>
              <div>
                <h4>Terpercaya & Amanah</h4>
                <p>Diawasi OJK dan pengawas syariah</p>
              </div>
            </div>
            <div class="why-feature">
              <div class="why-icon"><i class="fa-solid fa-leaf"></i></div>
              <div>
                <h4>Memberdayakan Umat</h4>
                <p>Fokus pada UMKM dan masyarakat</p>
              </div>
            </div>
            <div class="why-feature">
              <div class="why-icon"><i class="fa-solid fa-location-dot"></i></div>
              <div>
                <h4>Jaringan Luas</h4>
                <p>100+ kantor di Jawa Tengah & DIY</p>
              </div>
            </div>
          </div>
        </div>
        <div class="why-visual">
          <img src="https://tamzis.id/an-component/media/upload-gambar-pendukung/produk/iklan_pembiayaan_1.jpg" alt="TAMZIS">
        </div>
      </div>
    </section>

    <!-- PRODUK SIMPANAN & PEMBIAYAAN -->
    <div style="background:var(--bg-light);">
      <section class="product astra-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center section-header">
                    <span class="section-tag">Pilihan Produk</span>
                    <h2 class="astra-title">Simpanan & Pembiayaan Terbaik</h2>
                    <p class="section-sub text-muted mt-3 mb-4">Temukan produk yang paling sesuai untuk kebutuhan finansial Anda bersama TAMZIS.</p>
                    <div class="astra-divider"></div>
                </div>
            </div>
            <div class="row astra-grid">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="https://tamzis.id/page/10-ijabah">
                        <div class="astra-card">
                            <div class="card-img-wrapper">
                                <img src="https://tamzis.id/an-component/media/upload-gambar-pendukung/produk/iklan_pembiayaan_4.jpg" alt="Simpanan Berjangka" class="img-responsive"/>
                                <span class="card-meta">SIMPANAN</span>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Simpanan Berjangka</h3>
                                <p style="font-size: 14px; color: var(--text-muted); margin-bottom: 15px;">Investasi syariah dengan bagi hasil kompetitif dan tenor fleksibel.</p>
                                <p class="read-more">Lihat Detail <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="https://tamzis.id/page/24-simpanan-pendidikan">
                        <div class="astra-card">
                            <div class="card-img-wrapper">
                                <img src="https://tamzis.id/an-component/media/upload-gambar-pendukung/produk/pendidikan.png" alt="Simpanan Pendidikan" class="img-responsive"/>
                                <span class="card-meta">PENDIDIKAN</span>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Simpanan Pendidikan</h3>
                                <p style="font-size: 14px; color: var(--text-muted); margin-bottom: 15px;">Investasi masa depan anak dengan produk simpanan berbasis syariah.</p>
                                <p class="read-more">Lihat Detail <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="https://tamzis.id/page/9-pembiayaan-ikhtiar-utama-syariah">
                        <div class="astra-card">
                            <div class="card-img-wrapper">
                                <img src="https://tamzis.id/an-component/media/upload-gambar-pendukung/produk/iklan_pembiayaan_2.jpg" alt="Pembiayaan Usaha" class="img-responsive"/>
                                <span class="card-meta">PEMBIAYAAN</span>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Pembiayaan Usaha</h3>
                                <p style="font-size: 14px; color: var(--text-muted); margin-bottom: 15px;">Modal usaha dengan prinsip mudharabah dan musyarakah yang adil.</p>
                                <p class="read-more">Lihat Detail <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
      </section>
    </div>

    <!-- BAITUL MAAL -->
    <div class="section bg-light">
      <div class="section-header">
        <span class="section-tag">Baitul Maal</span>
        <h2 class="section-title">Program Sosial & Keagamaan</h2>
        <p class="section-sub">TAMZIS hadir tidak hanya sebagai lembaga keuangan, tetapi juga sebagai mitra sosial yang memberdayakan umat.</p>
        <div class="divider-line"></div>
      </div>
      <div class="maal-grid">
        <a class="maal-card" href="https://tamzis.id/page/19-tamzis-cinta-masjid">
          <div class="maal-icon"><i class="fa-solid fa-mosque"></i></div>
          <h3>Cinta Masjid</h3>
          <p>Program pemberdayaan dan pengembangan masjid di seluruh wilayah layanan TAMZIS.</p>
        </a>
        <a class="maal-card" href="https://tamzis.id/page/17-qurban-on-tamzis">
          <div class="maal-icon"><i class="fa-solid fa-cow"></i></div>
          <h3>Qurban on Tamzis</h3>
          <p>Layanan qurban mudah dan terpercaya. Titipkan hewan qurban Anda bersama TAMZIS.</p>
        </a>
        <a class="maal-card" href="https://tamzis.id/page/21-zakat-infaq-sedekah-dan-wakaf">
          <div class="maal-icon"><i class="fa-solid fa-hand-holding-heart"></i></div>
          <h3>Zakat, Infaq & Wakaf</h3>
          <p>Tunaikan kewajiban zakat dan amal jariyah Anda melalui TAMZIS yang terpercaya.</p>
        </a>
        <a class="maal-card" href="https://tamzis.id/page/20-program-beasiswa-ustad-ustadzah-beta">
          <div class="maal-icon"><i class="fa-solid fa-book-open-reader"></i></div>
          <h3>BETA – Beasiswa</h3>
          <p>Program beasiswa untuk para ustadz dan ustadzah pejuang pendidikan Islam.</p>
        </a>
      </div>
    </div>

    <!-- HIGHLIGHT BERITA -->
    <div style="background:var(--bg-white);">
      <section class="highlight astra-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center section-header">
                    <span class="section-tag">Tamzis Highlight</span>
                    <h2 class="astra-title">Berita & Kegiatan Terkini</h2>
                    <div class="astra-divider"></div>
                </div>
            </div>
            <div class="row astra-grid">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="https://tamzis.id/artikel/51-menggagas-inovasi-ziswaf-dan-wakaf-produktif-kolaborasi-bmt-dan-kampus-dalam-kuliah-tamu-feb-ui.html">
                        <div class="astra-card">
                            <div class="card-img-wrapper">
                                <img src="https://tamzis.id/an-component/media/upload-gambar-artikel-thumbs/Seminar_ZIS_UI.jpg" alt="Highlight 1" class="img-responsive"/>
                                <span class="card-meta">BERITA TERBARU</span>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Menggagas Inovasi ZISWAF dan Wakaf Produktif: Kolaborasi BMT dan Kampus dalam Kuliah Tamu FEB UI</h3>
                                <p class="read-more">Read more <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="https://tamzis.id/artikel/50-bmt-agawe-makmur-studi-ke-tamzis-menyerap-energi-33-tahun-pengabdian.html">
                        <div class="astra-card">
                            <div class="card-img-wrapper">
                                <img src="https://tamzis.id/an-component/media/upload-gambar-artikel-thumbs/studi_banding_bmt_agawe_makmur.jpg" alt="Highlight 2" class="img-responsive"/>
                                <span class="card-meta">STUDI BANDING</span>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">BMT Agawe Makmur Studi ke TAMZIS: Menyerap Energi 33 Tahun Pengabdian</h3>
                                <p class="read-more">Read more <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="https://tamzis.id/artikel/49-syukur-milad-ke-33-tamzis-area-yogya-tebar-bahagia-di-panti-bina-siwi.html">
                        <div class="astra-card">
                            <div class="card-img-wrapper">
                                <img src="https://tamzis.id/an-component/media/upload-gambar-artikel-thumbs/Berbagi_bahagia_di_area_Yogyakarta.jpg" alt="Highlight 3" class="img-responsive"/>
                                <span class="card-meta">SOSIAL</span>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Syukur Milad ke-33, TAMZIS Area Yogya Tebar Bahagia di Panti Bina Siwi</h3>
                                <p class="read-more">Read more <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
      </section>
    </div>

    <!-- CTA STRIP -->
    <div class="cta-strip">
      <div class="cta-inner">
        <div class="cta-text">
          <h2>Bergabung Bersama Ratusan Ribu Anggota TAMZIS</h2>
          <p>Mulai perjalanan finansial syariah Anda hari ini. Hubungi kami atau kunjungi kantor terdekat.</p>
        </div>
        <div class="cta-actions">
          <a href="http://wa.me/6281284618561?text=Assalamu'alaikum TAMZIS," class="btn-wa" target="_blank">
            <i class="fa-brands fa-whatsapp"></i> Chat WhatsApp
          </a>
          <a href="page.php?title=Alamat+Kantor&url=page/23-alamat-kantor" class="btn-white">
            <i class="fa-solid fa-location-dot"></i> Temukan Kantor
          </a>
        </div>
      </div>
    </div>

</article>

<?php include 'partials/footer.php'; ?>
