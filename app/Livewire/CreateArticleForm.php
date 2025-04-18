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
    #[Validate('required|numeric')] 
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

    public function render()
    {
        return view('livewire.create-article-form');
    }

}
