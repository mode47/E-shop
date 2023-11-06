<div>
<!-- Modal -->
<div class="modal fade" id="admin-create-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form wire:submit="submit" enctype="multipart/form-data" >
       <div class="mb-6">
           <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                  for="name">
               {{ __('name') }}
           </label>
           <div>
           <input class="w-full p-2 border border-gray-400 rounded"
                  type="text"
                  id="name"
                  name="name"
                  value=""
                  wire:model="name"
                  required>
           </div>
           
       </div>
          <div class="mb-6">
          
             <input   wire:model="Image" type="file">

          </div>
        
{{--  
      
       <div class="mb-6">
           <label class="block mt-3 text-xs font-bold text-gray-700 uppercase"
                  for="description">
               {{ __('description') }}
           </label>
           <div >
             <textarea class="w-full p-2 border border-gray-400 rounded"
                  type="text"
                  id="description"
                 
                  value=""
                  wire:model="description"
                  required></textarea>
           </div>
             @error('description')
                        <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
             @enderror

         
       
       
       </div>

                   <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                  <div class="sm:col-span-2">
                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">discount</label>
                    <div class="mt-2">
                      <select id="discount_id" wire:model='discount_id' autocomplete="discount_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        @foreach (\App\Models\discount::all() as $discount)
                                            <option
                                                value="{{ $discount->id }}"
                                                {{ old('discount_id') == $discount->id ? 'selected' : '' }}
                                            >{{ ucwords($discount->name) }}</option>
                                        @endforeach
                      </select>
                    </div>
                  </div>


                  <div class="sm:col-span-2">
                    <label for="subcategory_id" class="block text-sm font-medium leading-6 text-gray-900">Sub category</label>
                    <div class="mt-2">
                      <select id="subcategory_id" wire:model='subcategory_id' autocomplete="subcategory_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        @foreach (\App\Models\subcategory::all() as $subcategory)
                                            <option
                                                value="{{ $subcategory->id }}"
                                                {{ old('subcategory_id') == $subcategory->id ? 'selected' : '' }}
                                            >{{ ucwords($subcategory->name) }}</option>
                                        @endforeach

                      </select>
                       @error('description')
                    <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                     @enderror
                    </div>
                  </div>

                  <div class="col-span-full">
                    <label for="sku" class="block  text-sm font-medium leading-6 text-gray-900">Sku</label>
                    <div class="mt-2">
                      <input type="text" wire:model="sku" id="sku" autocomplete="Sku" class="block w-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('Sku')
                    <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                     @enderror
                  </div>
                  <div class="col-span-full">
                    <label for="price" class="block  text-sm font-medium leading-6 text-gray-900">price</label>
                    <div class="mt-2">
                      <input type="text" wire:model="price" id="price" autocomplete="Sku" class="block w-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('price')
                    <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                     @enderror
                  </div>
            </div>  --}}
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

