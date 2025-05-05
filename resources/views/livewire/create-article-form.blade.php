<div class="min-vh-100">
    <form wire:submit="store">
        {{-- Titolo Articolo --}}
        <div class="mb-3">
            <label for="title" class="form-label textShadow3">{{__('ui.Create2')}}</label>
            <input type="text" id="title" class="form-control" wire:model.blur="title" placeholder="{{__('ui.Create2.1')}}" @error('title') is-invalid @enderror required>
            @error('title') 
            <div id="popup-success" class="alert alert-danger">{{ $message }}</div>    
            @enderror
        </div>
        
        {{-- Descrizione Articolo--}}
        <div class="mb-3">
            <label for="description" class="form-label textShadow3">{{__('ui.Create3')}}</label>
            <textarea id="description" cols="30" row="10" class="form-control" wire:model.blur="description" rows="5" placeholder="{{__('ui.Create3.1')}}" @error('description') is-invalid @enderror required></textarea>
        </div>
        @error('description') 
        <div id="popup-success" class="alert alert-danger">{{ $message }}</div>    
        @enderror
        
        {{-- Prezzo Articolo --}}
        <div class="mb-3">
            <label for="price" class="form-label textShadow3">{{__('ui.Create4')}}</label>
            <input type="text" id="price" class="form-control" wire:model.blur="price" placeholder="{{__('ui.Create4.1')}}" @error('price') is-invalid @enderror required>
            @error('price') 
            <div id="popup-success" class="alert alert-danger">{{ $message }}</div>    
            @enderror
        </div>
        
        {{-- Categorie --}}
        <div class="mb-3">
            <label for="category" class="form-label textShadow3">{{__('ui.Create5')}}</label>
            <select id="category" wire:model.blur="category" class="form-control" @error('category') is-invalid @enderror required>
                <option value="">{{__('ui.Create5.1')}}</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{__("ui.$category->name")}}</option>
                @endforeach
            </select>
            @error('category') 
            <div id="popup-success" class="alert alert-danger">{{ $message }}</div>    
            @enderror
        </div>
        
        {{-- Articolo creato con successo --}}
        
        {{-- @if (session()->has('success'))
        <div id="popup-success" class="alert alert-success text-center">
            {{ session('success') }}
        </div>
        
        @endif --}}
        
        @if (session()->has('success'))
        <div class="alert alert-success text-center position-relative fade-out">
            {{ session('success') }}
            <div class="countdown-bar"></div>
        </div>
        @endif
          
        
        {{-- Sezione per la gestione delle immagini --}}
        
        <div class="mb-3">
            <label for="category" class="form-label textShadow3">{{__('ui.Create6')}}</label>
            <input type="file" wire:model.live="temporary_images" multiple
            class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img"/>
            @error('temporary_images.*')
            <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
            @error('temporary_images')
            <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        
        @if (!empty($images))
        <div class="row">
            <div class="col-12">
                {{-- sezione Antemprima Immagini --}}
                
                <p>{{__('ui.Create6.1')}}</p>
                <div class="row border border-4 bordoImg rounded shadow py-4">
                    @foreach ($images as $key => $image)
                    <div class="col d-flex flex-column align-items-center my-3">
                        <div
                        class="img-preview mx-auto shadow rounded"
                        style="background-image: url({{ $image->temporaryUrl() }});">
                    </div>
                    <button type="button" class="btn mt-1 btn-danger"wire:click="removeImage({{ $key }})">X</button>
                </div>
                @endforeach
            </div>
        </div>
        
        @endif
        
        {{-- sezione Antemprima Immagini --}}
        
        {{-- <p>Antemprima Immagini:</p>
        <div class="row border border-4 border-success routned shadow py-4">
            @foreach ($images as $key => $image)
            <div class="col d-flex flex-column align-items-center my-3">
                <div
                class="img-preview mx-auto shadow rounded"
                style="background-image: url({{ $image->temporaryUrl() }});">
            </div>
            <button type="button" class="btn mt-1 btn-danger"wire:click="removeImage({{ $key }})">X</button>
        </div>
        @endforeach --}}
        
        
        
        {{-- Pulsante di invio --}}
        <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle mt-3">{{__('ui.Crea')}}</button>
        </div>
    </form>
</div>
