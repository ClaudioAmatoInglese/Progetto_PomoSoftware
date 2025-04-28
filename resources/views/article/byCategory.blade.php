<x-layout>
    <div class="container-fluid p-5 sfondoServizi">
        <div class="row justify-content-center text-center">
            <div class="col-12 marginTop">
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
                    <h3 class="text-center primario textShadow3 mb-5">{{__('ui.ByCategory1')}}</h3>
                @auth
                    <a class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle" href="{{ route('create.article') }}">{{__('ui.Crea Annuncio')}}</a>
                @endauth
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
