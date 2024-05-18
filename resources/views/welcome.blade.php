<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Personal Abdul</title>
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://cdn.tailwindcss.com"></script>
      <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
                primary: "#23253A",
            },
        }
      }
    }
  </script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-primary">
     @if($message = Session::get('berhasil'))
    <script>
        Swal.fire({
            title: "Terima Kasih",
            text: "{{ Session::get('berhasil') }}",
            icon: "success"
        });
    </script>
@endif
    
    <nav class="flex mx-auto max-w-full py-10 justify-between fixed">
        <div class="ml-28 space-x-2">
            <a href="" class="text-white hover:text-red-600 font-extrabold">Dashboard</a>
            <a href="" class="text-white hover:text-red-600 font-extrabold">Services</a>
            <a href="" class="text-white hover:text-red-600 font-extrabold">Portfolio</a>
            <a href="" class="text-white hover:text-red-600 font-extrabold">About Me</a>
            <a href="{{ url('login') }}" class="text-white hover:text-red-600 font-extrabold">LOGIN</a>
        </div>

        <div class="ml-[650px]">
            <h3 class="text-xl text-white font-bold italic">Abdul<span class="text-red-600 font-semibold">Ghofur.</span></h3>
        </div>
    </nav>

    <section name="home" id="home" class="max-w-full mx-auto flex py-52 px-0">
        <div class="ml-28 text-left">
            <h1 class="text-2xl font-semibold text-white">
                Saya Abdul, saya adalah seorang            
            </h1>
            <span class="font-bold text-red-600 text-5xl">
                Front end Developer
            </span>
            <p class="mt-5 text-white">
                Saya adalah seorang profesional dalam bidang teknologi informasi yang bertanggung jawab
            </p>
            <p class=" text-white mb-4">untuk mengembangkan dan memelihara bagian depan suatu.</p>
            <a href="" class="bg-red-600 text-center py-1 px-10 rounded-md text-white">
                Download CV
            </a>
        </div>

        <div class="ml-10 -mt-14">
            <img src="{{ asset('porto.jpg') }}" alt="" class="w-[350px] h-[350px] rounded-full">
        </div>
    </section>

    <section name="services" id="services" class="max-w-full mx-auto block py-10 px-0">
        <div class="ml-28">
            <h1 class="text-4xl font-semibold text-red-600">
                Services      
            </h1>
            <p class="text-base font-medium text-white">
                Pelayanan kami mencakup desain grafis, pengembangan web, 
            </p>
            <span class="text-base font-medium text-white">dan strategi pemasaran digital.</span>

            <div class="grid grid-cols-5 grid-rows-1 gap-10 mt-5">
                <div class="bg-[#282B47] w-[300px] text-left px-5 rounded-md">
                    <h2 class="py-3 text-white text-lg font-bold">Pengembangan Website</h2>
                    <p class="text-white text-base pb-5">
                        Pengembangan website adalah proses menciptakan situs web dari awal, melibatkan desain, pengkodean, dan pengujian untuk mencapai tujuan yang ditetapkan.
                    </p>
                </div>
                <div class="bg-[#282B47] w-[300px] ml-20 text-left px-5 rounded-md">
                    <h2 class="py-3 text-white text-lg font-bold">Desain Grafis</h2>
                    <p class="text-white text-base pb-5">
                        Desain grafis adalah proses visualisasi ide dan konsep menggunakan elemen-elemen visual seperti gambar, teks, dan warna untuk menciptakan karya visual yang menarik dan berarti.
                    </p>
                </div>
                <div class="bg-[#282B47] ml-40 w-[300px] text-left px-5 rounded-md">
                    <h2 class="py-3 text-white text-lg font-bold">Pemasaran Digital</h2>
                    <p class="text-white text-base pb-5">
                        Pemasaran digital adalah penggunaan platform online dan strategi digital untuk mempromosikan produk atau layanan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section name="portfolio" id="portfolio" class="max-w-full mx-auto block py-40 px-0">
        <div class="ml-28 text-left">
            <h1 class="text-4xl font-semibold text-red-600">
                Portfolio      
            </h1>
            <p class="text-base font-medium text-white">
                portfolio pada web personal adalah bagian dari situs yang menampilkan 
            </p>
            <span class="text-base font-medium text-white">karya-karya atau proyek yang telah dilakukan oleh pemiliknya.</span>

            <div class="grid grid-cols-5 grid-rows-1 gap-10 mt-5">
                <div class="bg-[#282B47] w-[300px] text-center px-5 rounded-md">
                    <img src="{{ asset('1.jpg') }}" alt="" class="w-[300px] h-[200px] py-5">
                    <h2 class="pb-5 text-white text-base font-bold">Pengembangan Website Sekolah SD Bahari</h2>
                </div>

                <div class="bg-[#282B47] ml-20 w-[300px] text-center px-5 rounded-md">
                    <img src="{{ asset('2.jpg') }}" alt="" class="w-[300px] h-[200px] py-5">
                    <h2 class="pb-5 text-white text-base font-bold">Desain Grafis Telur Asin Khas Brebes</h2>
                </div>

                <div class="bg-[#282B47] ml-40 w-[300px] text-center px-5 rounded-md">
                    <img src="{{ asset('digital.jpg ') }}" alt="" class="w-[300px] h-[200px] py-5">
                    <h2 class="pb-5 text-white text-base font-bold">Digital Marketing Agensi Indonesia</h2>
                </div>
            </div>
    </section >
    <section class="flex justify-center w-full mb-10">
        <div class="">
            <h1 class="text-white font-bold text-4xl text-center">CONTACT ME</h1>
    <form method="POST"" class="space-y-8  w-[700px]">
        @csrf
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email :</label>
            <input type="email" id="email" name="email" class="shadow-sm bg-black border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-black dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Masukan Email Anda" required value="{{ (isset($contact)) ? $contact->email:"" }}">
        </div>
        <div>
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama :</label>
            <input type="text" id="nama" name="nama" class="block p-3 w-full text-sm text-gray-900 bg-black rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-black dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Masukan nama anda" required value="{{ (isset($contact)) ? $contact->nama:"" }}">
        </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan :</label>
              <textarea id="message" rows="6" name="pesan" class="block p-2.5 w-full text-sm text-gray-900 bg-black rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-black dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan Pesan Untuk Saya" value="{{ (isset($contact)) ? $contact->pesan:"" }}"></textarea>
          </div>
          <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-green-500 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">KIRIM PESAN</button>
      </form>
      </div>
</section>
    <section name="about" id="about" class=" mx-auto block  px-0 bg-black">
        <h3 class="text-center text-white">Hubungi Saya</h3>
        <div class=" flex justify-center gap-10">
            <a href="https://www.instagram.com/invites/contact/?i=19aqwvvmp92rk&utm_content=hc30rq7" class="text-white w-10 h-10"><img src="{{ asset('instagram-fill.svg') }}" alt=""></a>
            <a href="https://github.com/abdulghofurpratama" class="text-white w-10 h-10"><img src="{{ asset('github.svg') }}" alt=""></a>
            
        </div>
    </section>



</body>
</html>