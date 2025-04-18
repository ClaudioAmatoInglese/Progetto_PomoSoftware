<x-layout>
    <div class="container-fluid text-center vh-100">
        <div class="row">
            <div class="col-12 titoloHome">
                <h1 class="titolo terziario homeTitolo">POMO-SOFTWARE</h1>
                <div class="text-center">
                    @auth
                        <a href="{{ route('create.article') }}" class="btn btn-primary mt-5">Pubblica Articolo</a>
                    @endauth    
                </div>
            </div>
        </div>
        @if (session('success'))
           <div class="alert alert-success">
              {{ session('success') }}
           </div>
        @endif
        <div class="row height-custom justify-content-center align-items-center py-5">
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
        </div>
    </div>
</x-layout>