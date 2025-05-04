<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\App;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


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

        $popupSuccess = __('ui.Create7');
        
        $this->validate();
        
        // $article = Auth::user()->articles()->create([
        $this->article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id()
        ]);
        
        
        if (count($this->images) > 0) {

            foreach ($this->images as $image) {
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create([
                    'path' => $image->store($newFileName, 'public')
                ]);
                dispatch(new ResizeImage($newImage->path, 300 , 300));
                dispatch(new GoogleVisionSafeSearch($newImage->id));
                dispatch(new GoogleVisionLabelImage($newImage->id));
            }
            File::deleteDirectory(storage_path("app/livewire-tmp"));
        }
        
        session()->flash('success', "{$popupSuccess}");
        // $this->dispatch('popup-success');  
        $this->cleanForm();
        //return redirect(route('homepage'));
        
    }
    
    public function messages()
    {
        $titleReq = __('ui.Create8');
        $titleMin = __('ui.Create9');
        $descriptionReq = __('ui.Create10');
        $descriptionMin = __('ui.Create11');
        $descriptionMax = __('ui.Create12');
        $priceReq = __('ui.Create13');
        $priceNum = __('ui.Create14');
        $priceMin = __('ui.Create15');
        $priceMax = __('ui.Create16');
        $categoryReq = __('ui.Create17');
        $temporaryImagesMax = __('ui.Create18');

        return [
            'title.required' => "{$titleReq}",
            'title.min' => "{$titleMin}",
            'description.required' => "{$descriptionReq}",
            'description.min' => "{$descriptionMin}",
            'description.max' => "{$descriptionMax}",
            'price.required' => "{$priceReq}",
            'price.numeric' => "{$priceNum}",
            'price.min' => "{$priceMin}",
            'price.max' => "{$priceMax}",
            'category.required' => "{$categoryReq}",
            'temporary_images.max' => "{$temporaryImagesMax}",
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
            'temporary_images.*' => 'image|max:2048',
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
    