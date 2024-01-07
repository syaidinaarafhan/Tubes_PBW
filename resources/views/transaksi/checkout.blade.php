<x-payment-layout>

<div class="bg-slate-100 mt-40 w-1/2 ml-96 h-52 flex flex-col justify-center items-center rounded-lg">
    <p class="text-center pt-5 text-3xl font-bold">Nominal: {{ $newPrice }}</p>
    <p class="pt-5 text-center">Pastikan saldo di atas sesuai dengan nominal yang Anda masukkan</p>
    <button class="bg-red-400 rounded-lg w-20 mt-5" id="pay-button">Bayar</button>
</div>




<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_SERVER_KEY') }}"></script>
    <script type="text/javascript">
      document.getElementById('pay-button').onclick = function(){
        // SnapToken acquired from previous step
        snap.pay('{{ $snapToken }}', {
          // Optional
          onSuccess: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          // Optional
          onPending: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          // Optional
          onError: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          }
        });
      };
    </script>

    <div class="fixed bottom-0 left-0 w-full bg-orange-300 text-center text-xl p-4">
        <p>Mari Donasi</p>
    </div>
</x-payment-layout>