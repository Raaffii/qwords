   
   @extends('app')
   @section('konten')
   <!--=============== HOME ===============-->
   <section class="latarbelakang">
     <section class="home section a" id="home" style="display: flex;">

       <div class="home__info container">


         <div class="home__header">
           <h3 class="home__subtitle">Cloud Hosting Indonesia untuk <label for="" style="color: #fe9c5a;">Kesuksesan</label> Websitemu!</h3>

           <p>Qwords menawarkan layanan Cloud Hosting Akses Cepat, Standar Keamanan Tinggi, Uptime Server 99,99%, Fitur Lengkap dan Dukungan Pelanggan 24 jam untuk memenuhi kebutuhan website Anda.
             Tersertifikasi ISO 27001 dengan Data Center Tier 3 dan Network Tier 1</p>
           <div class="sertifikatt ">
             <img src="aset/img/home/akre1.png" alt="" width="50rem">
             <img src="aset/img/home/akre2.png" alt="" width="100rem">
             <img src="aset/img/home/akre3.png" alt="" width="50rem">
           </div>
           <br>
           <button class="tombol-utama besar" style=" outline: none;">Coba</button>

         </div>


         <img src="aset/img/home/orang2.png" alt="" class="home__img" width="500rem">

       </div>



     </section>

     <!--=============== Scari domain ===============-->
     <section class="sponsor konten b">
       <h2 class="cd">Cek Domain</h2>
       <p class="cd">Nama Domain digunakan untuk mempermudah pengunjung menuju ke situs Anda. Pilih nama domain dengan ekstensi domain yang paling mencerminkan bisnis, produk, atau layanan Anda.
       </p>
       <div class="sponsor__container container grid">
         <form action="">
           <div class="input-group">
             <input type="text" class="form-control" placeholder="Cek Domain" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
             <div class="input-group-append" id="button-addon4">

               <div class="btn-group dropup">
                 <button type="button" class="btn btn-secondary dropdown-toggle tombol-kedua" data-bs-toggle="dropdown" aria-expanded="false">
                   Dropup
                 </button>
                 <ul class="dropdown-menu" id="myDropdown">
                   <li><a href="#sponsor" class="dropdown-item" onclick="changeDropdownOrientation('.'+'id')">.id</a></li>
                   <li><a href="#sponsor" class="dropdown-item" onclick="changeDropdownOrientation('.'+'com')">.com</a></li>
                   <li><a href="#sponsor" class="dropdown-item" onclick="changeDropdownOrientation('.'+'studio')">.studio</a></li>
                 </ul>
               </div>
               <button class="tombol-kedua" type=" " style="outline:none">Cari</button>
             </div>
           </div>
         </form>
       </div>

     </section>

     <!--=============== produk ===============-->
     <section class="konten grid a" id="specs" style="justify-content: center;">

       <h2 class="cd">Club Hosting Indonesia</h2>
       <h2 class="cd">Diskon Hingga 50%</h2>
       <div class="produkrow container2 grid">

         <article class="products__card" style="border: 1px solid #fe9c5a; ">

           <div class="products__content">

             <ul>
               <li>
                 <h4>Cloud Hosting Lite</h4>
               </li>
               <li>
                 <h3 style="color: #fe9c5a;">Lite Stater</h3>
               </li>
               <li>
                 <h2>Rp. 25.000</h2>
               </li>
               <br>
               <li>
                 <ul>
                   <div class="fitur">
                     <h4 class="ri-hard-drive-2-line"></h4>
                     <div>
                       <li style="padding: 0; margin: 0;">Disk</li>
                       <li style="padding: 0; margin: 0;">5 GB</li>
                     </div>
                   </div>

                 </ul>
               </li>
               <li>
                 <ul>
                   <div class="fitur">
                     <h4 class="ri-speed-up-line"></h4>
                     <div>
                       <li style="padding: 0; margin: 0;">Bandwith</li>
                       <li style="padding: 0; margin: 0;">Unlimited</li>
                     </div>
                   </div>

                 </ul>
               </li>
               <li>
                 <ul>
                   <div class="fitur">
                     <h4 class="ri-cpu-line"></h4>
                     <div>
                       <li style="padding: 0; margin: 0;">Core CPU</li>
                       <li style="padding: 0; margin: 0;">0.5 Core</li>
                     </div>
                   </div>

                 </ul>
               </li>
               <li>
                 <ul>
                   <div class="fitur">
                     <h4 class="ri-search-eye-line"></h4>
                     <div>
                       <li style="padding: 0; margin: 0;">Addon</li>
                       <li style="padding: 0; margin: 0;">-</li>
                     </div>
                   </div>

                 </ul>
               </li>




             </ul>


             <br><br>
             <button type="button" class="btn btn-primary btn-lg col-12 produklaintombol">Beli Sekarang</button>

           </div>
         </article>
         <article class="products__card" style="border: 1px solid #fe9c5a;">
           <div class="promobanner promopopuler">
             Terpopuler
           </div>
           <div class="products__content">

             <ul>
               <li>
                 <h4>Unlimited Hosting</h4>
               </li>
               <li>
                 <h3 style="color: #fe9c5a;">Signature</h3>
               </li>
               <li>
                 <h2>Rp. 95.000</h2>
               </li>
               <br>
               <li>
                 <ul>
                   <div class="fitur">
                     <h4 class="ri-hard-drive-2-line"></h4>
                     <div>
                       <li style="padding: 0; margin: 0;">Disk</li>
                       <li style="padding: 0; margin: 0;">Unlimited</li>
                     </div>
                   </div>

                 </ul>
               </li>
               <li>
                 <ul>
                   <div class="fitur">
                     <h4 class="ri-speed-up-line"></h4>
                     <div>
                       <li style="padding: 0; margin: 0;">Bandwith</li>
                       <li style="padding: 0; margin: 0;">Unlimited</li>
                     </div>
                   </div>

                 </ul>
               </li>
               <li>
                 <ul>
                   <div class="fitur">
                     <h4 class="ri-cpu-line"></h4>
                     <div>
                       <li style="padding: 0; margin: 0;">Core CPU</li>
                       <li style="padding: 0; margin: 0;">1 Core</li>
                     </div>
                   </div>

                 </ul>
               </li>
               <li>
                 <ul>
                   <div class="fitur">
                     <h4 class="ri-search-eye-line"></h4>
                     <div>
                       <li style="padding: 0; margin: 0;">Addon</li>
                       <li style="padding: 0; margin: 0;">5/5</li>
                     </div>
                   </div>

                 </ul>
               </li>

             </ul>

             <br><br>
             <button type="button" class="btn btn-primary btn-lg col-12 produklaintombol">Beli Sekarang</button>
           </div>
         </article>
         <article class="products__card" style="border: 1px solid #fe9c5a;">
           <div class="promobanner promopopuler">
             Terpopuler
           </div>
           <div class="products__content">

             <ul>
               <li>
                 <h4>Cloud Hosting Pro</h4>
               </li>
               <li>
                 <h3 style="color: #fe9c5a;">Pro 1</h3>
               </li>
               <li>
                 <h2>Rp. 100.000</h2>
               </li>
               <br>
               <li>
                 <ul>
                   <div class="fitur">
                     <h4 class="ri-hard-drive-2-line"></h4>
                     <div>
                       <li style="padding: 0; margin: 0;">Disk</li>
                       <li style="padding: 0; margin: 0;">20 GB</li>
                     </div>
                   </div>

                 </ul>
               </li>
               <li>
                 <ul>
                   <div class="fitur">
                     <h4 class="ri-speed-up-line"></h4>
                     <div>
                       <li style="padding: 0; margin: 0;">Bandwith</li>
                       <li style="padding: 0; margin: 0;">Unlimited</li>
                     </div>
                   </div>

                 </ul>
               </li>
               <li>
                 <ul>
                   <div class="fitur">
                     <h4 class="ri-cpu-line"></h4>
                     <div>
                       <li style="padding: 0; margin: 0;">Core CPU</li>
                       <li style="padding: 0; margin: 0;">1 Core</li>
                     </div>
                   </div>

                 </ul>
               </li>
               <li>
                 <ul>
                   <div class="fitur">
                     <h4 class="ri-search-eye-line"></h4>
                     <div>
                       <li style="padding: 0; margin: 0;">Addon</li>
                       <li style="padding: 0; margin: 0;">1/1</li>
                     </div>
                   </div>

                 </ul>
               </li>

             </ul>

             <br><br>
             <button type="button" class="btn btn-primary btn-lg col-12 produklaintombol">Beli Sekarang</button>
           </div>
         </article>

         <article class="products__card" style="border: 1px solid #fe9c5a;">

           <!-- Promo Information -->
           <div class="promobanner promospesial">
             Promo Spesial!
           </div>

           <div class="products__content">
             <ul>
               <li>
                 <h4>Cloud VPS KVM SSD</h4>
               </li>
               <li>
                 <h3 style="color: #fe9c5a;">VPS SC1</h3>
               </li>
               <li>
                 <h2>Rp. 75.000</h2>
               </li>
               <br>
               <li>
                 <ul>
                   <div class="fitur">
                     <h4 class="ri-hard-drive-2-line"></h4>
                     <div>
                       <li style="padding: 0; margin: 0;">Disk</li>
                       <li style="padding: 0; margin: 0;">25 GB</li>
                     </div>
                   </div>

                 </ul>
               </li>
               <li>
                 <ul>
                   <div class="fitur">
                     <h4 class="ri-speed-up-line"></h4>
                     <div>
                       <li style="padding: 0; margin: 0;">Bandwith</li>
                       <li style="padding: 0; margin: 0;">Unlimited</li>
                     </div>
                   </div>

                 </ul>
               </li>
               <li>
                 <ul>
                   <div class="fitur">
                     <h4 class="ri-cpu-line"></h4>
                     <div>
                       <li style="padding: 0; margin: 0;">Core CPU</li>
                       <li style="padding: 0; margin: 0;">1 Core</li>
                     </div>
                   </div>

                 </ul>
               </li>
               <li>
                 <ul>
                   <div class="fitur">
                     <h4 class="ri-search-eye-line"></h4>
                     <div>
                       <li style="padding: 0; margin: 0;">Addon</li>
                       <li style="padding: 0; margin: 0;">Unlimited</li>
                     </div>
                   </div>

                 </ul>
               </li>
             </ul>
             <br><br>
             <button type="button" class="btn btn-primary btn-lg col-12 produklaintombol">Beli Sekarang</button>
           </div>
         </article>



       </div>

       <div>
         <img src="assets/img/specs.png" alt="" class="specs__img">
       </div>
       </div>
     </section>

     <!--=============== lihat layanan kami yang lain ===============-->
     <section class="konten grid b layananlain" id="case">

       <h2 class="cd">Lihat Layanan Kami Yang Lain</h2>
       <h5 class="cd">Optimalkan performa website bisnis Anda dengan berbagai layanan berkualitas dari Qwords</h5>

       <div class="card-group" style="gap: 1rem;">

         <div class="card produklain" style="border-radius: .4rem; border: 1px solid var(--qword-orange);">
           <div class="card-body">
             <h5 class="card-title"><i class="ri-shield-check-line"></i> SSL</h5>
             <p class="card-text produklaindeskripsi">Jadikan website Anda lebih terpercaya dan disukai oleh search engine dengan menggunakan ssl Certificate</p>
             <p class="">Mulai Dari</p>
             <h3 class="harga">Rp. 112.000</h3><span class="per">/ tahun</span>
             <button type="button" class="btn btn-primary btn-lg col-12 produklaintombol">Beli Sekarang</button>
           </div>
         </div>
         <div class="card produklain" style="border-radius: .4rem; border: 1px solid var(--qword-orange);">
           <div class="card-body">
             <h5 class="card-title"><i class="ri-server-line"></i> Dedicated Server</h5>
             <p class="card-text produklaindeskripsi">Nikmati kelola Dedicated Server sendiri dengan akses remote dari seluruh dunia tanpa batas</p>
             <p class="">Mulai Dari</p>
             <h3 class="harga">Rp. 499.000</h3><span class="per">/ bulan</span>
             <button type="button" class="btn btn-primary btn-lg col-12 produklaintombol">Beli Sekarang</button>

           </div>
         </div>
         <div class="card produklain" style="border-radius: .4rem; border: 1px solid var(--qword-orange);">
           <div class="card-body">
             <h5 class="card-title"><i class="ri-hard-drive-2-line"></i> Colocation Server</h5>
             <p class="card-text produklaindeskripsi">Akses cepat dari sluruh dunia dengan fasilitas 24x7 full monitoring dengan cooling system terbaik serta fire extinguisher</p>
             <p class="">Mulai Dari</p>
             <h3 class="harga">Rp. 500.000</h3><span class="per">/ bulan</span>
             <button type="button" class="btn btn-primary btn-lg col-12 produklaintombol">Beli Sekarang</button>
           </div>
         </div>


       </div>



       <div>
         <img src="assets/img/specs.png" alt="" class="specs__img">
       </div>
       </div>
     </section>
   </section>
   <!--=============== Penawaran ===============-->
   <section class="penawaran">
     <h2 class="">Solusi Paket Hosting Terbaik dari Kami</h2>
     <div class="card-grouppenawaran">
       <div class="cardpenawaran perusahaan">
         <div class="card-body">
           <h1 class="card-title"><i class="ri-building-line"></i></h1>
           <h4 class="">Perusahaan</h4>
           <p class="deskripsi-penawaran">Wujudkan website perusahaan profesional dan berkelas dengan dukungan web hosting terbaik dan fitur keamanan ekstra</p>

         </div>
         <div class="card-footer footerpenawaran">
           <a href="cek" class="tombolpenawaran" style="text-decoration: none;">Cek</a>
         </div>
       </div>

       <div class="cardpenawaran umkm">
         <div class="card-body">
           <h1 class="card-title">
             <i class="ri-store-2-line"></i>
           </h1>
           <h4 class="">UMKM & Toko Online</h4>
           <p class="deskripsi-penawaran">Memberikan hosting terbaik untuk mendukung kebutuhan website pemasaran barang/jasa secara online</p>
         </div>
         <div class="card-footer footerpenawaran">
           <a href="cek" class="tombolpenawaran" style="text-decoration: none;">Cek</a>
         </div>
       </div>
       <div class="cardpenawaran mahasiswa">
         <div class="card-body">
           <h1 class="card-title"><i class="ri-graduation-cap-line"></i></h1>
           <h4 class="">Komunitas</h4>
           <p class="deskripsi-penawaran">Bikin website organisasi atau komunitas Anda dengan paket hosting unggulan yang ramah kantong</p>
         </div>
         <div class="card-footer footerpenawaran">
           <a href="cek" class="tombolpenawaran" style="text-decoration: none;">Cek</a>
         </div>
       </div>

     </div>
     <!---- line 2 ----->
     <div class="card-grouppenawaran">
       <div class="cardpenawaran sekolah">
         <div class="card-body">
           <h1 class="card-title"><i class="ri-school-line"></i></h1>
           <h4 class="">Sekolah</h4>
           <p class="deskripsi-penawaran">Infrastruktur web hosting terbaik untuk mennunjang kegiatan e-learning. didukung platform MOODLE khusu pembelajaran daring</p>
         </div>
         <div class="card-footer footerpenawaran">
           <a href="cek" class="tombolpenawaran" style="text-decoration: none;">Cek</a>
         </div>
       </div>
       <div class="cardpenawaran developer">
         <div class="card-body">
           <h1 class="card-title"><i class="ri-macbook-line"></i></h1>
           <h4 class="">Developer</h4>
           <p class="deskripsi-penawaran">Tersedia paket hosting indonesia dengan spesifikasi khusu yang dev-friendly. Ekstra NodeJS dan Git Version Control</p>
         </div>
         <div class="card-footer footerpenawaran">
           <a href="cek" class="tombolpenawaran" style="text-decoration: none;">Cek</a>
         </div>
       </div>
       <div class="cardpenawaran bloger">
         <div class="card-body">
           <h1 class="card-title"><i class="ri-vidicon-line"></i></h1>
           <h4 class="">Perusahaan</h4>
           <p class="deskripsi-penawaran">This card has supporting text below as a natural lead-in to additional content.</p>
         </div>
         <div class="card-footer footerpenawaran">
           <a href="cek" class="tombolpenawaran" style="text-decoration: none;">Cek</a>
         </div>
       </div>
     </div>
   </section>
   <!--=============== Komitmen ===============-->
   <section class="penawaran">
     <h2 class="">Komitmen Qwords</h2>
     <div class="card-grouppenawaran">
       <div class="cardkomitmen">
         <div class="card-body cardkomitmen-body">
           <div class="iconkomitmen">
             <h1 class="card-title" style="color: black;"><i class="ri-customer-service-line"></i></h1>
           </div>
           <div class="keterangankomitmen">
             <h4 class="">Layanan 24/7</h4>
             <p class="deskripsi-penawaran">Tim Technical Support dan Customer Service Qwords siap membantu Anda selama 24 jam, 7 hari dengan waktu tanggapan cepat. Anda dapat menghubungi melalui Live chat, Call Center, Email dan Support Ticket.</p>
           </div>
         </div>

       </div>

       <div class="cardkomitmen">
         <div class="card-body cardkomitmen-body">
           <div class="iconkomitmen">
             <h1 class="card-title" style="color: black;"><i class="ri-book-read-line"></i></i></h1>
           </div>
           <div class="keterangankomitmen">
             <h4 class="">Panduan Manual Lengkap</h4>
             <p class="deskripsi-penawaran">Qwords dilengkapi dengan halaman knowledge base berisi tutorial dan tips seputar pengelolaan website dan hosting. Dapat diakses dengan mudah dan solutif

             </p>
           </div>
         </div>

       </div>
     </div>
     <div class="card-grouppenawaran">
       <div class="cardkomitmen">
         <div class="card-body cardkomitmen-body">
           <div class="iconkomitmen">
             <h1 class="card-title" style="color: black;"><i class="ri-router-line"></i></h1>
           </div>
           <div class="keterangankomitmen">
             <h4 class="">Uptime 99.99%</h4>
             <p class="deskripsi-penawaran">Uptime Server di atas 99. 99% minim downtime dengan konfigurasi server yang tepat. Didukung manajemen jaringan dan multiple upstream tier 1 provider network serta multiple peering sehingga server lebih stabil.</p>
           </div>
         </div>

       </div>

       <div class="cardkomitmen">
         <div class="card-body cardkomitmen-body">
           <div class="iconkomitmen">
             <h1 class="card-title" style="color: black;"><i class="ri-shield-line"></i></h1>
           </div>
           <div class="keterangankomitmen">
             <h4 class="">Jaminan keamanan</h4>
             <p class="deskripsi-penawaran">Keamanan menjadi fokus utama kami di Qwords. Tindakan pemantauan keamanan, pembaruan perangkat lunak dan pencegahan yang berstandar & berkelanjutan telah menjadi perhatian utama kami.

             </p>
           </div>
         </div>

       </div>
     </div>

     <div class="card-grouppenawaran">
       <div class="cardkomitmen">
         <div class="card-body cardkomitmen-body">
           <div class="iconkomitmen">
             <h1 class="card-title"><i class="ri-shape-line"></i></h1>
           </div>
           <div class="keterangankomitmen">
             <h4 class="" style="color: black;">Clustered DNS</h4>
             <p class="deskripsi-penawaran">DNS Server Cloud Hosting Qwords terhubung satu dengan yang lainnya. Hal ini membuat DNS Server akan selalu dapat di akses karena saling membackup antar server.</p>
           </div>
         </div>

       </div>

       <div class="cardkomitmen">
         <div class="card-body cardkomitmen-body">
           <div class="iconkomitmen">
             <h1 class="card-title"><i class="ri-vip-diamond-line"></i></h1>
           </div>
           <div class="keterangankomitmen">
             <h4 class="" style="color: black;">High Enterprise Server</h4>
             <p class="deskripsi-penawaran">Keamanan menjadi fokus utama kami di Qwords. Tindakan pemantauan keamanan, pembaruan perangkat lunak dan pencegahan yang berstandar & berkelanjutan telah menjadi perhatian utama kami.

             </p>
           </div>
         </div>

       </div>
     </div>
     <div class="card-grouppenawaran">
       <div class="cardkomitmen">
         <div class="card-body cardkomitmen-body">
           <div class="iconkomitmen">
             <h1 class="card-title" style="color: black;"><i class="ri-base-station-line"></i></h1>
           </div>
           <div class="keterangankomitmen">
             <h4 class="">Tier 1 Network</h4>
             <p class="deskripsi-penawaran">Tier 1 Network merupakan jaringan dunia tanpa transit network, yang membuat jaringan lebih cepat serta jalur routing yang lebih pendek dan ketersediaan backup network.</p>
           </div>
         </div>

       </div>

       <div class="cardkomitmen">
         <div class="card-body cardkomitmen-body">
           <div class="iconkomitmen">
             <h1 class="card-title" style="color: black;"><i class="ri-global-line"></i></h1>
           </div>
           <div class="keterangankomitmen">
             <h4 class="">Peering Network</h4>
             <p class="deskripsi-penawaran">Jaringan di Qwords terhubung langsung ke public peering seperti OpenIXP dan CDIX yang membuat latency atau waktu tunggu pengiriman data semakin kecil.

             </p>
           </div>
         </div>

       </div>
     </div>

   </section>
   <!--=============== Buat website ===============-->
   <section class="komot section c" style="display: flex;">


     <div class="cont2">

       <img src="aset/img/kartun/buatwebsite.jpg" alt="" class="image">
       <div>
         <h2 style="color: black;">Bikin website impian dengan mudah disini hanya 1jutaan</h2>
         <p>Bikin website impian include paket hosting Indonesia terbaik hanya 1 jutaan Jasa pembuatan website profesional untuk Perusahaan, Bisnis & UKM.
           Bikin Website Impian dengan mudah di sini, desain website elegan dan mudah dikelola</p>
         <button type="button" class="btn btn-primary btn-lg col-12 produklaintombol">Coba</button>
       </div>


     </div>
   </section>


   <section class="c section spelanggan" style="text-align: center;">

     <div class="partner" style="text-align: center;">
       <h2 style="color: black;">Telah Dipercaya Oleh 45.000+ Pelanggan Aktif</h2>

       <p></p>
       <div class="pelanggan">
         <div>
           <img src="aset/img/pelanggan/image1.png" alt="">
           <img src="aset/img/pelanggan/image2.png" alt="">
         </div>
         <div>
           <img src="aset/img/pelanggan/image3.png" alt="">
           <img src="aset/img/pelanggan/image4.png" alt="">
           <img src="aset/img/pelanggan/image5.png" alt="">



         </div>


       </div>
       <p>Dan Masih Banyak yang Lainnya</p>
   </section>



   <section class="c section spartner" style="text-align: center;">

     <div class="partner" style="text-align: center;">
       <h2 style="color: black;">Partner Kami</h2>

       <p></p>
       <div class="partner-slide">

         <img src="aset/img/slide/partner/sponsor1.png" alt="">
         <img src="aset/img/slide/partner/sponsor2.png" alt="">
         <img src="aset/img/slide/partner/sponsor3.png" alt="">
         <img src="aset/img/slide/partner/sponsor4.png" alt="">
         <img src="aset/img/slide/partner/sponsor5.png" alt="">
         <img src="aset/img/slide/partner/sponsor6.png" alt="">
         <img src="aset/img/slide/partner/sponsor7.png" alt="">

       </div>
       <div class="partner-slide">
         <img src="aset/img/slide/partner/sponsor1.png" alt="">
         <img src="aset/img/slide/partner/sponsor2.png" alt="">
         <img src="aset/img/slide/partner/sponsor3.png" alt="">
         <img src="aset/img/slide/partner/sponsor4.png" alt="">
         <img src="aset/img/slide/partner/sponsor5.png" alt="">
         <img src="aset/img/slide/partner/sponsor6.png" alt="">
         <img src="aset/img/slide/partner/sponsor7.png" alt="">

       </div>

     </div>
     <a href="https://www.qwords.com/about-qwordscom/partner/?_gl=1%2A1it2rkb%2A_gcl_au%2AMjcxNjYxNDIyLjE3MDA1NzQzODc.&_ga=2.123511947.1060865131.1701347979-1609998120.1700574388" style="color: black;">Partner selengkapny ></a>
   </section>


   <section class="komit section c" style="display: flex;">


     <div class="cont" style="text-align: right; background-color:#F2F2F2;">


       <div>
         <h2 style="color: black;">Garansi 30 Hari Uang Kembali</h2>
         <p>Untuk menjaga kepuasan pelanggan, kami memberikan garansi uang kembali yang berlaku hingga 30 hari setelah hosting aktif.</p>

       </div>
       <img src="aset/img/kartun/garansi.jpg" alt="" class="image">


     </div>
   </section>



   <!--=============== Testimoni ===============-->
   <section class="Testimoni section c ">





     <div class="card-body testimoni">

       <img src="aset/img/testimoni/testi1.png" alt="" class="testimonifoto">

       <div class="kanan">
         <div class="testimonidetail">
           <h1 class="ri-double-quotes-l"></h1>
           <h5 class="testimonideskripsi1">Pelayanan Qwords sangat cepat dan responsif, sehingga tidak butuh waktu lama untuk membantu website kami kembali normal. Terbaik pokoknya, mah!</h5>

           <p class="testimonideskripsi2 gb">Sebagai media penyedia kabar seputar kota Bandung, Info BDG menggunakan website sebagai rumah informasi. Website kami yang sempat down kini menunjukkan traffic yang tinggi setelah menggunakan dukungan dari Qwords.</p>


           <h6 class="testimoniorang td">Kuns Kurniawan</h6>
           <p class="testimoniasal">PR Event Info BDG</p>
           <div style="text-align: right;">
             <button class="testimonitombol ttkiri">
               <</button>
                 <button class="testimonitombol ttkanan">></button>

           </div>

         </div>

       </div>



     </div>
   </section>

   <section class="section c pertayaan section-pertayaan">
     <h2>Pertanyaan seputar Layanan Web Hosting Qwords</h2>
     <div style="display:flex; flex-direction: column;" class="listpertayaan">
       <button class="btn btn-" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
         Apa itu web hoting?
       </button>
       <div class="collapse" id="collapseExample1">
         <div class="card card-body jawab">
           Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar website. File dan data tersebut di simpan di dalam server yang terkoneksi dengan internet sehingga data tersebut dapat diakses oleh siapa saja, kapan saja dan di mana saja.

           Penjelasan lebih lanjut dapat Anda baca pada artikel ini : https://qwords.com/blog/apa-itu-hosting/
         </div>
       </div>
       <button class="btn btn-" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
         Ada berapa jenis hosting di Qwords?
       </button>
       <div class="collapse" id="collapseExample2">
         <div class="card card-body jawab">
           <p>Untuk mendukung kesuksesan bisnis di era digital, Qwords menghadirkan beragam paket hosting Indonesia yang bisa dipilih sesuai kebutuhan.</p>
           <h3>Value Performance</h3>
           <p>Value Cloud Hosting merupakan paket cloud hosting murah Indonesia yang dirancang khusus untuk keperluan sederhana seperti UKM, toko online, blog, website sederhana, hingga email untuk penggunaan personal.

             Hosting murah dari Qwords untuk pengguna baru website atau Anda yang baru terjun ke dalam industri/bisnis online. Storage sesuai kebutuhan, fleksibel, dan ekstra lega mulai 3 GB hingga</p>
           <h3>High Performance Cloud Hosting Bisnis</h3>
           <p>Productivity starts here! Berikan Hosting terbaik untuk bisnis Anda. Kinerja lebih produktif dengan performa tinggi & optimal untuk website profesional perusahaan, e-commerce, startup bisnis, serta support Moodle--platform open source yang memudahkan sistem pembelajaran online</p>
           <h3>High Performance Cloud Hosting Enterprise</h3>
           <p>Nikmati versi terbaik dedicated hosting melalui paket HPCH Enterprise. Tampil lebih premium dengan resource dedicated hanya untuk 1 pengguna. Performa lebih stabil, bebas gangguan dari Cloud Hosting lainnya. More productivity, less drama</p>
           <h3>WordPress Hosting</h3>
           <p>
             Hosting khusus bagi Anda yang menggunakan CMS WordPress. Dilengkapi CloudPop untuk kinerja WordPress yang optimal.

             WordPress Hosting Indonesia yang dioptimalkan dengan CloudPOP</p>
           <h3>Unlimited Hosting</h3>
           <p>Paket Unlimited Hosting Indonesia yang dapat diandalkan, tanpa batasan! Free Domain & SSL Certificate dengan Uptime Server 99,99%.

             Didukung Website Builder dan Web Accelerator dengan Module LSAPI PRO + CRIU. Akses internasional ngebut, serta garansi 30 hari uang kembali.</p>





         </div>
       </div>
       <button class="colap btn btn-" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample" style="border: none;">
         Apa kelebihan dari cloud hosting Qwords?
       </button>
       <div class="collapse" id="collapseExample3">
         <div class="card card-body jawab">
           <p>Cloud hosting Qwords sudah dipercaya 45,000+ pelanggan dari dalam dan luar negeri. Anda akan mendapatkan jaminan keamanan, Uptime 99.99%, dukungan teknis selama 24 jam, 7 hari melalui Live chat, Call Center, atau Support Ticket dan masih banyak lagi.</p>
         </div>
       </div>

       <button class="btn btn-" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
         Mengapa saya perlu web hosting?
       </button>
       <div class="collapse" id="collapseExample4">
         <div class="card card-body jawab">
           <p>Tanpa web hosting, Anda tidak bisa membuat website company profile, portal berita, blog pribadi, website toko online, atau jenis website lain yang bisa diakses secara online.

             Penyedia layanan web hosting seperti Qwords.com membantu memastikan data-data dan file website Anda tetap aman serta responsif ketika diakses oleh pengguna secara online.</p>
         </div>
       </div>
       <button class="btn btn-" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">
         Bagaiman cara membeli hosting?
       </button>
       <div class="collapse" id="collapseExample5">
         <div class="card card-body jawab">
           <p>Kami memiliki panduan cara membeli hosting di Qwords sesuai kebutuhan dengan mudah yang dapat Anda akses selengkapnya di sini. Beli hosting Indonesia di Qwords kini juga semakin mudah dengan adanya berbagai metode pembayaran</p>
         </div>
       </div>
       <button class="btn btn-" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample">
         Apakah saya bisa transfer Hosting ke Qwords Cloud Web Hosting Indonesia?
       </button>
       <div class="collapse" id="collapseExample6">
         <div class="card card-body jawab">
           <p>Ya, Anda bisa melakukan transfer Hosting dari provider lain ke Qwords Cloud Hosting Indonesia. Caranya, silahkan lakukan pemesanan Cloud Hosting baru sesuai paket yang Anda inginkan, kemudian informasikan kebutuhan migrasi pada tim support kami, lalu proses migrasi akan dibantu hingga selesai.</p>
         </div>
       </div>
     </div>

   </section>





   @endsection