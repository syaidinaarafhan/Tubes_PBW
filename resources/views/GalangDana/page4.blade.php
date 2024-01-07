<x-app-layout>
    <form action="{{ route('galangdana.storeTahap3') }}" method="POST" enctype="multipart/form-data">
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
        </div>
    </div>

    <div class="ml-64 bg-gray-100 w-2/3  sm:rounded-lg mt-10 h-80">
    <div class="text-xl ml-10 pt-10"  >
            <p>Isi data diri dibawah ini:  </p>
        </div >
<div class="ml-20">        
    <div class="mt-10">
        <label for="fotoKTP">Foto KTP:</label>
        <input type="file" id="fotoKTP" name="fotoKTP" required>
    </div>
    <div class="mt-10"> 
        <label for="berkasLainnya">Berkas Lainnya: </label>
        <input type="file" id="berkasLainnya" name="berkasLainnya">
    </div>
</div>

        <button class="pt-10 ml-96 pl-96" type="submit">Selesai</button>
    </form>
</div>

            <div class=" fixed bottom-0 left-0 w-full bg-orange-300 text-center text-xl p-4 ">
                <p>Mari Donasi</p>
            </div>
</x-app-layout> 