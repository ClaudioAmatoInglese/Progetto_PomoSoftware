<x-layout>
    <div class="container-fluid vh-100 mb-5">
        <div class="row height-custom justify-content-center align-items-center text-center">
            <div class="col-12 margineTop">
                <h1 class="mt-5 titolo terziario titoliShadow">Tutti gli annunci:</h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
            <div class="col-12 col-md-3">
                <x-article-card :article="$article"/>
            </div>
            @empty
            <div class="col-12 col-md-3">
                <h3 class="text-center">Non ci sono ancora articoli</h3>
            </div>
            @endforelse
        </div>
    </div> <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>
</x-layout>