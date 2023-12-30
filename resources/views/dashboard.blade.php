<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('Ingin Donasi Hari Ini?') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
        <div class="flex pt-20">
        @foreach ($campaigns as $campaign)
        @if($campaign->fotoGalangDana)
            <div class="ml-28 w-80 h-40 pt-5 text-center bg-blue-400">
                <img src="{{ asset('/Kampanye/' . $campaign->fotoGalangDana) }}" 
                alt="{{ $campaign->judulKampanye }}">
                <p>{{ $campaign->Tujuan }}</p>
                <p>{{ $campaign->Lokasi }}</p>
                <a href="{{ route('kampPage', ['id' => $campaign->id]) }}">Detail</a>
            </div>
        @endif
    @endforeach

        </div>
    <x-primary-button>
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
            <x-nav-link :href="route('galangdana.page')" :active="request()->routeIs('galangdana.page')">
                {{ __('GalangDana') }}
            </x-nav-link>
        </div>
    </x-primary-button>

    <x-primary-button>
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
            <x-nav-link :href="route('transaksi.index')" :active="request()->routeIs('transaksi.index')">
                {{ __('Bayar') }}
            </x-nav-link>
        </div>
    </x-primary-button>
</x-app-layout>
