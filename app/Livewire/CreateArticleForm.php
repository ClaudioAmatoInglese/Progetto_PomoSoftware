<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;


class CreateArticleForm extends Component

{
    use WithFileUploads;
    
    public $images = [];
    public $temporary_images;
    
    
    #[Validate('required|string|min:5')] 
    public $title;
    #[Validate('required|string|min:10|max:300')] 
    public $description;
    #[Validate('required|numeric|max:99999999|min:0')] 
    public $price;
    #[Validate('required')] 
    public $category;
    public $article;
    
    public $categories;
    
    public function mount(){
        
        $this->categories = Category::all();
        
    }
    
    
    
    
    public function store(){
        
        $this->validate();
        
        
        // $article = Auth::user()->articles()->create([
        $this->article = Auth::user()->articles()->create([
            
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'category_id'=>$this->category,
        ]);
        
        
        if (count($this->images) > 0) {
            
            foreach ($this->images as $image) {
                $this->article->images()->create(['path' => $image->store('images', 'public')]);
                
            }
            
        }
        
        session()->flash('success', 'Hai creato il tuo Articolo Correttamente');
        $this->cleanForm();
        //return redirect(route('homepage'));
        
    }
    
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.min' => 'Il titolo deve contenere almeno 5 caratteri.',
            'description.required' => 'La descrizione è obbligatoria.',
            'description.min' => 'La descrizione deve contenere almeno 10 caratteri.',
            'description.max' => 'La descrizione ammette al massimo 300 caratteri',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'price.min' => 'il prezzo deve essere maggiore di 0',
            'price.max' => 'il prezzo non può essere superiore a 99999999',
            'category.required' => 'Devi selezionare una categoria.',
            'temporary_images.max' => 'Puoi caricare massimo 6 immagini',
            
        ];
    }
    
    
    protected function cleanForm()
    {
        $this->title = '';
        $this->description = '';
        $this->category = '';
        $this->price = '';
        $this->images = [];
    }
    
    
    
    
    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
            'temporary_images' => 'max:6'
            ])) {
                foreach ($this->temporary_images as $image) {
                    $this->images[] = $image;
                }
            }
        }
        
        
        public function removeImage($key)
        {
            if(in_array($key, array_keys($this->images))) {
                
                unset($this->images[$key]);
                
            }
        }
        
        
        
        public function render()
        {
            return view('livewire.create-article-form');
        }
        
    }
    