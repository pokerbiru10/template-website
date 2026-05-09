<?php include 'partials/header.php'; ?>

<!-- Page Header -->
<div class="page-header-astra" style="background: var(--primary-color); padding: 80px 0; text-align: center; color: white;">
    <div class="container">
        <h1 style="margin: 0; font-weight: 700; font-size: 36px;">Karir TAMZIS</h1>
        <p style="margin-top: 10px; opacity: 0.8; font-size: 14px;">
            <a href="index.php" style="color: white; text-decoration: none;">Beranda</a> <i class="fa-solid fa-chevron-right" style="font-size: 10px; margin: 0 8px;"></i> Rekrutmen & Karir
        </p>
    </div>
</div>

<!-- Page Content with Tabs -->
<div class="page-content-astra" style="padding: 60px 0; min-height: 50vh; background: var(--bg-light);">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                
                <!-- Tab Navigation -->
                <div class="astra-tabs-nav" style="display: flex; border-bottom: 2px solid var(--border-color); margin-bottom: 30px;">
                    <button class="tab-btn active" onclick="openTab('tab-informasi')" style="flex: 1; padding: 15px 20px; background: transparent; border: none; border-bottom: 3px solid var(--primary-color); font-size: 16px; font-weight: 700; color: var(--primary-color); cursor: pointer; outline: none; transition: 0.3s;">
                        <i class="fa-solid fa-circle-info" style="margin-right: 8px;"></i> Informasi
                    </button>
                    <button class="tab-btn" onclick="openTab('tab-pendaftaran')" style="flex: 1; padding: 15px 20px; background: transparent; border: none; border-bottom: 3px solid transparent; font-size: 16px; font-weight: 600; color: var(--text-muted); cursor: pointer; outline: none; transition: 0.3s;">
                        <i class="fa-solid fa-file-signature" style="margin-right: 8px;"></i> Pendaftaran
                    </button>
                </div>

                <!-- Tab Contents Container -->
                <div class="astra-tabs-content" style="background: white; padding: 40px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); border: 1px solid var(--border-color);">
                    
                    <!-- Tab 1: Informasi -->
                    <div id="tab-informasi" class="tab-pane active" style="display: block; animation: fadeIn 0.5s;">
                        <h3 style="margin-top: 0; color: var(--text-color); font-weight: 700; margin-bottom: 20px;">Selamat Datang di Portal Recruitment SDI TAMZIS</h3>
                        <p style="color: var(--text-color); line-height: 1.8; font-size: 16px;">
                            Daftar dan buktikan Anda layak menjadi bagian dari keluarga besar <strong>KSPPS TAMZIS Bina Utama</strong>.
                        </p>
                        <p style="color: var(--text-color); line-height: 1.8; font-size: 16px;">
                            Kami senantiasa mencari talenta-talenta unggul, berintegritas, dan memiliki semangat tinggi untuk berkembang dan maju bersama menyongsong Indonesia Emas 2045. Mari bergabung dan wujudkan karir impian Anda dalam lingkungan kerja yang menerapkan prinsip-prinsip syariah secara modern.
                        </p>
                        
                        <div style="margin-top: 30px; padding: 20px; background: rgba(0, 102, 204, 0.05); border-left: 4px solid var(--primary-color); border-radius: 4px;">
                            <h4 style="margin-top: 0; font-size: 16px; font-weight: 700; color: var(--primary-color);">Tahapan Rekrutmen:</h4>
                            <ul style="margin-bottom: 0; padding-left: 20px; color: var(--text-color); line-height: 1.8;">
                                <li>Pendaftaran secara online melalui tab <strong>Pendaftaran</strong>.</li>
                                <li>Seleksi Administrasi.</li>
                                <li>Psikotes & Wawancara Kompetensi.</li>
                                <li>Tes Kesehatan (Medical Check-Up).</li>
                                <li>Onboarding & Pelatihan Awal.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tab 2: Pendaftaran -->
                    <div id="tab-pendaftaran" class="tab-pane" style="display: none; animation: fadeIn 0.5s;">
                        <h3 style="margin-top: 0; color: var(--text-color); font-weight: 700; margin-bottom: 20px;">Formulir Pendaftaran</h3>
                        
                        <div class="alert alert-info" style="border-radius: 4px; border-left: 4px solid #31708f;">
                            <i class="fa-solid fa-bullhorn" style="margin-right: 10px;"></i> Saat ini belum ada posisi lowongan pekerjaan yang terbuka.
                        </div>

                        <p style="color: var(--text-color); line-height: 1.8; font-size: 16px;">
                            Silakan tinggalkan data diri (Resume/CV) Anda. Tim rekrutmen kami akan menghubungi Anda jika terdapat posisi yang sesuai dengan kualifikasi Anda di masa mendatang.
                        </p>

                        <form style="margin-top: 25px;">
                            <div class="form-group" style="margin-bottom: 20px;">
                                <label style="font-weight: 600; color: var(--text-color); margin-bottom: 8px; display: block;">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Masukkan nama lengkap Anda" required style="height: 45px; box-shadow: none;">
                            </div>
                            <div class="form-group" style="margin-bottom: 20px;">
                                <label style="font-weight: 600; color: var(--text-color); margin-bottom: 8px; display: block;">Email</label>
                                <input type="email" class="form-control" placeholder="email@contoh.com" required style="height: 45px; box-shadow: none;">
                            </div>
                            <div class="form-group" style="margin-bottom: 20px;">
                                <label style="font-weight: 600; color: var(--text-color); margin-bottom: 8px; display: block;">Posisi yang Diminati</label>
                                <select class="form-control" style="height: 45px; box-shadow: none;">
                                    <option>Staff IT</option>
                                    <option>Marketing / Account Officer</option>
                                    <option>Customer Service</option>
                                    <option>Teller</option>
                                    <option>Administrasi</option>
                                </select>
                            </div>
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label style="font-weight: 600; color: var(--text-color); margin-bottom: 8px; display: block;">Unggah CV (PDF)</label>
                                <input type="file" class="form-control" style="padding-top: 10px; height: 45px; box-shadow: none;">
                            </div>
                            <button type="button" class="btn btn-primary btn-block" style="background: var(--primary-color); border: none; height: 50px; font-size: 16px; font-weight: 600; border-radius: 4px;" onclick="alert('Terima kasih. Data Anda telah disimpan dalam database talenta kami.')">Kirim Data Pekerjaan</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(5px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .tab-btn:hover {
        color: var(--primary-color) !important;
    }
</style>

<script>
    function openTab(tabId) {
        // Hide all tabs
        var contents = document.getElementsByClassName('tab-pane');
        for (var i = 0; i < contents.length; i++) {
            contents[i].style.display = 'none';
        }
        
        // Remove active class and styling from all buttons
        var buttons = document.getElementsByClassName('tab-btn');
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove('active');
            buttons[i].style.borderBottom = '3px solid transparent';
            buttons[i].style.fontWeight = '600';
            buttons[i].style.color = 'var(--text-muted)';
        }
        
        // Show the selected tab
        document.getElementById(tabId).style.display = 'block';
        
        // Highlight the clicked button
        var clickedBtn = event.currentTarget;
        clickedBtn.classList.add('active');
        clickedBtn.style.borderBottom = '3px solid var(--primary-color)';
        clickedBtn.style.fontWeight = '700';
        clickedBtn.style.color = 'var(--primary-color)';
    }
</script>

<?php include 'partials/footer.php'; ?>
