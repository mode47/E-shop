<div>
<!-- Modal -->
<div class="modal fade" id="admin-delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <p class="mx-auto">Are you sure delete?</p>
              <div class="modal-footer">
        {{--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>  --}}
        <button type="button" wire:click="delete()" class="btn btn-primary">Delete</button>
      {{--  </form>  --}}
      </div>
      </div>
    </div>
  </div>
</div>
</div>
