<x-layout>
    <div class="container-fluid p-5 sfondoServizi">
        <div class="row justify-content-center text-center mt-5">
            <div class="col-12 pt-5">
                <h2 class=" titolo terziario textShadow2"><span class="titolo bordoScritte">{{ $category->name }}:</span></h2>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-article-card :article="$article" />
                </div>
            @empty
                <div class="col-12 text-center">
                    <h3 class="text-center primario textShadow3 mb-5">Non sono presenti annunci per questa categoria</h3>
                @auth
                    <a class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle" href="{{ route('create.article') }}">Publica un annuncio</a>
                @endauth
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
