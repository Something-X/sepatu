<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="images/logos.png">
    <title>ShoeCycle</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-100">
<div class="flex z-10 items-center justify-center bg-gray-950 w-auto h-16 shadow-lg filter fixed top-0 left-0 right-0">
    <div class="flex space-x-20 text-white">
        <a href="" class="text-orange-500">KERANJANG</a>
        <a href="b1" class="hover:text-orange-500 hover:underline transition-all duration-300 ease-in-out">RIWAYAT</a>
    </div>
  </div>
  <!-- border subtotal  -->
  <div class="sticky -top-11">
    <div class="border-2 border-gray-600 shadow-xl w-[380px] h-[710px] ml-[870px] mt-24 rounded-lg">
      <h1 class="text-slate-950 pt-3 pl-2">Jumlah Pesanan</h1>
      <div>

      </div>
      <div class="flex pt-5">
        <h1 class="text-slate-950 pl-5 text-sm font-semibold">Subtotal (3 produk)</h1>
        <h1 class="text-slate-950 ml-24 pr-3 text-sm font-semibold">1.250.000 IDR</h1>
      </div>
      <div class="pt-4">
        <h1 class="pl-5 text-sm font-semibold ">Pilih Rekening :</h1>
        <div class="ml-5 mt-2">
          <img src="images/dana.jpg" alt="" class="w-16 h-11 rounded-lg"><h1 class="pl-20 -mt-8">17625936</h1>
          <img src="images/ovo.jpg" alt="" class="w-16 h-11 mt-5 rounded-lg"><h1 class="pl-20 -mt-8">87645762</h1>
          <img src="images/gopay.jpg" alt="" class="w-16 h-11 mt-5 rounded-lg"><h1 class="pl-20 -mt-8">17627543</h1>
          <img src="images/ShopeePay.jpg" alt="" class="w-16 h-11 mt-5 rounded-lg"><h1 class="pl-20 -mt-8">17689065</h1>
        </div>
        <div class="w-px h-[215px] ml-[190px] -mt-[205px] bg-gray-400"></div>
        <div class="ml-52 -mt-[213px]">
          <img src="images/bca.png" alt="" class="w-16 h-11 rounded-lg"><h1 class="pl-20 -mt-8">18751936</h1>
          <img src="images/bni.png" alt="" class="w-16 h-11 mt-5 rounded-lg"><h1 class="pl-20 -mt-8">80535762</h1>
          <img src="images/bri.jpg" alt="" class="w-16 h-11 mt-5 rounded-lg"><h1 class="pl-20 -mt-8">10917243</h1>
          <img src="images/mandiri.png" alt="" class="w-16 h-11 mt-5 rounded-lg"><h1 class="pl-20 -mt-8">17019065</h1>
        </div>
      </div>
      <div class="flex flex-col items-center justify-center ml-4 mt-7 h-[170px] w-[350px] max-w-md p-4 border-2 border-dashed border-gray-400 rounded-lg bg-gray-50">
       <label class="flex flex-col items-center justify-center h-40 w-full cursor-pointer">
         <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18M13 8l4 4-4 4m4-4H3"></path>
         </svg>
         <span class="mt-2 text-sm text-gray-600 text-center">seret dan lepas atau klik untuk <br> mengunggah</span>
         <input type="file" class="hidden" accept=".svg, .png, .jpg, .jpeg" onchange="validateFile(this)">
       </label>
        <span class="mt-2 text-xs text-gray-500">format yang diterima: SVG, PNG, JPG (Max: 800x400)</span>
      <script>
        function validateFile(input) {
          const file = input.files[0];
          if (!file) return;
      
          const img = new Image();
          const objectUrl = URL.createObjectURL(file);
          img.onload = function () {
            if (img.width > 800 || img.height > 400) {
              alert("Image exceeds maximum dimensions of 800x400 pixels.");
              input.value = ""; // Clear the input if validation fails
            }
            URL.revokeObjectURL(objectUrl); // Clean up
          };
          img.src = objectUrl;
        }
      </script>
      </div>
      <div>
        <!-- tombol kirim bukti pembayaran  -->
        <button class="overflow-hidden relative w-[350px] ml-4 mt-5 p-2 h-12 bg-white text-black border-2 border-black rounded-md text-base font-semibold cursor-pointer z-10 group hover:border-orange-600">Kirim Bukti Pembayaran
          <span class="absolute w-[380px] h-32 -top-8 -left-2 bg-orange-200 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
          <span class="absolute w-[380px] h-32 -top-8 -left-2 bg-orange-400 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left">
          </span>
          <span class="absolute w-[380px] h-32 -top-8 -left-2 bg-orange-600 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-left">
          </span>
          <span class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2.5 left-40 z-10">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" fill-rule="evenodd" class=""><g><path d="M22.736 3.297a1.275 1.275 0 0 0-1.852-1.318l-18.952 9.95a1.272 1.272 0 0 0 .179 2.333L8 16.281 19 6l-8.902 11 8.596 2.947a1.276 1.276 0 0 0 1.673-1.014zM8.832 17.623v3.27a1.274 1.274 0 0 0 2.12.952l2.838-2.522z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path></g></svg>
          </span>
        </button>
        <!-- tombol kosongkan keranjang  -->
        <button class="overflow-hidden relative w-[350px] ml-4 mt-3 p-2 h-12 bg-white text-black border-2 border-black hover:border-gray-900 rounded-md text-base font-semibold cursor-pointer z-10 group">Kosongkan Keranjang
          <span class="absolute w-[380px] h-32 -top-8 -left-2 bg-gray-400 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
          <span class="absolute w-[380px] h-32 -top-8 -left-2 bg-gray-600 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left">
          </span>
          <span class="absolute w-[380px] h-32 -top-8 -left-2 bg-gray-900 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-left">
          </span>
          <span class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2.5 left-40 z-10">
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="m62.205 150 26.569 320.735C90.678 493.865 110.38 512 133.598 512h244.805c23.218 0 42.92-18.135 44.824-41.265L449.795 150H62.205zm118.781 302c-7.852 0-14.458-6.108-14.956-14.063l-15-242c-.513-8.276 5.771-15.395 14.033-15.908 8.569-.601 15.381 5.757 15.908 14.033l15 242c.531 8.57-6.25 15.938-14.985 15.938zM271 437c0 8.291-6.709 15-15 15s-15-6.709-15-15V195c0-8.291 6.709-15 15-15s15 6.709 15 15v242zm89.97-241.062-15 242c-.493 7.874-7.056 14.436-15.908 14.033-8.262-.513-14.546-7.632-14.033-15.908l15-242c.513-8.276 7.764-14.297 15.908-14.033 8.262.513 14.546 7.632 14.033 15.908zM451 60h-90V45c0-24.814-20.186-45-45-45H196c-24.814 0-45 20.186-45 45v15H61c-16.569 0-30 13.431-30 30 0 16.567 13.431 30 30 30h390c16.569 0 30-13.433 30-30 0-16.569-13.431-30-30-30zm-120 0H181V45c0-8.276 6.724-15 15-15h120c8.276 0 15 6.724 15 15v15z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path></g></svg>
          </span>
        </button>
      </div>
      <div class="justify-items-center mt-4">
        <h1 class="text-xs text-gray-950 font-semibold">Atau <a href="" class="text-orange-600">Lanjut Belanja &#8594;</a></h1>
      </div>
    </div>
  </div>
  
  <!-- list barang di keranjang  -->
  <h1 class="font-bold -mt-[700px] ml-3">Keranjnag (2)</h1>
  <!-- barang 1 -->
    <div class="w-[840px] h-[400px] ml-3 mt-5">
        <div class="flex bg-gray-950 w-44 h-12 rounded-br-[15px] rounded-tl-[15px]">
          <img src="images/logos.png" alt="Logo" class="h-11 w-auto px-1.5">
          <p class="font-semibold text-white mt-3">ShoeCycle</p>
        </div>
        <!-- gambar produk  -->
        <div class="mt-4">
            <img src="images/s1.png" alt="" class="bg-gray-300 rounded-lg w-[300px]">
        </div>
        <div class="ml-[360px] -mt-[304px]">
            <!-- merek -->
             <h1 class="font-semibold">OxFord</h1>
            <!-- detail merek -->
             <h1 class="max-w-96 text-gray-700">Oxford Jazz 2.0 Hitam - Sepatu Pria Oxford Casual Kulit - Hitam Coklat</h1>
             <!-- jumlah  -->
             <h1 class="mt-12">Jumlah</h1>
             <div class="mt-2 w-20 p-2 border-2 border-gray-300 bg-slate-100 rounded-md focus:outline-none focus:border-gray-500 text-center">1</div>
        </div>
        <div class="ml-[800px] -mt-[190px]">
          <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" x="0" y="0" viewBox="0 0 329.269 329" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M194.8 164.77 323.013 36.555c8.343-8.34 8.343-21.825 0-30.164-8.34-8.34-21.825-8.34-30.164 0L164.633 134.605 36.422 6.391c-8.344-8.34-21.824-8.34-30.164 0-8.344 8.34-8.344 21.824 0 30.164l128.21 128.215L6.259 292.984c-8.344 8.34-8.344 21.825 0 30.164a21.266 21.266 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25l128.21-128.214 128.216 128.214a21.273 21.273 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25 8.343-8.34 8.343-21.824 0-30.164zm0 0" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
          </a>
        </div>
        <div class="ml-[725px] mt-[255px]">
          <!-- harga  -->
           <h1 class="text-orange-600 font-semibold">300.000 IDR</h1>
        </div>
    </div>

    <!-- barang 2  -->
    <div class="w-[840px] h-[400px] ml-3 mt-5">
        <div class="flex bg-gray-950 w-44 h-12 rounded-br-[15px] rounded-tl-[15px]">
          <img src="images/logos.png" alt="Logo" class="h-11 w-auto px-1.5">
          <p class="font-semibold text-white mt-3">ShoeCycle</p>
        </div>
        <!-- gambar produk  -->
        <div class="mt-4">
            <img src="images/s2.png" alt="" class="bg-gray-300 rounded-lg w-[300px]">
        </div>
        <div class="ml-[360px] -mt-[304px]">
            <!-- merek -->
             <h1 class="font-semibold">NIKE</h1>
            <!-- detail merek -->
             <h1 class="max-w-96 text-gray-700">Air Max Oketo</h1>
             <!-- jumlah  -->
             <h1 class="mt-12">Jumlah</h1>
             <div class="mt-2 w-20 p-2 border-2 border-gray-300 bg-slate-100 rounded-md focus:outline-none focus:border-gray-500 text-center">1</div>
        </div>
        <div class="ml-[800px] -mt-[190px]">
          <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" x="0" y="0" viewBox="0 0 329.269 329" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M194.8 164.77 323.013 36.555c8.343-8.34 8.343-21.825 0-30.164-8.34-8.34-21.825-8.34-30.164 0L164.633 134.605 36.422 6.391c-8.344-8.34-21.824-8.34-30.164 0-8.344 8.34-8.344 21.824 0 30.164l128.21 128.215L6.259 292.984c-8.344 8.34-8.344 21.825 0 30.164a21.266 21.266 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25l128.21-128.214 128.216 128.214a21.273 21.273 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25 8.343-8.34 8.343-21.824 0-30.164zm0 0" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
          </a>
        </div>
        <div class="ml-[725px] mt-[255px]">
          <!-- harga  -->
           <h1 class="text-orange-600 font-semibold">400.000 IDR</h1>
        </div>
    </div>

    <!-- barang 3  -->
    <div class="w-[840px] h-[400px] ml-3 mt-5">
        <div class="flex bg-gray-950 w-44 h-12 rounded-br-[15px] rounded-tl-[15px]">
          <img src="images/logos.png" alt="Logo" class="h-11 w-auto px-1.5">
          <p class="font-semibold text-white mt-3">ShoeCycle</p>
        </div>
        <!-- gambar produk  -->
        <div class="mt-4">
            <img src="images/s3.png" alt="" class="bg-gray-300 rounded-lg w-[300px]">
        </div>
        <div class="ml-[360px] -mt-[304px]">
            <!-- merek -->
             <h1 class="font-semibold">Lavio</h1>
            <!-- detail merek -->
             <h1 class="max-w-96 text-gray-700">Alden</h1>
             <!-- jumlah  -->
             <h1 class="mt-12">Jumlah</h1>
             <div class="mt-2 w-20 p-2 border-2 border-gray-300 bg-slate-100 rounded-md focus:outline-none focus:border-gray-500 text-center">1</div>
        </div>
        <div class="ml-[800px] -mt-[190px]">
          <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" x="0" y="0" viewBox="0 0 329.269 329" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M194.8 164.77 323.013 36.555c8.343-8.34 8.343-21.825 0-30.164-8.34-8.34-21.825-8.34-30.164 0L164.633 134.605 36.422 6.391c-8.344-8.34-21.824-8.34-30.164 0-8.344 8.34-8.344 21.824 0 30.164l128.21 128.215L6.259 292.984c-8.344 8.34-8.344 21.825 0 30.164a21.266 21.266 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25l128.21-128.214 128.216 128.214a21.273 21.273 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25 8.343-8.34 8.343-21.824 0-30.164zm0 0" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
          </a>
        </div>
        <div class="ml-[725px] mt-[255px]">
          <!-- harga  -->
           <h1 class="text-orange-600 font-semibold">350.000 IDR</h1>
        </div>
    </div>

    <!-- barang 4  -->
    <div class="w-[840px] h-[400px] ml-3 mt-5">
        <div class="flex bg-gray-950 w-44 h-12 rounded-br-[15px] rounded-tl-[15px]">
          <img src="images/logos.png" alt="Logo" class="h-11 w-auto px-1.5">
          <p class="font-semibold text-white mt-3">ShoeCycle</p>
        </div>
        <!-- gambar produk  -->
        <div class="mt-4">
            <img src="images/s4.png" alt="" class="bg-gray-300 rounded-lg w-[300px]">
        </div>
        <div class="ml-[360px] -mt-[304px]">
            <!-- merek -->
             <h1 class="font-semibold">JILITU</h1>
            <!-- detail merek -->
             <h1 class="max-w-96 text-gray-700">T-39</h1>
             <!-- jumlah  -->
             <h1 class="mt-12">Jumlah</h1>
             <div class="mt-2 w-20 p-2 border-2 border-gray-300 bg-slate-100 rounded-md focus:outline-none focus:border-gray-500 text-center">1</div>
        </div>
        <div class="ml-[800px] -mt-[190px]">
          <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" x="0" y="0" viewBox="0 0 329.269 329" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M194.8 164.77 323.013 36.555c8.343-8.34 8.343-21.825 0-30.164-8.34-8.34-21.825-8.34-30.164 0L164.633 134.605 36.422 6.391c-8.344-8.34-21.824-8.34-30.164 0-8.344 8.34-8.344 21.824 0 30.164l128.21 128.215L6.259 292.984c-8.344 8.34-8.344 21.825 0 30.164a21.266 21.266 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25l128.21-128.214 128.216 128.214a21.273 21.273 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25 8.343-8.34 8.343-21.824 0-30.164zm0 0" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
          </a>
        </div>
        <div class="ml-[725px] mt-[255px]">
          <!-- harga  -->
           <h1 class="text-orange-600 font-semibold">200.000 IDR</h1>
        </div>
    </div>
</body>
</html>