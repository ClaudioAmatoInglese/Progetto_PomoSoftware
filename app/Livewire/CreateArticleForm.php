<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateArticleForm extends Component

{

    #[Validate('required|string|min:5')] 
    public $title;
    #[Validate('required|string|min:10')] 
    public $description;
    #[Validate('required|numeric|max:100000000|min:0')] 
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


        $article = Auth::user()->articles()->create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'category_id'=>$this->category,
        ]);

        session()->flash('success', 'Hai creato il tuo Articolo Correttamente');
        
        $this->reset();
        
        return redirect(route('homepage'));

    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.min' => 'Il titolo deve contenere almeno 5 caratteri.',
            'description.required' => 'La descrizione è obbligatoria.',
            'description.min' => 'La descrizione deve contenere almeno 10 caratteri.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'price.min' => 'il prezzo deve essere maggiore di 0',
            'price.max' => 'il prezzo non può essere superiore a 99999999',
            'category.required' => 'Devi selezionare una categoria.',
        ];
    }



    public function render()
    {
        return view('livewire.create-article-form');
    }

}
