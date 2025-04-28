<x-layout>
    <div class="container-fluid sfondoAnnunci p-5">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12 col-md-6 marginTop mb-5">
                <h3 class="sottotitolo primario textShadow3"><span class="titolo terziario bordoScritte2">Risultati per la ricerca:</span> {{ $query }}</h3>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-article-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="sottotitolo primario textShadow3 text-center">
                        Nessun annuncio corrispondente.
                    </h3>
                </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center paginatore">
            <div>
                {{ $articles->links() }}
            </div>
        </div>
    </div>
</x-layout>
