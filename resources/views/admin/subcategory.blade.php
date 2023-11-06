<html lang="en">
<x-admin>



    <section class="register-page section-b-space">
        <div class="container">
            <div class="row" style="
            width: 58%;
            margin: auto;">
                <div class="col-lg-12">
                    <header class="text-gray-800">Add sub  category</header>
                    <div class="theme-card">
                        <form class="theme-form" method="POST" action="/createSubCategory">
                            @csrf
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="">
                                    @error('name')
                                    <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                                    @enderror
                                </div>

                  <div class="sm:col-span-2 mt-5">
                    <label for="category_id" class="block text-sm font-medium leading-6 text-gray-900">Category</label>
                    <div class="mt-2">
                      <select id="category_id" name="category_id" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        @foreach (\App\Models\Category::all() as $category)
                                            <option
                                                value="{{ $category->id }}"
                                                {{ old('category_id') == $category->id ? 'selected' : '' }}
                                            >{{ ucwords($category->name) }}</option>
                                        @endforeach

                      </select>
                    </div>
                  </div>



                                <div class="mt-3">
                                <button type="submit" style="
                        color: #fff;
                        background-color: red;
                        transition: background 300ms;
                        background-position: 0;
                        background-repeat: no-repeat;
                        background-size: 800px;
                        padding: 14px 30px;">Save</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-admin>


</html>
