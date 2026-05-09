<?php include 'partials/header.php'; ?>

<!-- Page Header (Astra Style) -->
<div class="page-header-astra" style="background: var(--primary-color); padding: 80px 0; text-align: center; color: white;">
    <div class="container">
        <h1 style="margin: 0; font-weight: 700; font-size: 36px;">Simulasi PKR</h1>
        <p style="margin-top: 10px; opacity: 0.8; font-size: 14px;">
            <a href="index.php" style="color: white; text-decoration: none;">Beranda</a> <i class="fa-solid fa-chevron-right" style="font-size: 10px; margin: 0 8px;"></i> Simulasi Pembiayaan Kepemilikan Rumah
        </p>
    </div>
</div>

<!-- Page Content (Astra Clean Article Layout) -->
<div class="page-content-astra" style="padding: 60px 0; min-height: 50vh; background: var(--bg-light);">
    <div class="container">
        <div class="row">
            <!-- Kalkulator Form -->
            <div class="col-md-7">
                <div style="background: white; padding: 40px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); border: 1px solid var(--border-color); margin-bottom: 30px;">
                    <h2 style="margin-top: 0; color: var(--text-color); font-weight: 700; font-size: 24px; margin-bottom: 25px;"><i class="fa-solid fa-calculator" style="color: var(--primary-color); margin-right: 10px;"></i> Estimasi Pembiayaan PKR</h2>
                    <p style="color: var(--text-muted); margin-bottom: 30px;">Masukkan detail rencana pembelian rumah Anda untuk melihat estimasi angsuran bulanan.</p>
                    
                    <form id="form-simulasi">
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label style="font-weight: 600; color: var(--text-color); margin-bottom: 8px; display: block;">Harga Beli Rumah (Rp)</label>
                            <input type="text" id="harga_beli" class="form-control" placeholder="Contoh: 300.000.000" required style="height: 45px; border-radius: 4px; border: 1px solid #ddd; box-shadow: none;">
                        </div>
                        
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label style="font-weight: 600; color: var(--text-color); margin-bottom: 8px; display: block;">Uang Muka / DP</label>
                            <select id="persen_dp" class="form-control" style="height: 45px; border-radius: 4px; border: 1px solid #ddd; box-shadow: none;" onchange="toggleManualDP()">
                                <option value="">Pilih Uang Muka</option>
                                <option value="20">20%</option>
                                <option value="30">30%</option>
                                <option value="manual">Nominal Lainnya (Manual)</option>
                            </select>
                        </div>

                        <div class="form-group" id="manual_dp_group" style="margin-bottom: 20px; display: none;">
                            <label style="font-weight: 600; color: var(--text-color); margin-bottom: 8px; display: block;">Ketik Nominal Uang Muka (Rp)</label>
                            <input type="text" id="manual_dp" class="form-control" placeholder="Contoh: 50.000.000" style="height: 45px; border-radius: 4px; border: 1px solid #ddd; box-shadow: none;">
                        </div>
                        
                        <div class="form-group" style="margin-bottom: 30px;">
                            <label style="font-weight: 600; color: var(--text-color); margin-bottom: 8px; display: block;">Jangka Waktu (Tenor)</label>
                            <select id="jangka_waktu" class="form-control" required style="height: 45px; border-radius: 4px; border: 1px solid #ddd; box-shadow: none;">
                                <option value="">Pilih Jangka Waktu</option>
                                <option value="12">1 Tahun (12 Bulan)</option>
                                <option value="24">2 Tahun (24 Bulan)</option>
                                <option value="36">3 Tahun (36 Bulan)</option>
                                <option value="48">4 Tahun (48 Bulan)</option>
                                <option value="60">5 Tahun (60 Bulan)</option>
                                <option value="120">10 Tahun (120 Bulan)</option>
                                <option value="180">15 Tahun (180 Bulan)</option>
                            </select>
                        </div>
                        
                        <button type="button" onclick="hitungSimulasi()" class="btn btn-primary btn-block" style="background: var(--primary-color); border: none; height: 50px; font-size: 16px; font-weight: 600; border-radius: 4px; transition: 0.3s;">Hitung Estimasi</button>
                    </form>
                </div>
            </div>

            <!-- Hasil Simulasi -->
            <div class="col-md-5">
                <div style="background: var(--primary-color); padding: 40px; border-radius: 8px; box-shadow: 0 10px 30px rgba(2, 4, 91, 0.2); color: white; position: sticky; top: 100px;">
                    <h3 style="margin-top: 0; font-weight: 700; font-size: 20px; margin-bottom: 25px; border-bottom: 1px solid rgba(255,255,255,0.2); padding-bottom: 15px;">Hasil Estimasi</h3>
                    
                    <div style="margin-bottom: 20px;">
                        <p style="margin: 0; opacity: 0.8; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Harga Rumah</p>
                        <h4 id="res_harga" style="margin: 5px 0 0 0; font-weight: 600; font-size: 22px;">Rp 0</h4>
                    </div>
                    
                    <div style="margin-bottom: 20px;">
                        <p style="margin: 0; opacity: 0.8; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Uang Muka (DP)</p>
                        <h4 id="res_dp" style="margin: 5px 0 0 0; font-weight: 600; font-size: 22px;">Rp 0</h4>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <p style="margin: 0; opacity: 0.8; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Plafon Pembiayaan</p>
                        <h4 id="res_plafon" style="margin: 5px 0 0 0; font-weight: 600; font-size: 22px;">Rp 0</h4>
                    </div>
                    
                    <div style="margin-top: 30px; background: rgba(255,255,255,0.1); padding: 20px; border-radius: 6px;">
                        <p style="margin: 0; opacity: 0.9; font-size: 14px; font-weight: 600;">Estimasi Angsuran / Bulan</p>
                        <h2 id="res_angsuran" style="margin: 10px 0 0 0; font-weight: 700; font-size: 32px; color: #f9d342;">Rp 0</h2>
                        <p style="margin: 10px 0 0 0; opacity: 0.7; font-size: 12px; line-height: 1.5;">*Perhitungan ini hanya simulasi/estimasi biaya, tidak mengikat dan dapat berubah sewaktu-waktu.</p>
                    </div>

                    <a href="http://wa.me/6281284618561" target="_blank" class="btn btn-block" style="background: #25D366; color: white; font-weight: 700; height: 50px; line-height: 36px; margin-top: 25px; border-radius: 4px; font-size: 15px;"><i class="fa-brands fa-whatsapp" style="margin-right: 8px; font-size: 18px;"></i> Konsultasi via WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Format Rupiah & Logika Kalkulator -->
