<x-layout>
    <div class="container-fluid sfondoAnnunci">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12 col-md-6 marginTop">
                <h1 class="mt-5 titolo terziario titoloHome bordoScritte p-5 mb-5">{{__('ui.Index1')}}</h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center">
            @forelse ($articles as $article)
            <div class="col-12 col-md-3">
                <x-article-card :article="$article"/>
            </div>
            @empty
            <div class="col-12 col-md-3">
                <h3 class="text-center primario textShadow3">{{__('ui.Index2')}}</h3>
            </div>
            @endforelse
            <div class="d-flex justify-content-center paginatore">
                {{ $articles->links() }}
            </div>
        </div>
    </div> 
</x-layout>