<x-app-layout>
  <link rel="stylesheet" href="{!! asset('css/chat.css') !!}">
  <link rel="stylesheet" href="{!! asset('css/search.css') !!}">
  <style media="screen">
  ::-webkit-scrollbar {
  display: none;
}
  </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                  @livewire('chat-list')
                  @livewire('chat-form')
                </div>
                <div class="col-md-6">
                  	    <div id="custom-search-input">
                              <div class="input-group">
                                  <input type="text" class="search-query form-control" placeholder="Search" />
                                  <span class="input-group-btn">
                                      <button type="button" disabled>
                                          <span class="fa fa-search"></span>
                                      </button>
                                  </span>
                              </div>
                          </div>

                </div>

            </div>
        </div>

</x-app-layout>
