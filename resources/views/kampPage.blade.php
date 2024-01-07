<x-app-layout>
    <div class="pt-5">

    <div class="max-w-[600px] mx-auto">
            <img src="{{ asset('/Kampanye/' . $campaign->fotoGalangDana) }}" class="w-full h-auto" alt="Campaign Image">
        </div>

        <div class="ml-64 bg-slate-50 w-2/3 sm:rounded-lg pl-10 h-96">
            <div class="-ml-5 text-2xl pt-7">
                <p class="text-center">{{ $campaign->judulKampanye }}</p>
            </div>
            <div class="bg-slate-200 mt-5 mr-10 h-32 rounded-lg pt-4">
                <p class="pl-10">Tujuan: {{ $campaign->Tujuan }}</p>
            </div>
            <div class="bg-slate-200 mt-5 mr-10 h-32 rounded-lg pt-4">
                <p class="pl-10">Lokasi: {{ $campaign->Lokasi }}</p>
            </div>   
        </div>

        <div class="pl-96 ml-72 flex pt-5">
            <a class="pt-3" href="{{ route('dashboard') }}">Back to Dashboard</a>
            <div class="mx-5">
                <x-primary-button>
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex ">
                        <x-nav-link :href="route('transaksi.index', ['id' => $campaign->id])" :active="request()->routeIs('transaksi.index')" id="pay-button">
                            {{ __('Bayar') }}
                        </x-nav-link>
                    </div>
                </x-primary-button>
            </div>
        </div>
    </div>

    <div class=" bottom-0 left-0 w-full bg-orange-300 text-center text-xl p-4 mt-5">
        <p>Mari Donasi</p>
    </div>
</x-app-layout>
