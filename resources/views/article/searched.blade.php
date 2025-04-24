<x-layout>
    <div class="container-fluid sfondoAnnunci">
        <div class="row justify-content-center align-items-center text-center mt-5">
            <div class="col-12 mt-5">
                <h3 class="sottotitolo primario textShadow3"><span class="titolo bordoScritte2">Risultati per la ricerca:</span> {{ $query }}</h3>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-article-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="sottotitolo primario textShadow3 text-center">
                        Nessun annuncio corrispondente
                    </h3>
                </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center">
            <div>
                {{ $articles->links() }}
            </div>
        </div>
    </div>
</x-layout>
