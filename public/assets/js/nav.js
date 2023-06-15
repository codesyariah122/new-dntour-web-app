$(document).ready(function() {
      // Tambahkan event click pada tautan navigasi
  $('nav a').click(function(e) {
        e.preventDefault(); // Mencegah perilaku bawaan dari tautan

        let target = $(this).attr('href'); // Dapatkan target dari atribut href
        let offset = $(target).offset().top; // Dapatkan posisi top dari target
        
        // Lakukan animasi smooth scrolling ke target dengan durasi 800ms
        $('html, body').animate({
          scrollTop: offset
        }, 800);

        // Tambahkan class active pada tautan yang diklik dan hapus class active dari tautan lainnya
        $('nav a').removeClass('active');
        $(this).addClass('active');
      });
});