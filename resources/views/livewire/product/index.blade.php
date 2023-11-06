<div>
   
     @livewire('product.create-prodcut')
    @livewire('product.edit-prodcut')
    
    <div class="container-fluid">
    <div style="text-align: center">
            @if(Session::has('success'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
            @endif
    </div>
    

        <div class="row"  style="
        width: 70%;
        margin: auto;">
                <div class="col-sm-12">

                    <button type="button" data-toggle="modal" data-target="#admin-create-product" class="btn btn-success mb-3">Create new category</button>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive table-desi">
                                <table class="all-package coupon-table table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    @foreach ($products as  $inx => $product )

                                    <tbody>
                                            <tr data-row-id="{{$product->id}}">
                                            <td>{{ $inx+1 }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>
                                                <button type="button" wire:click="edit({{$product->id}})" class="btn btn-info mx-2">Edit</button>
                                                <button type="button"  wire:click="delete({{$products->id}})"   class="btn btn-primary mx-2">Delete</a>
                                            </td>
                                            @endforeach

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
