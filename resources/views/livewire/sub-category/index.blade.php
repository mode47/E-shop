<div>
    @livewire('sub-category.create-sub-category')
    @livewire('sub-category.edit-sub-category')
    
    <div class="container-fluid">
    <div style="text-align: center">
            @if(Session::has('success'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
            @endif
    </div>
     <div style="text-align: center">
            @if(Session::has('error'))
            <p class="alert alert-success">{{ Session::get('error') }}</p>
            @endif
    </div>
     
        <div class="row"  style="width: 70%;margin: auto;">
        
                <div class="col-sm-12">
                    <button type="button" data-toggle="modal" data-target="#admin-create-subcategory" class="btn btn-success mb-3">Create new Subcategory</button>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive table-desi">
                                <table class="all-package coupon-table table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                           <th>category</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    @foreach ($subcategories as  $inx => $subcategory )

                                    <tbody>
                                            <tr data-row-id="{{$subcategory->id}}">
                                            <td>{{ $inx+1 }}</td>
                                            <td>{{ $subcategory->name }}</td>
                                            <td> {{ $subcategory->category->name }}</td>
                                            <td>
                                                <button type="button" wire:click="edit({{$subcategory->id}})" class="btn btn-info mx-2">Edit</button>
                                                <button type="button"  wire:click="delete({{$subcategory->id}})"   class="btn btn-primary mx-2">Delete</a>
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
