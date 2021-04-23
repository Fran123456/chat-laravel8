<div>
    {{-- Nothing in the world is as soft and yielding as water.    {{Auth::user()->profile_photo_url}}  --}}

    <div class="min-h-screen flex items-center justify-center bg-gray-50  sm:px-12 lg:px-12">
      <div class="max-w-md w-full space-y-8">
        <form class="mt-8 space-y-6" action="#" method="POST">
          <div class="rounded-md shadow-sm -space-y-px">
            <div>
             <textarea placeholder="Mensaje..." name="name" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" rows="8" cols="80"></textarea>
            </div>
          </div>
          <div>
            <button type="submit" wire:click="enviarMensaje" class="group relative w-full flex justify-center py-2 px-4 border text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
              Enviar
            </button>
          </div>
        </form>
      </div>
    </div>
</div>
