<div>
    {{-- Nothing in the world is as soft and yielding as water.    {{Auth::user()->profile_photo_url}}  --}}

    <textarea wire:model="message" name="name" id="message" data-emojiable="true" class="form-control" rows="4" cols="80"></textarea>
    @error ('message')
      <small class="text-danger">{{ $message }}</small>
    @enderror
    <div class="text-center">
      <button  wire:click="sendMessage" class="btn btn-success" name="button">Enviar</button>
    </div>


  <div class="alert alert-success collapse" role="alert" id="send-view">
    Se ha enviado el mensaje
  </div>

   <script>

     window.livewire.on('send', function(){
       $("#send-view").fadeIn("slow");
       setTimeout(function(){$("#send-view").fadeOut('slow');}, 3000);
       $('#message').val("");
     });
   </script>

  <!-- <script>
   tinymce.init({
    selector: "#message",
    plugins: "emoticons",
    toolbar: "emoticons",
    toolbar_location: "bottom",
    menubar: false
    });
  </script>-->


</div>
