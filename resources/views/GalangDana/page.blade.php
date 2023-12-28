<x-app-layout> 
    <div class="ml-80 pl-20 flex pt-10 pb-5 bg-stone-300 w-min">
        <!-- <div class="flex-none w-40 h-10 bg-yellow-400 rounded-full"> -->
            <div class="flex-none w-40 h-10 bg-yellow-400 rounded-full">
                <button class="bg-red-300 rounded-full w-10 h-10" >1</button>  
            </div>
            <div class="flex-none w-40 h-10 bg-yellow-400 rounded-full">
                <button class="bg-red-300 rounded-full w-10 h-10" >2</button>  
            </div>
            <div class="flex-none w-40 h-10 bg-yellow-400 rounded-full">
                <button class="bg-red-300 rounded-full w-10 h-10" >3</button>  
            </div>
            <div class="flex-none w-40 h-10 bg-yellow-400 rounded-full">
                <button class="bg-red-300 rounded-full w-10 h-10" >4</button>  
            </div>
            <div class="flex-none w-40 h-10 bg-yellow-400 rounded-full ">
                <button class="bg-red-300 rounded-full w-10 h-10" >5</button>  
            </div>
        <!-- </div> -->
    </div>
    <div class="ml-64 bg-stone-100 w-2/3 sm:rounded-lg ">
        <div class="text-2xl text-center pt-10">
            <p>Apakah Anda Menyutujui Syarat dan ketentuan untuk Membuka Galang Dana</p>
        </div>
        <div class="text-lg ml-40 " >
            <div class="mt-10">
                <p>Pemilik rekening bertanggung jawab atas penggunaan dana yang diterima dari galang dana ini</p>
            </div>
            <div class="mt-5 ">
                <p>Kamu sebagai penggalangan dana bertanggung jawab atas permintaan pencairan dan pelaporan penggunaan dana</p>
            </div>
        </div>
    </div>

    <div class="text-right mr-24">
        <x-nav-link :href="route('galangdana.page2')" :active="request()->routeIs('galangdana.page2')">
            {{ __('Next') }}
        </x-nav-link>
    </div>
    <div class="bg-orange-200 text-center">
        <p>Mari Donasi</p>
    </div>
</x-app-layout> 