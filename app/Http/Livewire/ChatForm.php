<?php

namespace App\Http\Livewire;
use App\Models\Message;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class ChatForm extends Component
{
    public $message;

    public function mount(){//de sistema
      $this->message = "";
    }

    public function render()//de sistema
    {
        return view('livewire.chat-form');
    }



/*    public function updated($field){//de sistema
      $this->validateOnly($field, [
        'message'=>'required|min:3'
      ]);
    }*/

    public function sendMessage(){

      $this->validate([
        'message'=>'required'
      ]);

       $m = Message::create([
         'message'=> $this->message,
         'user_id'=> Auth::user()->id
       ]);
       $this->emit("send");
       //$this->emit("recived", $m);
       event(new \App\Events\SendMessage($m));
       $message = "";
    }
}
