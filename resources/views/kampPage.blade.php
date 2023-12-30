<x-app-layout>
<h1>{{ $campaign->judulKampanye }}</h1>
    <p>Tujuan: {{ $campaign->Tujuan }}</p>
    <p>Lokasi: {{ $campaign->Lokasi }}</p>
    <a href="{{ route('dashboard') }}">Back to Dashboard</a>

    <x-primary-button>
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
            <x-nav-link :href="route('transaksi.index')" :active="request()->routeIs('transaksi.index')">
                {{ __('Bayar') }}
            </x-nav-link>
        </div>
    </x-primary-button>
</x-app-layout> 