<div>
    <form wire:submit="store">
        {{-- Titolo Articolo --}}
        <div class="mb-3">
            <label for="title" class="form-label textShadow3">Titolo dell'Annuncio</label>
            <input type="text" id="title" class="form-control" wire:model.blur="title" placeholder="Inserisci il titolo dell'Articolo" @error('title') is-invalid @enderror required>
            @error('title') 
            <div class="alert alert-danger">{{ $message }}</div>    
            @enderror
        </div>
        
        {{-- Descrizione Articolo--}}
        <div class="mb-3">
            <label for="description" class="form-label textShadow3">Descrizione Annuncio</label>
            <textarea id="description" cols="30" row="10" class="form-control" wire:model.blur="description" rows="5" placeholder="Descrivi il tuo articolo" @error('description') is-invalid @enderror required></textarea>
        </div>
        @error('description') 
        <div class="alert alert-danger">{{ $message }}</div>    
        @enderror
        
        {{-- Prezzo Articolo --}}
        <div class="mb-3">
            <label for="price" class="form-label textShadow3">Prezzo dell'Annuncio</label>
            <input type="text" id="price" class="form-control" wire:model.blur="price" placeholder="Inserisci il prezzo dell'Articolo" @error('price') is-invalid @enderror required>
            @error('price') 
            <div class="alert alert-danger">{{ $message }}</div>    
            @enderror
        </div>
        
        {{-- Categorie --}}
        <div class="mb-3">
            <label for="category" class="form-label textShadow3">Categorie</label>
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

        {{-- Articolo creato con sucesso --}}
        
        @if (session()->has('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>

        @endif

        {{-- Pulsante di invio --}}
        <button type="submit" class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle">Crea</button>
    </form>
</div>
