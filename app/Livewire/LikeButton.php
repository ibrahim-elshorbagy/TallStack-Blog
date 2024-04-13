<?php

namespace App\Livewire;

use Livewire\Component;

class LikeButton extends Component
{

    public $post;

    public function toggleLike(){
            if(auth()->guest())
            {
                return $this->redirect(route('login'),true);
            }

            $user = auth()->user();

            if($user->hasLiked($this->post)){
                $user->likes()->detach($this->post);
                return ;
            }else{
                $user->likes()->attach($this->post);
            }
        }
    public function render()
    {

        return view('livewire.like-button');
    }
}
