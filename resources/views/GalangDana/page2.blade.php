<x-app-layout>
    <div>
    <form action="{{ route('galangdana.storeTahap1') }}" method="POST">
        @csrf
    <div class="ml-3 mt-10">
    <div class="ml-96 pl-20 flex pt-5 pb-5 bg-stone-300 w-min rounded-full ">
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
    <div class="ml-64 bg-gray-100 w-2/3 sm:rounded-lg mt-10">
        <div class="text-xl ml-5 pt-5"  > 
            <p>Isi data diri dibawah ini:  </p>
        </div >

        <div class="ml-20">
            <div class="mt-10">
                <label for="namaKTP">Nama KTP :</label>
                <input type="text" id="namaKTP" name="namaKTP" required>
            </div>

            <div class="mt-10">
                <label for="noTelfon">Nomor Telepon:</label>
                <input type="text" id="noTelfon" name="noTelfon" required>
            </div>

            <div class="mt-10">
                <label for="status">Status:</label>
                <input type="text" id="status" name="status" required>
            </div>
            <div class="mt-10">
                <p>Akun Media Sosial</p>
            </div>
                    <div class="flex ml-44  ">                       
                        <div class="mx-10">
                            <input type="radio" id="akunMedsos" name="akunMedsos" value="Instagram">
                            <label>Instagram</label>
                        </div>
                        <div class="mx-10">
                            <input type="radio" id="akunMedsos" name="akunMedsos" value="Facebook">
                            <label>Facebook</label>
                        </div>
                    <div class="mx-10">
                        <input type="radio" id="akunMedsos" name="akunMedsos" value="X">
                        <label>X</label>
                    </div>
            </div>
        </div>    
        <button class="pt-10 ml-96 pl-96" type="submit">Lanjut ke Tahap 2</button>
    </form>
    </div>

        <div class="fixed bottom-0 left-0 w-full bg-orange-300 text-center text-xl p-4">
        <p>Mari Donasi</p>
    </div>
</x-app-layout>

