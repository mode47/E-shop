<html lang="en">
<x-admin>



    <div class="container-fluid">
    <div class="row"  style="
    width: 70%;
    margin: auto;">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <form class="form-inline search-form search-box">
                            <div class="form-group">
                                <input class="form-control-plaintext" name="search" type="search" placeholder="Search..">
                            </div>
                        </form>


                        <a href="/product" class="btn btn-primary  mt-md-0 mt-2">Create Product</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="all-package coupon-table table table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Name</th>

                                        <th>price</th>
                                        <th>image</th>
                                        <th>Created On</th>

                                    </tr>
                                </thead>
                                @foreach ($products as $product )

                                <tbody>
                                        <tr data-row-id="{{$product->id}}">

                                            <form method="POST" action="/admin/products">
                                                @csrf
                                                @method('DELETE')
                                                <td>
                                                    <input type="hidden" class="peoductId" name="peoductId" value="{{ $product->id }}">
                                                    <button type="submit" class="btn delete_all bg-blue-500">Delete</button>
                                                </td>
                                            </form>
                                            <td>
                                                <button type="button" class="btn   bg-gray-500 delete_all ">Edit</button>
                                                  </td>

                                        <td>{{ $product->name }}</td>

                                        <td class="order-warning">

                                            <span>{{ $product->price}}</span>
                                        </td>
                                        <td class="order-warning">
                                            <img src="/storage/{{$product->Image}}" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-50 w-50 object-cover object-center">
                                        </td>

                                        <td class="list-date">{{ $product->created_at }}</td>
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
</x-admin>


</html>
