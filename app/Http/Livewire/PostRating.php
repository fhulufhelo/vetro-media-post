<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PostRating extends Component
{
    public $rating;

    public $post;

    public $refresh;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->rating = 0;
        if (Auth::check() && $rate = Auth::user()->rating()->first()) {
            $this->rating = $rate->rating;
        }
    }

    public function rate($rate)
    {
        $model = Auth::user()->rating()->updateOrCreate(
            ['post_id' => $this->post->id, 'user_id' => Auth::id()],
            ['post_id' => $this->post->id, 'rating' => $rate]
        );

        $this->rating = $model->rating;
    }

    public function render()
    {
        return view('livewire.post-rating');
    }
}
