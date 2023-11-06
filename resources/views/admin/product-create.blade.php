<x-admin>
    <!--
    <section class="register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-gray-800 bg-red-700">Add category</h3>
                    <div class="theme-card">
                        <form class="theme-form" method="POST" action="/createProduct" enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-3 mb-3">
                                <label for="name" class="text-red-700">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="add image" required="">
                                    @error('name')
                            <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                       @enderror

                            </div>


                            <div class="col-md-6">
                                <label for="review">categoryid</label>
                                <input type="text" class="form-control" id="category_id" name="category_id" placeholder="add image" required="">
                                    @error('category_id')
                            <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                       @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="review">discountid</label>
                                <input type="text" class="form-control" id="discount_id" name="discount_id" placeholder="add image" required="">
                                    @error('discount_id')
                            <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                       @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="review">price</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="add image" required="">
                                    @error('name')
                            <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                       @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="review">description</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="add image" required="">
                                    @error('description')
                            <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                       @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="review">inventoryid</label>
                                <input type="text" class="form-control" id="inventory_id" name="inventory_id" placeholder="add image" required="">
                                    @error('inventory_id')
                            <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                       @enderror
                            </div>

                                <div class="col-md-6">
                                    <label for="review">image</label>
                                    <input type="file" class="form-control" id="Image" name="Image" placeholder="add image" required="">
                                        @error('Image')
                                <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                           @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="review">sku</label>
                                    <input type="text" class="form-control" id="sku" name="sku" placeholder="add image" required="">
                                        @error('sku')
                                <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                           @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="review">category</label>
                                    <select  name="category_id" id="category_id" required>
                                        @foreach (\App\Models\Category::all() as $category)
                                            <option
                                                value="{{ $category->id }}"
                                                {{ old('category_id') == $category->id ? 'selected' : '' }}
                                            >{{ ucwords($category->name) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                                </div><button  type="submit" class="btn btn-solid w-auto">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
    <!--
        This example requires some changes to your config:


      -->
      <section>
        <div class="container">
            <div class="row" style="
            width: 58%;
            margin: auto;">
                <div class="col-lg-12">
                    <div class="theme-card">
            <form class="theme-form" method="POST" action="/storeProduct" enctype="multipart/form-data">
                @csrf
            <div class="space-y-12">
              <div class="border-b border-gray-900/10 pb-12">
                <header class="text-base font-semibold leading-7 text-red-250">Add product</header>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="col-span-full">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                        <div class="mt-2">
                          <input id="name" name="name" rows="3" class="block w-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></input>
                        </div>
                        @error('name')
                        <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                         @enderror
                      </div>
                  <div class="col-span-full">
                    <label for="description" class="block text-sm font-medium leading-6 text-gray-900">description</label>
                    <div class="mt-2">
                      <input id="description" type="text" name="description" rows="3" class="block w-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></input>
                    </div>
                    @error('description')
                    <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                     @enderror
                </div>
                  <div class="col-span-full">
                    <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">product image</label>
                    <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                      <div class="text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                        </svg>
                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                          <label for="Image" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">

                            <input id="Image"name="Image" type="file">
                          </label>

                        </div>
                        @error('Image')
                        <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                         @enderror

                        </div>
                    </div>


                  </div>
                </div>
              </div>

              <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                  <div class="sm:col-span-2">
                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">discount</label>
                    <div class="mt-2">
                      <select id="discount_id" name="discount_id" autocomplete="discount_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
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
                      <select id="subcategory_id" name="subcategory_id" autocomplete="subcategory_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        @foreach (\App\Models\subcategory::all() as $subcategory)
                                            <option
                                                value="{{ $subcategory->id }}"
                                                {{ old('subcategory_id') == $subcategory->id ? 'selected' : '' }}
                                            >{{ ucwords($subcategory->name) }}</option>
                                        @endforeach

                      </select>
                    </div>
                  </div>

                  <div class="col-span-full">
                    <label for="sku" class="block  text-sm font-medium leading-6 text-gray-900">Sku</label>
                    <div class="mt-2">
                      <input type="text" name="sku" id="sku" autocomplete="Sku" class="block w-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('Sku')
                    <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                     @enderror
                  </div>
                  <div class="col-span-full">
                    <label for="price" class="block  text-sm font-medium leading-6 text-gray-900">price</label>
                    <div class="mt-2">
                      <input type="text" name="price" id="price" autocomplete="Sku" class="block w-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('price')
                    <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                     @enderror
                  </div>
            </div>
            <div class="mt-5">
                <button type="submit" style="
    color: #fff;
    background-color: red;
    transition: background 300ms;
    background-position: 0;
    background-repeat: no-repeat;
    background-size: 800px;
    padding: 14px 30px;
">Save</button>
            </div>
          </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-admin>



</html>
