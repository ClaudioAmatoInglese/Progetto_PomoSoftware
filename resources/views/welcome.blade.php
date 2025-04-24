<x-layout>
    <div class="container-fluid text-center sfondoWelcome">
        <div class="row">
            <div class="col-12">
                <h1 class="titolo terziario titoloHome textShadow2 bordoScritte">POMO-SOFTWARE</h1>
                <div class="text-center">
                    @guest
                    <a onclick="window.location.href='{{ route('login', ['message' => 'Devi avere un account per farlo.']) }}'" class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle">Pubblica Articolo</a>
                    @endguest
                    @auth
                    <a href="{{ route('create.article') }}" class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle">Pubblica Annuncio</a>
                    @endauth    
                </div>
            </div>
        </div>
        @if (session('success'))
        <div id="popup-success" class="alert alert-success shadow rounded text-center">
            {{ session('success') }}
        </div>
        @endif
        @if (session()->has('errorMessage'))
        <div class="alert alert-danger shadow rounded text-center w-50">
            {{ session('errorMessage') }}">
        </div>
        @endif
        @if (session()->has('message'))
        <div class="alert alert-success text-center shadow rounded w-50">
            {{ session('message') }}
        </div>
        @endif
        <div class="row height-custom justify-content-center align-items-center py-5">
            <div class="row text-center">
                <h3 class="sottotitoloHome primario textShadow3 mb-5">Ultimi annunci:</h3>
            </div>
            @forelse ($articles as $article)
            <div class="col-12 col-md-6 col-lg-4">
                <x-article-card :article="$article" />
            </div>
            @empty
            <div class="col-12">
                <h3 class="text-center primario textShadow3">
                    Nussun annuncio disponibile
                </h3>
            </div>
            @endforelse
        </div>
    </div>
</x-layout>