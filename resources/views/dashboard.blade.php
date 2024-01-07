<x-app-layout>
<div class="">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight pt-5 pl-20">
            {{ __('Ingin Donasi Apa Hari Ini?') }}
        </h2>
        
        <div class="flex bg-white mt-2 w-11/12 ml-16 rounded-lg">
        <P class="text-xl pl-96 pt-2" >Ingin Menggalang Dana Untuk saling membantu ? Ajukan Disini</P>
        <div class="pl-48">
        <x-primary-button>
            <div class="">
                <x-nav-link :href="route('galangdana.page')" :active="request()->routeIs('galangdana.page')">
                    {{ __('GalangDana') }}
                </x-nav-link>
            </div> 
        </x-primary-button>
        </div>
    </div>

    <div class="bg-slate-50 w-10/12 ml-32 rounded-lg">
    <div class="flex pt-5 flex-wrap mt-10">
    @foreach ($campaigns as $index => $campaign)
        @if($campaign->fotoGalangDana)
            <div class="ml-32 w-80 h-40 pt-5 text-center mb-40 text-xl">
                <img src="{{ asset('/Kampanye/' . $campaign->fotoGalangDana) }}" 
                 class="w-full h-auto">
                <p>{{ $campaign->judulKampanye }}</p>
                <a href="{{ route('kampPage', ['id' => $campaign->id]) }}">Detail</a>
            </div>

            <!-- Tambahkan elemen clearfix setiap setelah 3 elemen -->
            @if(($index + 1) % 3 === 0)
                <div class="clearfix"></div>
            @endif
        @endif
    @endforeach
</div>
</div>

    
</div>

<div class="bottom-0 left-0 w-full bg-orange-300 text-center text-xl p-4 mt-10">
                <p>Mari Donasi</p>
            </div> 
</x-app-layout>
