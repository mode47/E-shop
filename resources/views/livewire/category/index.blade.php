<div>
    @livewire('category.create-category')
    @livewire('category.edit-category')
    
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

                    <button type="button" data-toggle="modal" data-target="#admin-create-category" class="btn btn-success mb-3">Create new category</button>
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
                                    @foreach ($categories as  $inx => $category )

                                    <tbody>
                                            <tr data-row-id="{{$category->id}}">
                                            <td>{{ $inx+1 }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td>
                                                <button type="button" wire:click="edit({{$category->id}})" class="btn btn-info mx-2">Edit</button>
                                                <button type="button"  wire:click="delete({{$category->id}})"   class="btn btn-primary mx-2">Delete</a>
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
