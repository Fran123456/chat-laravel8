<div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="buscar">
                    <strong>Buscar</strong>
                    @if($picked)
                        <span class="badge badge-success">Picked</span>
                    @else
                        <span class="badge badge-danger">Picked</span>
                    @endif
                </label>
                <input wire:model="search"
                    wire:keydown.enter="search_()" type="text" class="form-control" id="search">
                @error("search")
                    <small class="form-text text-danger">{{$message}}</small>
                @else
                    @if(count($users)>0)
                        @if(!$picked)
                        <div class="shadow rounded px-3 pt-3 pb-0">
                            @foreach($users as $u)
                                <div style="cursor: pointer;">
                                    <a wire:click="send_friend_request('{{ $u->id}}')">
                                      <img height="30" width="30" src="{{$u->profile_photo_url}}" alt="">  {{ $u->name }} / {{ $u->email }}
                                    </a>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                        @endif
                    @else
                      @if (!$picked)
                        <div class="shadow rounded px-3 pt-3 pb-0">
                          <div style="cursor: pointer;">
                              <a >
                              <p> <strong>No se encontro ningun usuario</strong>  </p>
                              </a>
                          </div>
                        </div>
                      @else
                          <small class="form-text text-muted">Comienza a teclear para que aparezcan los resultados</small>
                      @endif
                    @endif
                @enderror
            </div>
        </div>
        <div class="col-md-12">
          <div class="alert alert-success collapse" role="alert" id="send-view2">
          </div>
        </div>

    </div>

    <script>
      window.livewire.on('send', function(user){
        $('#send-view2').text("Se le ha enviado la solicitud a "+user.name + " / " + user.email );
        $("#send-view2").fadeIn("slow");
        setTimeout(function(){$("#send-view2").fadeOut('slow');}, 4000);
        //$('#message').val("");
      });
    </script>
</div>