<script>
    // Format input menjadi Rupiah
    function formatRupiah(angka, prefix){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
        if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
    }

    document.getElementById('harga_beli').addEventListener('keyup', function(e){
        this.value = formatRupiah(this.value);
    });

    document.getElementById('manual_dp').addEventListener('keyup', function(e){
        this.value = formatRupiah(this.value);
    });

    function toggleManualDP() {
        var select = document.getElementById("persen_dp").value;
        var manualGroup = document.getElementById("manual_dp_group");
        if(select === "manual") {
            manualGroup.style.display = "block";
        } else {
            manualGroup.style.display = "none";
            document.getElementById("manual_dp").value = "";
        }
    }

    function hitungSimulasi() {
        var strHarga = document.getElementById('harga_beli').value.replace(/\./g, '');
        var harga = parseInt(strHarga);
        
        var selectDP = document.getElementById('persen_dp').value;
        var strManualDP = document.getElementById('manual_dp').value.replace(/\./g, '');
        
        var tenor = parseInt(document.getElementById('jangka_waktu').value);

        if(!harga || isNaN(harga)) {
            alert("Silakan masukkan Harga Beli Rumah dengan benar.");
            return;
        }

        if(!selectDP) {
            alert("Silakan pilih Uang Muka.");
            return;
        }

        if(!tenor || isNaN(tenor)) {
            alert("Silakan pilih Jangka Waktu.");
            return;
        }

        var uangMuka = 0;
        if(selectDP === "manual") {
            uangMuka = parseInt(strManualDP);
            if(isNaN(uangMuka)) uangMuka = 0;
        } else {
            uangMuka = harga * (parseInt(selectDP) / 100);
        }

        if(uangMuka > harga) {
            alert("Uang Muka tidak boleh lebih besar dari Harga Beli.");
            return;
        }

        var plafon = harga - uangMuka;
        
        // Asumsi Margin Pembiayaan Syariah (Equivalent Flat ~ 12% per tahun)
        // Ini hanya estimasi/dummy margin untuk simulasi
        var marginRateTahunan = 12 / 100; 
        var totalMargin = plafon * marginRateTahunan * (tenor / 12);
        var totalPembiayaan = plafon + totalMargin;
        var angsuranBulan = totalPembiayaan / tenor;

        // Tampilkan Hasil
        document.getElementById('res_harga').innerText = formatRupiah(harga.toString(), 'Rp ');
        document.getElementById('res_dp').innerText = formatRupiah(uangMuka.toString(), 'Rp ');
        document.getElementById('res_plafon').innerText = formatRupiah(plafon.toString(), 'Rp ');
        document.getElementById('res_angsuran').innerText = formatRupiah(Math.round(angsuranBulan).toString(), 'Rp ');
    }
</script>

<?php include 'partials/footer.php'; ?>
