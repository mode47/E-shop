<div>
    <!-- Modal -->
    <div class="modal fade" id="admin-edit-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eit category informations</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form wire:submit.prevent="update">
       <div class="mb-6">
           <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                  for="name">
                  Name
               {{--  {{ __('name') }}  --}}
           </label>
           <input class="w-full p-2 border border-gray-400 rounded"
                  type="text"
                  id="name"
                  
                  value=""
                  wire:model.defer="name"
                  required>
       </div>
       <div class="mb-6">
           <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                  for="description">
               {{--  {{ __('description') }}  --}}
               Description
           </label>
           <textarea class="w-full p-2 border border-gray-400 rounded"
                  type="text"
                  id="description"
                  
                  value=""
                  wire:model.defer="description"
                  required></textarea>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Update</button>
      </form>
          </div>
        </div>
      </div>
    </div>
</div>
