<x-payment-layout>

    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf
        <x-input-label for="price" >isi Nominal Donasi</x-input-label>
        <x-text-input type="number" id="price" name="price" required/>

        <x-input-label for="username ">username</x-input-label>
        <x-text-input type="text" id="username" name="username" required/>

        <x-input-label for="no_hp ">no hp</x-input-label>
        <x-text-input type="number" id="no_hp" name="no_hp" required/>

        <x-input-label for="pesan ">pesan</x-input-label>
        <textarea type="text" id="pesan" name="pesan" required></textarea>

        <button id="button">
            submit 
        </button>
    </form>
</x-payment-layout>