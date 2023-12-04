<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qwords</title>
    <link rel="shortcut icon" href="aset/img/logoqwordnt.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('aset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('aset/css/responsif.css') }}">
   

</head>
<body>
    <header class="header" id="header">
        <nav class="nav navcontainer">
            <a href="#" class="nav__logo">
                <img src="aset/img/logoqwordnt.png" alt="" >
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
              
                  <li class="nav__item">
                    <div class="dropdown">
                        <button onclick="toggleDropdown(event)" class="dropbtn">Cloud Hosting</button>
                        <div class="drop">
                   
                            <div class="container text-center" style=" padding: 0; max-width: 100rem;">
                              <div class="row row-cols-2">
                                <div class="col"> <a href="">
                                  <h6>Cloud Hosting Lite</h6>
                                  <p>Berbasis DirectAdmin dengan penyimpanan lega</p> 
                                </a></div>
                                <div class="col"> <a href="">
                                  <h6>Cloud Hosting Pro</h6>
                                  <p>Berbasis cPanel, cocok untuk perusahaan, e-commerce, & startup</p> 
                                </a></div>
                                <div class="col">
                                  <a href=""><h6>Cloud Hosting Enterprise</h6>
                                  <p>Hosting performa tinggi dengan dedicated resource</p> </a></div>
                                <div class="col">  <a href="">
                                  <h6>Cloud Hosting WP</h6>
                                  <p>Hosting untuk WordPress performa cepat & gratis Elementator Pro</p> 
                                </a></div>
                                <div class="col"> <a href="">
                                  <h6>Unlimited Hosting</h6>
                                  <p>Hosting dengan Unlimited resource yang dapat diandalkan</p> 
                                </a></div>
                                <div class="col">  <a href="">
                                  <h6>Private Label cPanel Reseller</h6>
                                  <p>Bergabung dan mulai Bisnis Suskses bersama Qwords</p> 
                                </a></div>
                                <div class="col"> <a href="">
                                  <h6>Flex WP</h6>
                                  <p>WordPress Hosting super murah, bebas add-on CPU & RAM</p> 
                                </a></div>
                              </div>
                            </div>
                           
                          
                         
                        
                        
                         
                          
                        
                        
                        </div>
                    </div>
                </li>
                
                <li class="nav__item">
                    <div class="dropdown">
                        <button onclick="toggleDropdown(event)" class="dropbtn">Server</button>
                        <div class="drop">
                          <div class="container text-center">
                            <div class="row row-cols-2">
                              <div class="col"> <a href="">
                                <h6>Cloud VPS KVM</h6>
                                <p>KVM Ultrafast dengan Easy Install & OS terbaru</p> 
                              </a></div>
                              <div class="col"> <a href="">
                                <h6>Server sekolah CBT/Moodle</h6>
                                <p>Untuk kebutuhan e-learning, ujian sekolah, dsb</p> 
                              </a></div>
                              <div class="col">
                                <a href=""><h6>Dedicated Server</h6>
                                <p>Multiple internet Connection up to 10GBps, monitorin 24/7</p> </a></div>
                              <div class="col">  <a href="">
                                <h6>Colocation Server</h6>
                                <p>99 % Uptime Server, UPS Backup, On-Site & Offsite Monitoring</p> 
                              </a></div>
                              <div class="col"> <a href="">
                                <h6>Leased To Owned Server</h6>
                                <p>Sekarang Sewa Nanti jadi hak milik Anda</p> 
                              </a></div>
                              <div class="col">  <a href="">
                                <h6>Fleksibel VPS</h6>
                                <p>KVM Pay as you Growth! Mulai Rp 200/jam</p> 
                              </a></div>
                              <div class="col"> <a href="">
                                <h6>Flex WP</h6>
                                <p>WordPress Hosting super murah, bebas add-on CPU & RAM</p> 
                              </a></div>
                            </div>
                          </div>
                        </div>
                    </div>
                </li>
                <li class="nav__item">
                  <div class="dropdown">
                      <button onclick="toggleDropdown(event)" class="dropbtn">Domain</button>
                      <div class="drop">
                        <div class="container text-center">
                          <div class="row row-cols-2">
                            <div class="col"> <a href="">
                              <h6>Daftar/Transfer Domain</h6>
                              <p>Domain terbaik untuk identitas website Anda</p> 
                            </a></div>
                            <div class="col"> <a href="">
                              <h6>Domain Premium .id</h6>
                              <p>Domain premium berkualitas untuk website anda</p> 
                            </a></div>
                            <div class="col">
                              <a href=""><h6>Domain Backorder</h6>
                              <p>Dapatkan Domain berkualitas yang tidak diperbarui pemiliknya</p> </a></div>
                            <div class="col">  <a href="">
                              <h6>Domain Privacy Protection</h6>
                              <p>Lindungi data pribadi & rahasia Anda dari publik</p> 
                            </a></div>
                            <div class="col"> <a href="">
                              <h6>Sewa Domain</h6>
                              <p>Dapatkan Domain Premium tanpa bayar biaya penuh</p> 
                            </a></div>
                            <div class="col">  <a href="">
                              <h6>Jual Beli & Lelang Domain</h6>
                              <p>Untuk berlipat dari domain cantik dengan sistem lelang</p> 
                            </a></div>
                            <div class="col">  <a href="">
                              <h6>Domain Negotiator/Broker</h6>
                              <p>Broker negosiasikan harga terbaik untuk Domain impian Anda</p> 
                            </a></div>
                            <div class="col">  <a href="">
                              <h6>Private Label Domain Resseler</h6>
                              <p>Paket Reseller Domain dengan harga yang bersaing</p> 
                            </a></div>
                          
                          </div>
                        </div>
                      </div>
                  </div>
              </li>
              <li class="nav__item">
                <div class="dropdown">
                    <button onclick="toggleDropdown(event)" class="dropbtn">Email Suite</button>
                    <div class="drop">
                      <div class="container text-center">
                        <div class="row row-cols-2">
                          <div class="col"> <a href="">
                            <h6>Daftar/Transfer Domain</h6>
                            <p>Domain terbaik untuk identitas website Anda</p> 
                          </a></div>
                          <div class="col"> <a href="">
                            <h6>Titan Email</h6>
                            <p>Bisnis tampil profesional dengan email domain khusus dari titan</p> 
                          </a></div>
                          <div class="col">
                            <a href=""><h6>EC Collaboration Suite</h6>
                            <p>Email premium dengan kapasitas 25GB hingga 1000 akun</p> </a></div>
                          <div class="col">  <a href="">
                            <h6>Microsoft 365</h6>
                            <p>Untuk meningkatkan produktivitas kerja perusahaan</p> 
                          </a></div>
                          <div class="col"> <a href="">
                            <h6>Google Workspace</h6>
                            <p>Layanan Premium dari Google dengan Nama Domain Anda</p> 
                          </a></div>
                          <div class="col">  <a href="">
                            <h6>Mailtogo</h6>
                            <p>Marketing online lebih mudah dijalankan melalui MainToGo</p> 
                          </a></div>
                         
                        
                        </div>
                      </div>
                    </div>
                </div>
            </li>
            <li class="nav__item">
              <div class="dropdown">
                  <button onclick="toggleDropdown(event)" class="dropbtn">Services</button>
                  <div class="drop dropkanan">
                    <div class="container text-center">
                      <div class="row row-cols-2">
                        <div class="col"> <a href="">
                          <h6>SSL</h6>
                          <p>Amankan Komunikasi data anda</p> 
                        </a></div>
                        <div class="col"> <a href="">
                          <h6>Jual/Beli Backlink</h6>
                          <p>Jasa jual/beli backlink aman & berkualitas</p> 
                        </a></div>
                        <div class="col">
                          <a href=""><h6>Extended Support</h6>
                          <p>Bantuan ekstra untuk akun Hosting Cpanel</p> </a></div>
                        <div class="col">  <a href="">
                          <h6>Manage The Box Server</h6>
                          <p>Manage Service untuk mengatur Server Anda</p> 
                        </a></div>
                        <div class="col"> <a href="">
                          <h6>Offline Backup</h6>
                          <p>Backup offline dari server anda</p> 
                        </a></div>
                        <div class="col">  <a href="">
                          <h6>Advanced Backup</h6>
                          <p>Advanced Backup berbasis Acronis</p> 
                        </a></div>
                        <div class="col">  <a href="">
                          <h6>Hosting Insurance</h6>
                          <p>Asuransi downtime untuk Hosting</p> 
                        </a></div>
                        <div class="col">  <a href="">
                          <h6>Licenses</h6>
                          <p>Lisensi Software bagi bisnis anda</p> 
                        </a></div>
                        <div class="col">  <a href="">
                          <h6>Diego VPN</h6>
                          <p>Private Network yang aman, super cepat, dan easy to use</p> 
                        </a></div>
                        <div class="col">  <a href="">
                          <h6>Digital Signature</h6>
                          <p>Tandatangani dokumen online dengan mudah</p> 
                        </a></div>
                       
                      
                      </div>
                    </div>
                  </div>
              </div>
          </li>
          <li class="nav__item">
            <div class="dropdown">
                <button onclick="toggleDropdown(event)" class="dropbtn">Internet Access</button>
                <div class="drop dropkanan">
                  <div class="container text-center">
                    <div class="row row-cols-2">
                      <div class="col"> <a href="">
                        <h6>Broadband Home</h6>
                        <p>Internet untuk kebutuhan rumah dengan koneksi stabil tanpa buffering hingga 1Gbps. Kuota Unlimited</p> 
                      </a></div>
                      <div class="col"> <a href="">
                        <h6>Broadband Business</h6>
                        <p>Jalankan bisnis bisa lebih fokus dengan jaringan internet cepat, koneksi stabil, dan aman</p> 
                      </a></div>
                      <div class="col">
                        <a href=""><h6>Broadband Wireless</h6>
                        <p>Internet dengan teknologi wireless super cepat, bebas FUP untuk kebutuhan rumah & bisnis</p> </a></div>
                      <div class="col">  <a href="">
                        <h6>Check Coverage</h6>
                        <p>Mau pasang internet? Cek apakah rumah Anda tercover internet Qwords?</p> 
                      </a></div>
                      <div class="col"> <a href="">
                        <h6>Offline Backup</h6>
                        <p>Backup offline dari server anda</p> 
                      </a></div>
                      <div class="col">  <a href="">
                        <h6>Advanced Backup</h6>
                        <p>Advanced Backup berbasis Acronis</p> 
                      </a></div>
                      <div class="col">  <a href="">
                        <h6>Hosting Insurance</h6>
                        <p>Asuransi downtime untuk Hosting</p> 
                      </a></div>
                      <div class="col">  <a href="">
                        <h6>Licenses</h6>
                        <p>Lisensi Software bagi bisnis anda</p> 
                      </a></div>
                      <div class="col">  <a href="">
                        <h6>Diego VPN</h6>
                        <p>Private Network yang aman, super cepat, dan easy to use</p> 
                      </a></div>
                      <div class="col">  <a href="">
                        <h6>Digital Signature</h6>
                        <p>Tandatangani dokumen online dengan mudah</p> 
                      </a></div>
                     
                    
                    </div>
                  </div>
                </div>
            </div>
        </li>
        <li class="nav__item">
          <div class="dropdown">
              <button onclick="toggleDropdown(event)" class="dropbtn">Internet Access</button>
              <div class="drop dropkanan">
                <div class="container text-center">
                  <div class="row row-cols-2">
                    <div class="col"> <a href="">
                      <h6>Pembayaran</h6>
                      <p>Informasi lengkap seputar cara bayar, konfirmasi bayar dan faktur pajak</p> 
                    </a></div>
                    <div class="col"> <a href="">
                      <h6>Bantuan 24 jam</h6>
                      <p>Tim Support kami akan membantu menyelesaikan masalah secara soluti & respon cepat,24/7</p> 
                    </a></div>
                    <div class="col">
                      <a href=""><h6>Knowledge Base</h6>
                      <p>Panduan yang lengkap, informasi mengenai Hosting, website, dll</p> </a></div>
                    <div class="col">  <a href="">
                      <h6>FAQ</h6>
                      <p>Temukan jawaban dari pertayaan yang paling sering diajukan di sini</p> 
                    </a></div>
                    <div class="col"> <a href="">
                      <h6>Blog</h6>
                      <p>Temukan tips & artikel menarik seputar hosting, domain, website, dan internet di sini</p> 
                    </a></div>
                    <div class="col">  <a href="">
                      <h6>Kontak</h6>
                      <p>Butuh informasi lebih lanjut? kunjungi outlet kami atau hubungi melalui call center, live chat, dan media sosial</p> 
                    </a></div>        
                  </div>
                </div>
              </div>
          </div>
      </li>
                
                
                  

                </ul>
                
              
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>
          <div class="nav__menu">
            <button class="tombol-utama">Daftar</button>
            <button class="tombol-utama">Login</button>
          </div>
          <div class="nav__toggle" id="nav-toggle">
    <i class="ri-function-line"></i>
    <ul class="dropdown-menu">
        <li><a href="#">Pilihan 1</a></li>
        <li><a href="#">Pilihan 2</a></li>
        <li><a href="#">Pilihan 3</a></li>
        <!-- Tambahkan lebih banyak pilihan sesuai kebutuhan -->
    </ul>
