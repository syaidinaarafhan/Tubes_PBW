<section>
    <div class="bg-slate-50 w-10/12 ml-32 rounded-lg">
        <div class="flex pt-5 flex-wrap mt-10">
            @forelse ($campaigns as $index => $campaign)
                @if($campaign->fotoGalangDana)
                    <div class="ml-32 w-80 h-40 pt-5 text-center mb-40 text-xl">
                        <img src="{{ asset('/Kampanye/' . $campaign->fotoGalangDana) }}" 
                            class="w-full h-auto">
                        <p>{{ $campaign->judulKampanye }}</p>
                        <a href="{{ route('kampPage', ['id' => $campaign->id]) }}">Detail</a>
                    </div>

                    @if(($index + 1) % 3 === 0)
                        <div class="clearfix"></div>
                    @endif
                @endif
            @empty
                <div class="text-center w-full">
                    <p>Anda belum membuka kampanye satupun</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
