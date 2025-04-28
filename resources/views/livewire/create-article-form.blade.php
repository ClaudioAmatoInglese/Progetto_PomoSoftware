<div>
    <form wire:submit="store">
        {{-- Titolo Articolo --}}
        <div class="mb-3">
            <label for="title" class="form-label textShadow3">Titolo dell'Annuncio:</label>
            <input type="text" id="title" class="form-control" wire:model.blur="title" placeholder="Inserisci il titolo dell'Articolo" @error('title') is-invalid @enderror required>
            @error('title') 
            <div class="alert alert-danger">{{ $message }}</div>    
            @enderror
        </div>
        
        {{-- Descrizione Articolo--}}
        <div class="mb-3">
            <label for="description" class="form-label textShadow3">Descrizione Annuncio:</label>
            <textarea id="description" cols="30" row="10" class="form-control" wire:model.blur="description" rows="5" placeholder="Descrivi il tuo articolo" @error('description') is-invalid @enderror required></textarea>
        </div>
        @error('description') 
        <div class="alert alert-danger">{{ $message }}</div>    
        @enderror
        
        {{-- Prezzo Articolo --}}
        <div class="mb-3">
            <label for="price" class="form-label textShadow3">Prezzo dell'Annuncio:</label>
            <input type="text" id="price" class="form-control" wire:model.blur="price" placeholder="Inserisci il prezzo dell'Articolo" @error('price') is-invalid @enderror required>
            @error('price') 
            <div class="alert alert-danger">{{ $message }}</div>    
            @enderror
        </div>
        
        {{-- Categorie --}}
        <div class="mb-3">
            <label for="category" class="form-label textShadow3">Categorie:</label>
            <select id="category" wire:model.blur="category" class="form-control" @error('category') is-invalid @enderror required>
                <option value="">Seleziona una Categoria</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category') 
            <div class="alert alert-danger">{{ $message }}</div>    
            @enderror
        </div>
        
        {{-- Articolo creato con successo --}}
        
        @if (session()->has('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
        
        @endif
        
        {{-- Sezione per la gestione delle immagini --}}
        
        <div class="mb-3">
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
                <p>Photo preview:</p>
                <div class="row border border-4 border-success rounded shadow py-4">
                    @foreach ($images as $key => $image)
                    <div class="col d-flex flex-column align-items-center my-3">
                        <div class="img-preview mx-auto shadow rounded"
                        style="background-image: url({{ $image->temporaryUrl() }});">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    
    {{-- sezione Antemprima Immagini --}}
    
    <p>Antemprima Immagini:</p>
    <div class="row border border-4 border-success routned shadow py-4">
        @foreach ($images as $key => $image)
        <div class="col d-flex flex-column align-items-center my-3">
            <div
            class="img-preview mx-auto shadow rounded"
            style="background-image: url({{ $image->temporaryUrl() }});">
        </div>
        <button type="button" class="btn mt-1 btn-danger"
        wire:click="removeImage({{ $key }})">X</button>
    </div>
    @endforeach
</div>


{{-- Pulsante di invio --}}
<button type="submit" class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle">Crea</button>
</form>
</div>
