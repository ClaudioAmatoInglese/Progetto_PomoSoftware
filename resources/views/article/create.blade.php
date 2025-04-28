<x-layout>
    <div class="container-fluid sfondoServizi p-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center creaAnnuncio">
                <h3 class="titolo terziario bordoScritte text-center mt-5">{{__('ui.Create1')}}</h3>
            </div>
        </div>
        <div class="row justify-content-center align-items-center heigh-custom">
            <div class="col-12 col-md-6 primario">
                <livewire:create-article-form/>
            </div>
        </div>
    </div>
</x-layout>