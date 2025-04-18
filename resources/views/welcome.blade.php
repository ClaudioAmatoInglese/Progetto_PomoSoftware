<x-layout>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1>Progetto Finale Presto By PomoSoftware</h1>
            </div>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        {{-- <div class="row hwight-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
            <div class="col-12 col-md-6 col-lg-4">
                <x-article-card :article="$article" />
            </div>
            @empty
            <div class="col-12">
                <h3 class="text-center">
                    articoli ancora da creare
                </h3>
            </div>
            @endforelse
        </div> --}}
</x-layout>