<x-payment-layout>

<div class="pt-36 ml-28 ">
    <form action="{{ route('transaksi.store', ['id' => $campaign->id]) }}" method="POST" class="ml-96 pl- bg-slate-50 w-2/5 sm:rounded-lg"> 
        @csrf
        <div class="pt-5 pl-5">
        <x-input-label for="price" >isi Nominal Donasi</x-input-label >
        <x-text-input type="number" id="price" name="price" required/>

        <x-input-label for="username ">username</x-input-label>
        <x-text-input type="text" id="username" name="username" required/>

        <x-input-label for="no_hp ">no hp</x-input-label>
        <x-text-input type="number" id="no_hp" name="no_hp" required/>

        <x-input-label for="pesan ">pesan</x-input-label>
        <textarea type="text" id="pesan" name="pesan" required></textarea>
        
                       
        </div>
                    <div class="pl-64 ml-5 ">
                        <div class="pl-3.5 bg-red-400 w-min rounded-full w-20 h-6">
                                <button id="button" class="">Submit </button>
                        </div>
                    </div>   
    </form>
</div>

<div class="fixed bottom-0 left-0 w-full bg-orange-300 text-center text-xl p-4">
        <p>Mari Donasi</p>
    </div>
</x-payment-layout>

