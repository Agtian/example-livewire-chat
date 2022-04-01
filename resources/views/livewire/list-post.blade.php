<div>
    @foreach ($posts as $post)
    


        <div class="mt-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4 px-4 py-5">
                    <label class="block text-md font-bold"> {{ $post->user->name }} </label>
                    <label class="block text-sm font-medium text-gray-600"> {{ $post->created_at->diffForHumans() }} </label>
                    
                    @if ($updateStateId !== $post->id)
                        <button 
                            wire:click="showUpdateForm({{ $post->id }})" 
                            class="mt-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Edit
                        </button>
                        <button 
                            onclick="return confirm('Apakah yakin?') || event.stopImmediatePropagation()" 
                            wire:click="delete({{ $post->id }})" 
                            class="mt-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Delete
                        </button>
                        <div class="mt-4">
                            <p>{{ $post->body }}</p>
                        </div>
                    @endif

                    <hr class="mt-3">

                    @if ($updateStateId === $post->id)
                        <div class="mt-4">
                            <textarea wire:model="body" id="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                        </div>

                        <div class="text-left">
                            <button 
                                wire:click="update({{ $post->id }})" 
                                class="mt-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
