<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class DeletePost extends Component
{
    use AuthorizesRequests;
    public $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function delete()
    {
        $this->authorize('delete', $this->post);

        $this->post->delete();

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.delete-post');
    }
}
