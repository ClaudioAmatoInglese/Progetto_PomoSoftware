<x-layout>
    <div class="container-fluid vh-100 p-5">
        <div class="row justify-content-center">
            <div class="col-12 pt-5">
                <h1 class="display-3">Articoli della categoria: <span class="fw-bold">{{ $category->name }}</span></h1>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-article-card :article="$article" />
                </div>
            @empty
                <div class="col-12 text-center">
                    <h3>Non ci sono articoli per questa categoria</h3>
                @auth
                    <a class="btn btn-primary" href="{{ route('create.article') }}">Publica un annuncio</a>
                @endauth
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
