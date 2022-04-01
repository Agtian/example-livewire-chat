<div class="p-4 px-4 py-5">
    <div>
        <label for="about" class="block text-sm font-medium text-gray-700"> {{ $body }} </label>
        <div class="mt-1">
            <textarea wire:model="body" id="about" rows="3" placeholder="Post something..." class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
        </div>
    </div>
    <div class="text-right">
        <button wire:click="createPost" class="mt-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Post</button>
    </div>
</div>
