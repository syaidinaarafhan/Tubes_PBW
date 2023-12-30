<x-app-layout>
    <form action="{{ route('galangdana.storetahap2') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="ml-80 pl-20 flex pt-5 pb-5 bg-stone-300 w-min rounded-full">
        <!-- <div class="flex-none w-40 h-10 bg-yellow-400 rounded-full"> -->
            <div class="flex-none w-40 h-10 ">
                <button class="bg-red-300 rounded-full w-10 h-10" >1</button>  
            </div>
            <div class="flex-none w-40 h-10 ">
                <button class="bg-red-300 rounded-full w-10 h-10" >2</button>  
            </div>
            <div class="flex-none w-40 h-10 ">
                <button class="bg-red-300 rounded-full w-10 h-10" >3</button>  
            </div>
            <div class="flex-none w-40 h-10 ">
                <button class="bg-red-300 rounded-full w-10 h-10" >4 </button>  
            </div>
            <div class="flex-none w-32 h-10 ">
                <button class="bg-red-300 rounded-full w-10 h-10" >5 </button>   
            </div>
        <!-- </div> -->
    </div>


<div class="ml-64 bg-stone-100 w-2/3 sm:rounded-lg">
        <div class="text-xl ml-5 pt-5"  >
            <p>Isi data diri dibawah ini:</p>
        </div >
    <div class="ml-20">
        <div class="mt-10">
            <label for="judulKampanye">Nama / Judul Galang Dana:</label>
            <input type="text" id="judulKampanye" name="judulKampanye" required>
        </div>
        <div class="mt-10">
            <label for="Tujuan">Tujuan Penyelenggaraan Galang Dana</label>
            <textarea id="Tujuan" name="Tujuan" required></textarea>
        </div>
        <div class="mt-10">
            <label for="Lokasi">Lokasi Galang Dana</label>
            <input type="text" id="Lokasi" name="Lokasi" required>
        </div>
            
        <div class="flex  pl-28 flex py-5">
            <div class="mx-10">
                <label for="Lokasi">Tentukan waktu galang dana berlangsung</label>
                <input type="radio" id="perkiraanWaktu" name="perkiraanWaktu" value="30Hari">
                <label>30 Hari</label>
            </div>
            <div class="mx-10">
                <input type="radio" id="perkiraanWaktu" name="perkiraanWaktu" value="60Hari">
                <label>60 Hari</label>
            </div>
            <div class="mx-10">
                <input type="radio" id="perkiraanWaktu" name="perkiraanWaktu" value="90Hari">
                <label>90 Hari</label>
            </div>
            <div class="mx-10">
                <input type="radio" id="perkiraanWaktu" name="perkiraanWaktu" value="120Hari">
                <label>120 Hari</label>
            </div>
        </div>
        
            <div class="mt-10">
                <label for="rincianPenggunaanDana">Rincian Penggunaan Dana: </label>
                <textarea id="rincianPenggunaanDana" name="rincianPenggunaanDana" required></textarea>
            </div>    
            <div class="mt-10">
                <label for="fotoGalangDana">Upload Foto Untuk Galang Dana:  </label>
                <input type="file" id="fotoGalangDana" name="fotoGalangDana" required>
            </div> 
    </div>          
</div>         
        <button class=" text-center ml-80 pl-80 pt-8" type="submit">Lanjut ke Tahap 3</button>
    </form>
    <div class="bg-orange-200 text-center">
        <p>Mari Donasi</p>
    </div>
</x-app-layout>