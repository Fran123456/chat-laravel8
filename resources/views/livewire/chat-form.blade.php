<div>
    {{-- Nothing in the world is as soft and yielding as water.    {{Auth::user()->profile_photo_url}}  --}}
  <div class="col-md-12">
    <textarea wire:model="message" name="name" class="form-control" rows="4" cols="80"></textarea>
    @error ('message')
      <small class="text-danger">{{ $message }}</small>
    @enderror
    <div class="text-center">
      <button  wire:click="sendMessage" class="btn btn-success" name="button">Enviar</button>
    </div>
  </div>

  <div class="alert alert-success collapse" role="alert" id="send-view">
    Se ha enviado el mensaje
  </div>

   <script>

     window.livewire.on('send', function(){
       $("#send-view").fadeIn("slow");
       setTimeout(function(){$("#send-view").fadeOut('slow');}, 3000);
     });
   </script>
</div>
