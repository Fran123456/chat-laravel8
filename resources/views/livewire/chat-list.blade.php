<div>
<style media="screen">
.bg-danger {
  background-color: #fff5f5!important;
}
</style>


    {{-- Nothing in the world is as soft and yielding as water.    {{Auth::user()->profile_photo_url}}  --}}
  <div class="col-md-12">
    <br>
    <ul class="list-unstyled">
      @foreach ($messages as $key => $value)
          @if (Auth::user()->id == $value->user_id)
            <div class="row">
              <div class="col-md-6">
                <li class="media bg-danger border" >
                  <img src="{{$value->user->profile_photo_url}}" class="mr-3" alt="..." height="40" width="40">
                  <div class="media-body">
                    <h6 class="mt-0 mb-1"><strong>{{$value->user->name}}</strong> </h6>
                    <p>{{ $value->message }}</p>
                  </div>
                </li>
              </div>
              <div class="col-md-6" >

              </div>
            </div>
          @else
            <div class="row">
              <div class="col-md-6">

              </div>
              <div class="col-md-6">
                <li class="media border">
                  <img src="{{$value->user->profile_photo_url}}" class="mr-3" alt="..." height="40" width="40">
                  <div class="media-body">
                    <h6 class="mt-0 mb-1"><strong>{{$value->user->name}}</strong> </h6>
                    <p>{{ $value->message }}</p>
                  </div>
                </li>
              </div>
            </div>
          @endif
      @endforeach
    </ul>
  </div>


    <script>

      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;

      var pusher = new Pusher('080446e8f366fff06a61', {
        cluster: 'us2'
      });

      var channel = pusher.subscribe('chat-channel');
      channel.bind('chat-event', function(data) {
        //alert(JSON.stringify(data));
        window.livewire.emit('recived', data);
        //Push.create('Hello World!');
      });
    </script>



</div>
