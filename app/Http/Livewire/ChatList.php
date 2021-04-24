<?php

namespace App\Http\Livewire;
use App\Models\Message;
use Livewire\Component;
use Illuminate\Support\Collection;

class ChatList extends Component
{
    public $messages;
    protected $listeners = ['recived']; //de sistema

    public function mount(){//de sistema
       $this->messages = Message::orderby('created_at','DESC')->take(7)->get()->reverse();
       //$this->messages = collect($this->messages);
      // $this->messages = $this->messages->reverse();
    }

    public function recived($message){
      $this->messages = Message::orderby('created_at','DESC')->take(7)->get()->reverse();
      //$this->messages = collect($this->messages);
      //$this->messages = $this->messages->reverse();
    }

    public function render()//de sistema
    {
        return view('livewire.chat-list');
    }
}
