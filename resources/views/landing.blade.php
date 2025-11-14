<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Luxe Stay | Temukan Penginapan Impianmu</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'luxe-dark': '#0d1b2a',
            'luxe-accent': '#f4b41a',
          }
        }
      }
    }
  </script>
</head>
<body class="bg-gray-50 text-gray-900">

  <nav class="bg-luxe-dark text-white px-8 py-4 flex items-center justify-between shadow-lg">
    <div class="text-2xl font-bold tracking-wide">
      <span class="text-luxe-accent">LUXE</span> STAY
    </div>
    <ul class="flex space-x-8 font-medium">
      <li><a href="#" class="hover:text-luxe-accent transition">Home</a></li>
      <li><a href="#stay" class="hover:text-luxe-accent transition">Stay</a></li>
      <li><a href="#promo" class="hover:text-luxe-accent transition">Promo</a></li>
      <li><a href="#contact" class="hover:text-luxe-accent transition">Contact-us</a></li>
    </ul>
  </nav>

  <section class="relative h-[90vh] bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white">
      <h1 class="text-5xl font-extrabold mb-2">WELCOME TO <span class="text-luxe-accent">LUXE</span> STAY</h1>
      <p class="text-lg mb-6">Kemewahan yang bisa Anda rasakan di setiap langkah.</p>
      <a href="#stay" class="bg-luxe-accent text-black px-6 py-3 rounded-lg font-semibold hover:bg-[#f4c84a] transition">BOOK NOW</a>
      <p class="mt-8 animate-bounce text-sm">Scroll ↓</p>
    </div>
  </section>

  <section id="stay" class="bg-luxe-dark text-white py-16 text-center">
    <h2 class="text-3xl font-bold mb-10">Temukan Penginapan Impianmu!</h2>
    <div class="flex justify-center flex-wrap gap-8 px-6">

      <div class="bg-white/10 p-4 rounded-xl w-64 hover:scale-105 transition">
        <img src="{{asset('storage/unnamed.png')}}"
        class="rounded-lg mb-3 h-40 w-full object-cover" alt="Hotel">
        <h3 class="text-xl font-semibold">Hotel</h3>
      </div>

      <div class="bg-white/10 p-4 rounded-xl w-64 hover:scale-105 transition">
        <img src="{{asset('storage/image.png')}}"
          class="rounded-lg mb-3 h-40 w-full object-cover" alt="Villa">
        <h3 class="text-xl font-semibold">Villa</h3>
      </div>

      <div class="bg-white/10 p-4 rounded-xl w-64 hover:scale-105 transition">
        <img src="{{asset('storage/image 2.png')}}"
              class="rounded-lg mb-3 h-40 w-full object-cover" alt="Apartemen">
        <h3 class="text-xl font-semibold">Apartemen</h3>
      </div>
    </div>
  </section>

  <section id="promo" class="py-16 text-center bg-white">
    <h2 class="text-3xl font-bold mb-8 text-luxe-dark">Jangan sampai kelewatan promo!</h2>
    <div class="flex justify-center flex-wrap gap-6 px-6">

      <div class="bg-luxe-dark w-96 rounded-xl overflow-hidden shadow-2xl hover:shadow-luxe-accent/50 transition duration-300">
          <div class="h-60 w-full overflow-hidden">
              <img src="{{asset('storage/promo.png')}}"
                   alt="Promo Hilton Hotel"
                   class="w-full h-full object-cover rounded-t-xl transition duration-500 hover:scale-110">
          </div>

          <div class="p-4 text-white">
              <h3 class="text-2xl font-bold mb-1">PROMO: Hilton Hotel</h3>
              <p class="text-sm text-luxe-accent mb-3">Diskon 30% untuk pemesanan 3 malam!</p>
              <a href="#" class="inline-block bg-luxe-accent text-luxe-dark px-4 py-2 rounded-lg font-semibold hover:bg-[#f4c84a] transition">Lihat Detail</a>
          </div>
      </div>

    </div>
  </section>

  <footer id="contact" class="bg-luxe-dark text-white py-10 text-center">
    <p class="text-lg font-medium mb-3">Hubungi Kami</p>
    <p>Email: farn@luxestay.com | Telp: +62 821 7979 3306</p>
    <p class="mt-4 text-sm text-gray-400">© 2025 Luxe Stay. All rights reserved.</p>
  </footer>

</body>
</html>
