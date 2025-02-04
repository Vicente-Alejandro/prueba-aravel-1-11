<?php

namespace App\View\Components\blog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Post;
use App\Models\Category;

class Show extends Component
{
    /**
     * Create a new component instance.
     */

     // aqui puede ir tanto un parametro como un metodo por ejemplo changeTitle
    // protected $except = ['post'];

    public function __construct(public Post $post)
    {
    }

    public function changeTitle() {
        $this->post->name = 'New Title';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render() 
    {   
        return view('components.blog.post.show');
    }
}