</div>
        </nav>
    </header>
    
    <main class="main">
        <!--=============== HOME ===============-->
      <section class="latarbelakang">
        <section class="home section a" id="home" style="display: flex;">
           
                <div class="home__info container">
                   
            
                    <div class="home__header" >
                        <h3 class="home__subtitle">Cloud Hosting Indonesia untuk <label for="" style="color: #fe9c5a;">Kesuksesan</label>  Websitemu!</h3>
                       
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
                      <button class="tombol-kedua" type=" "style="outline:none">Button</button>
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
                        <li> <h4>Cloud Hosting Lite</h4></li>
                        <li><h3 style="color: #fe9c5a;">Lite Stater</h3></li>
                        <li><h2>Rp. 25.000</h2></li>
                        <br>
                        <li><ul>
                          <div  class="fitur">
                            <h4 class="ri-hard-drive-2-line"></h4>
                            <div>
                              <li style="padding: 0; margin: 0;">Disk</li>
                              <li style="padding: 0; margin: 0;">5 GB</li>
                            </div>
                          </div>

                        </ul></li>
                        <li><ul>
                          <div  class="fitur">
                            <h4 class="ri-speed-up-line"></h4>
                            <div>
                              <li style="padding: 0; margin: 0;">Bandwith</li>
                              <li style="padding: 0; margin: 0;">Unlimited</li>
                            </div>
                          </div>

                        </ul></li>
                        <li><ul>
                          <div  class="fitur">
                            <h4 class="ri-cpu-line"></h4>
                            <div>
                              <li style="padding: 0; margin: 0;">Core CPU</li>
                              <li style="padding: 0; margin: 0;">0.5 Core</li>
                            </div>
                          </div>

                        </ul></li>
                        <li><ul>
                          <div  class="fitur">
                            <h4 class="ri-search-eye-line"></h4>
                            <div>
                              <li style="padding: 0; margin: 0;">Addon</li>
                              <li style="padding: 0; margin: 0;">-</li>
                            </div>
                          </div>

                        </ul></li>
                     
                   
                      
                     
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
                        <li> <h4>Unlimited Hosting</h4></li>
                        <li><h3 style="color: #fe9c5a;">Signature</h3></li>
                        <li><h2>Rp. 95.000</h2></li>
                        <br>
                        <li><ul>
                          <div  class="fitur">
                            <h4 class="ri-hard-drive-2-line"></h4>
                            <div>
                              <li style="padding: 0; margin: 0;">Disk</li>
                              <li style="padding: 0; margin: 0;">Unlimited</li>
                            </div>
                          </div>

                        </ul></li>
                        <li><ul>
                          <div  class="fitur">
                            <h4 class="ri-speed-up-line"></h4>
                            <div>
                              <li style="padding: 0; margin: 0;">Bandwith</li>
                              <li style="padding: 0; margin: 0;">Unlimited</li>
                            </div>
                          </div>

                        </ul></li>
                        <li><ul>
                          <div  class="fitur">
                            <h4 class="ri-cpu-line"></h4>
                            <div>
                              <li style="padding: 0; margin: 0;">Core CPU</li>
                              <li style="padding: 0; margin: 0;">1 Core</li>
                            </div>
                          </div>

                        </ul></li>
                        <li><ul>
                          <div  class="fitur">
                            <h4 class="ri-search-eye-line"></h4>
                            <div>
                              <li style="padding: 0; margin: 0;">Addon</li>
                              <li style="padding: 0; margin: 0;">5/5</li>
                            </div>
                          </div>

                        </ul></li>
                     
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
                        <li> <h4>Cloud Hosting Pro</h4></li>
                        <li><h3 style="color: #fe9c5a;">Pro 1</h3></li>
                        <li><h2>Rp. 100.000</h2></li>
                        <br>
                        <li><ul>
                          <div  class="fitur">
                            <h4 class="ri-hard-drive-2-line"></h4>
                            <div>
                              <li style="padding: 0; margin: 0;">Disk</li>
                              <li style="padding: 0; margin: 0;">20 GB</li>
                            </div>
                          </div>

                        </ul></li>
                        <li><ul>
                          <div  class="fitur">
                            <h4 class="ri-speed-up-line"></h4>
                            <div>
                              <li style="padding: 0; margin: 0;">Bandwith</li>
                              <li style="padding: 0; margin: 0;">Unlimited</li>
                            </div>
                          </div>

                        </ul></li>
                        <li><ul>
                          <div  class="fitur">
                            <h4 class="ri-cpu-line"></h4>
                            <div>
                              <li style="padding: 0; margin: 0;">Core CPU</li>
                              <li style="padding: 0; margin: 0;">1 Core</li>
                            </div>
                          </div>

                        </ul></li>
                        <li><ul>
                          <div  class="fitur">
                            <h4 class="ri-search-eye-line"></h4>
                            <div>
                              <li style="padding: 0; margin: 0;">Addon</li>
                              <li style="padding: 0; margin: 0;">1/1</li>
                            </div>
                          </div>

                        </ul></li>
                     
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
                          <li><h4>Cloud VPS KVM SSD</h4></li>
                          <li><h3 style="color: #fe9c5a;">VPS SC1</h3></li>
                          <li><h2>Rp. 75.000</h2></li>
                          <br>
                          <li><ul>
                            <div  class="fitur">
                              <h4 class="ri-hard-drive-2-line"></h4>
                              <div>
                                <li style="padding: 0; margin: 0;">Disk</li>
                                <li style="padding: 0; margin: 0;">25 GB</li>
                              </div>
                            </div>
  
                          </ul></li>
                          <li><ul>
                            <div  class="fitur">
                              <h4 class="ri-speed-up-line"></h4>
                              <div>
                                <li style="padding: 0; margin: 0;">Bandwith</li>
                                <li style="padding: 0; margin: 0;">Unlimited</li>
                              </div>
                            </div>
  
                          </ul></li>
                          <li><ul>
                            <div  class="fitur">
                              <h4 class="ri-cpu-line"></h4>
                              <div>
                                <li style="padding: 0; margin: 0;">Core CPU</li>
                                <li style="padding: 0; margin: 0;">1 Core</li>
                              </div>
                            </div>
  
                          </ul></li>
                          <li><ul>
                            <div  class="fitur">
                              <h4 class="ri-search-eye-line"></h4>
                              <div>
                                <li style="padding: 0; margin: 0;">Addon</li>
                                <li style="padding: 0; margin: 0;">Unlimited</li>
                              </div>
                            </div>
  
                          </ul></li>
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
              
                <div class="card produklain" style="border-radius: .4rem; border: 1px solid var(--qword-orange);" >
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
                        <i class="ri-store-2-line"></i></h1>
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
                  <h4 class="" >Jaminan keamanan</h4>
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
                         
                        <img src="aset/img/testimoni/testi1.png" alt="" class="testimonifoto" style="width: ;">
                       
                        <div class="kanan">
                        <div class="testimonidetail">
                          <h1 class="ri-double-quotes-l"></h1>
                            <h5 class="testimonideskripsi1">Pelayanan Qwords sangat cepat dan responsif, sehingga tidak butuh waktu lama untuk membantu website kami kembali normal. Terbaik pokoknya, mah!</h5>
                         
                            <p class="testimonideskripsi2 gb">Sebagai media penyedia kabar seputar kota Bandung, Info BDG menggunakan website sebagai rumah informasi. Website kami yang sempat down kini menunjukkan traffic yang tinggi setelah menggunakan dukungan dari Qwords.</p>
                            
             
                              <h6 class="testimoniorang td" >Kuns Kurniawan</h6>
                              <p class="testimoniasal">PR Event Info BDG</p>
                              <div style="text-align: right;">
                                <button class="testimonitombol ttkiri"><</button>
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
        
    
     

         <!--=============== Footer===============-->
        <section class="section b foot" style=" justify-content: center; gap: 5rem;">
         
        <div class="footer footerpading">
         <div class="footerkanan part">
            <img src="aset/img/footer/logodark.png" alt="">
            <h6>PT Qwords Company International</h6>
            <p>Cloud Web Hosting Indonesia. Domain & hosting terbaik dengan akses cepat yang didukung layanan support 24/7</p>
            <img src="aset/img/footer/bsi.png" alt="">
            <h6 style="margin-top: 2rem;">Customer Care</h6>
            <ul>
              <li><a href="">Pembayaran</a></li>
              <li><a href="">Faktur Pajak</a></li>
              <li> <a href="">Bantuan 24 jam</a></li>
              <li> <a href="">Qwords Rewards</a></li>
              <li> <a href="">Knowledge Base</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">Faq</a> </li>
              <li><a href="">Kontak</a> </li>
            </ul>
            
         </div>
         <div class="footertengah1 part">
          <h6>Mengenai Kami</h6>
          <ul>
            <li><a href="">Corporate Website</a></li>
            <li><a href="">Qwords History</a></li>
            <li> <a href="">Qwords Differences</a></li>
            <li> <a href="">Media Publication</a></li>
            <li> <a href="">Network & Infrastructure</a></li>
            <li><a href="">Partner</a></li>
            <li><a href="">Career & Employment</a> </li>
          </ul>
          <h6>MSA/SLA/AUP</h6>
          <ul>
            <li><a href="">Master Service Agreement</a></li>
            <li><a href="">Refund Policy</a></li>
            <li> <a href="">Privacy Policy</a></li>
            <li> <a href="">Product Life Cycle Policy</a></li>
            <li> <a href="">Penggunaan Merek dan Logo</a></li>
            <li><a href="">Migrasi Ke Qwords</a></li>
          </ul>
       
         </div>
         <div class="footertengah2 part">
          <h6>Layanan Lainyan</h6>
          <ul>
            <li><a href="">Extended Support</a></li>
            <li><a href="">Manage The Box Server</a></li>
            <li> <a href="">Flexi Main Domain</a></li>
            <li> <a href="">FTP Backup</a></li>
            <li> <a href="">Offline Backup</a></li>
            <li><a href="">Hosting Insurance</a></li>
            <li><a href="">Software License</a> </li>
            <li><a href="">Digital Signature</a> </li>
          </ul>
          <h6>Layanan Reseller</h6>
          <ul>
            <li><a href="">Afiliasi</a></li>
            <li><a href="">Qwords VIP Partner</a></li>
            <li> <a href="">Private Label Hosting Reseller</a></li>
            <li> <a href="">Private Label Domain Reseller</a></li>
          </ul>
          <h6>Free Tools</h6>
          <ul>
            <li><a href="">Qwords Link-Q</a></li>
            <li><a href="">WhatsApp Link Generator</a></li>
            <li> <a href="">Network Tools</a></li>
            <li> <a href="">Saran Nama Domain</a></li>
          </ul>
         </div>
         <div class="footertengah2 part">
          <h6>Kantor Surabaya</h6>
         <p>Gedung Bursa Efek Indonesia Lt.10, Jl. Taman AIS Nasution No.21, Surabaya 60271 - Indonesia 031 30008800</p>
         <h6>Kantor Yogyakarta</h6>
         <p>Jl. Blotan no. 18 Kayen Wedomartani, Ngemplak, Sleman, Yogyakarta 55584 - Indonesia 0274 6058800</p>
         <h6>Kantor Jakarta</h6>
         <p>Gedung Cyber 1 Lantai 3, Jl.Kuningan Barat no.8, Jakarta 12710 - Indonesia 021 39708800</p>
         <h6>Kantor Bandung</h6>
         <p>Jl. Terusan Setra Indah I No.19, Sukagalih, Sukajadi, Bandung 40163 - Indonesia 022 30508800</p>
         </div>
        </div>
        <div class="footerpading">
          <h4>Terdaftar di PSE, ICANN dan Partner Lainnya</h4>
          <img src="{{ asset('aset/img/footer/sertif.png') }}" alt="" >
        </div>

         <h2>
         </h2>
         
        </section>

       <footer style="justify-content: center; display: flex;">
        <h6>Rafi Rabbani</h6>
        <h6>-Qwords</h6>
       </footer>
        
    
      </main>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-o7mFbCz03q82lhAVeYlF8Mz9IQraUBva8Fj5q8E00Pge4Lv6C5/O9R2hXMN7Ho1N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('aset/js/main.js') }}"></script>
</body>
</html>