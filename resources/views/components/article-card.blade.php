<div class="container-fluid card mx-auto card-w text-center sfondoCard cardDimension cards article-card">
    {{-- <img src="" alt="placeholder{{$article->title}}" class="card-img-top"> --}}
    {{-- Immagine della User 5 --}}
    {{-- fine modifica user 5 --}}
    <div class="row justify-content-center align-items-center text-center">
        <h4 class="card-title primario textShadow3 mt-3">{{$article->title}}</h4>
        <img src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(700, 400) : 'https://picsum.photos/300' }}" alt="immagine placeholder" class="card-img-top img-fluid rounded-5">
        <div class="d-flex flex-column align-items-center text-center mt-2">
            <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-secondary sfondoBottone mb-1 vociNavbar bordoScritte2 bordoBottone">{{__('ui.Categoria')}} {{__("ui.{$article->category->name}")}}</a>
            <h6 class="card-subtitle primario textShadow3 mb-2 mt-2">{{__('ui.Prezzo')}} {{$article->price}}€</h6>
            <a href="{{route('show.article', compact('article'))}}" class="btn sfondoBottone2 mb-1 coloreNavTitle vociNavbar bordoScritte2 bordoBottone mt-3">{{__('ui.Dettaglio')}}</a>
            <p class="primario textShadow3">{{ $article->created_at->diffForHumans() }}</p>
        </div>
    </div>
</div>