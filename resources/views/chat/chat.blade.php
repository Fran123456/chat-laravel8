<x-app-layout>
  <link rel="stylesheet" href="{!! asset('css/chat.css') !!}">
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


        <div class="container-luid">
            <div class="row">
                <div class="col-md-6">
                  @livewire('chat-list')
                  @livewire('chat-form')
                </div>
                <div class="col-md-6">

                </div>

            </div>
        </div>

</x-app-layout>
