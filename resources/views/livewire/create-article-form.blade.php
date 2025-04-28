<div>
    <form wire:submit="store">
        {{-- Titolo Articolo --}}
        <div class="mb-3">
            <label for="title" class="form-label textShadow3">{{__('ui.Create2')}}</label>
            <input type="text" id="title" class="form-control" wire:model.blur="title" placeholder="{{__('ui.Create2.1')}}" @error('title') is-invalid @enderror required>
            @error('title') 
            <div class="alert alert-danger">{{ $message }}</div>    
            @enderror
        </div>
        
        {{-- Descrizione Articolo--}}
        <div class="mb-3">
            <label for="description" class="form-label textShadow3">{{__('ui.Create3')}}</label>
            <textarea id="description" cols="30" row="10" class="form-control" wire:model.blur="description" rows="5" placeholder="{{__('ui.Create3.1')}}" @error('description') is-invalid @enderror required></textarea>
        </div>
        @error('description') 
        <div class="alert alert-danger">{{ $message }}</div>    
        @enderror
        
        {{-- Prezzo Articolo --}}
        <div class="mb-3">
            <label for="price" class="form-label textShadow3">{{__('ui.Create4')}}</label>
            <input type="text" id="price" class="form-control" wire:model.blur="price" placeholder="{{__('ui.Create4.1')}}" @error('price') is-invalid @enderror required>
            @error('price') 
            <div class="alert alert-danger">{{ $message }}</div>    
            @enderror
        </div>
        
        {{-- Categorie --}}
        <div class="mb-3">
            <label for="category" class="form-label textShadow3">{{__('ui.Create5')}}</label>
            <select id="category" wire:model.blur="category" class="form-control" @error('category') is-invalid @enderror required>
                <option value="">{{__('ui.Create5.1')}}</option>
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
        <button type="submit" class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle">{{__('ui.Crea')}}</button>
    </form>
</div>
