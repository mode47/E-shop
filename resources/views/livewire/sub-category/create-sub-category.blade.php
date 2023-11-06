<div>
<!-- Modal -->
<div class="modal fade" id="admin-create-subcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form wire:submit.blur="submit">
       <div class="mb-6">
           <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                  for="name">
               {{ __('name') }}
           </label>
           <input class="w-full p-2 border border-gray-400 rounded"
                  type="text"
                  id="name"
                  wire:model="name"
                  value=""
                  wire:model.defer="name"
                  required>
                   @error('name') <span class="error">{{ $message }}</span> 
        @enderror
       </div>
        
                      
        <div class="mb-6">
                    <label for="category_id" class="block text-sm font-medium leading-6 text-gray-900">Category</label>
                    <div class="mt-2">
                      <select id="category_id" wire:model="category_id" autocomplete="category_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        @foreach (\App\Models\Category::all() as $category)
                                            <option
                                                value="{{ $category->id }}"
                                            >{{ ucwords($category->name) }}</option>
                                        @endforeach
                                       
                   @error('category_id') <span class="error">{{ $message }}</span> @enderror

                      </select>
                     
                    </div>
                  </div>
                  </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Create</button>
      </form>
      </div>
    </div>
  </div>
</div>
</div>
