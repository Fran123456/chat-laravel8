<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\FriendRequest;

class Search extends Component
{
    public $search;
    public $users;
    public $picked;

    public function mount()
    {
           $this->search = "";
           $this->users = User::where('id','0')->get();
           $this->picked = true;
    }


    public function search_()
    {
      $this->picked = false;
      $this->validate([
          "search" => "required|min:2"
      ]);

      $this->users = User::where("name", "like", trim($this->search) . "%")
      ->where('id', '!=', Auth::user()->id)
      ->take(5)
      ->get();
    }


    public function send_friend_request($id)
    {
       $this->search = "";
       $this->picked = true;
       $userRequest =User::find($id);

       FriendRequest::create([
         'user_id'=> Auth::user()->id,
         'friend_request_id'=> $id,
       ]);

       $this->emit("send", $userRequest);
    }

    public function asignarPrimero()
    {
       $user = User::where("name", "like", trim($this->search) . "%")->first();
       if($user)
       {
           $this->search = $user->name;
       }
       else
       {
           $this->search = "...";
       }
       $this->picked = true;
    }

    public function render()
    {
        return view('livewire.search');
    }
}
