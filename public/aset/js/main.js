

var index=1;

var deskripsi1=[
"Pelayanan Qwords sangat cepat dan responsif, sehingga tidak butuh waktu lama untuk membantu website kami kembali normal. Terbaik pokoknya, mah!",
"Semoga Qwords dapat terus bertahan, sehingga kami dan masyarakat Indonesia bisa mendapatkan layanan yang terbaik dari Qwords.",
"Hingga saat ini pula, kami tidak pernah menemukan masalah yang berarti dari layanan yang diberikan Qwords. Layanan Customer Service yang sangat baik, membuat kami tidak ingin berpindah dari Qwords."
]
var deskripsi2=[
    "Sebagai media penyedia kabar seputar kota Bandung, Info BDG menggunakan website sebagai rumah informasi. Website kami yang sempat down kini menunjukkan traffic yang tinggi setelah menggunakan dukungan dari Qwords.",
    "Kami, ID Cert, merupakan sebuah perusahaan yang bergerak dalam bidang penyedia jasa informasi keamanan di Indonesia. Oleh karena itu, kami membutuhkan Qwords untuk mendukung kebutuhan kami terhadap server dan hosting yang selalu up selama 24 jam.",
    "Penjualan Rumah Kopi Temanggung 90% dilakukan secara online, salah satunya menggunakan website. Semenjak tahun 2015 hingga saat ini, kami menggunakan hosting dan domain dari Qwords."
]
var orang=[
    "Kuns Kurniawan",
    "Budi Raharjo",
    "Denden Sofiudin"
]
var asal=[
    "PR Event Info BDG",
    "Founder ID Cert",
    " Owner Rumah Kopi temanggung"
]


document.querySelector('.ttkanan').addEventListener("click", function(){
    index = index+1;
    if(index==4){
        index=1;
        document.querySelector(".testimonifoto").setAttribute("src","aset/img/testimoni/testi"+index+".png")
       document.querySelector(".testimonideskripsi1").innerHTML=deskripsi1[index-1];
       document.querySelector(".testimonideskripsi2").innerHTML=deskripsi2[index-1];
       document.querySelector(".testimoniorang").innerHTML=orang[index-1];
       document.querySelector(".testimoniasal").innerHTML=asal[index-1];
    }else{
        document.querySelector(".testimonifoto").setAttribute("src","aset/img/testimoni/testi"+index+".png");
        document.querySelector(".testimonideskripsi1").innerHTML=deskripsi1[index-1];
        document.querySelector(".testimonideskripsi2").innerHTML=deskripsi2[index-1];
        document.querySelector(".testimoniorang").innerHTML=orang[index-1];
        document.querySelector(".testimoniasal").innerHTML=asal[index-1];
    }
    
})

document.querySelector('.ttkiri').addEventListener("click", function(){
    index = index-1;
    if(index==0){
        index=3;
        document.querySelector(".testimonifoto").setAttribute("src","aset/img/testimoni/testi"+index+".png");
        document.querySelector(".testimonideskripsi1").innerHTML=deskripsi1[index-1];
        document.querySelector(".testimonideskripsi2").innerHTML=deskripsi2[index-1];
        document.querySelector(".testimoniorang").innerHTML=orang[index-1];
        document.querySelector(".testimoniasal").innerHTML=asal[index-1];
    }else{
        document.querySelector(".testimonifoto").setAttribute("src","aset/img/testimoni/testi"+index+".png");
         document.querySelector(".testimonideskripsi1").innerHTML=deskripsi1[index-1];
         document.querySelector(".testimonideskripsi2").innerHTML=deskripsi2[index-1];
         document.querySelector(".testimoniorang").innerHTML=orang[index-1];
         document.querySelector(".testimoniasal").innerHTML=asal[index-1];
    }
    
})

function changeDropdownOrientation(selectedOrientation) {
    // Mengambil elemen tombol dropdown
    var dropdownButton = document.querySelector('.btn-group .btn');

    // Mengganti teks tombol dropdown dengan yang dipilih
    dropdownButton.textContent = selectedOrientation;

    // Opsional: Menutup dropdown setelah dipilih
    // document.getElementById('myDropdown').classList.remove('show');
}

function toggleDropdown(event) {
    var allDropdowns = document.querySelectorAll('.drop');
    allDropdowns.forEach(function (dropdown) {
        dropdown.style.display = "none";
    });

    var dropdown = event.target.nextElementSibling;
    if (dropdown.style.display === "block") {
        dropdown.style.display = "none";
    } else {
        dropdown.style.display = "block";
    }
}

// Menutup dropdown jika mengklik di luar dropdown
window.addEventListener('click', function(event) {
    var dropdowns = document.querySelectorAll('.drop');
    dropdowns.forEach(function(dropdown) {
        if (!event.target.closest('.dropdown')) {
            dropdown.style.display = "none";
        }
    });
});