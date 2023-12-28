<x-app-layout> 
    <div class="ml-80 pl-20 flex pt-5">
        <div class="flex-none w-40 h-10">
            1
        </div>
        <div class="flex-none w-40 h-10">
            2
        </div>
        <div class="flex-none w-40 h-10">
            3
        </div>
        <div class="flex-none w-40 h-10">
            4
        </div>
        <div class="flex-none w-40 h-10">
            5
        </div>
    </div>
    <div class="bg-white bg-contain  ">
        <div class="text-center text-2xl pt-8">
            <p>Apakah Anda Menyutujui Syarat dan ketentuan untuk Membuka Galang Dana</p>
        </div>
        <div class="pl-80">
            <div class="">
                <p>Pemilik rekening bertanggung jawab atas penggunaan dana yang diterima dari galang dana ini</p>
            </div>
            <div class="">
                <p>Kamu sebagai penggalangan dana bertanggung jawab atas permintaan pencairan dan pelaporan penggunaan dana</p>
            </div>
        </div>
    </div>

    <div class="pt-8 text-center ml-80 pl-80">
        <x-nav-link :href="route('galangdana.page2')" :active="request()->routeIs('galangdana.page2')">
            {{ __('Next') }}
        </x-nav-link>
    </div>
</x-app-layout> 