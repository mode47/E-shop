<x-admin>


      <section>
        <div class="container">
            <div class="row" style="
            width: 58%;
            margin: auto;">
                <div class="col-lg-12">
                    <div class="theme-card">
            <form class="theme-form" method="POST" action="/createDiscount" enctype="multipart/form-data">
                @csrf
            <div class="space-y-12">
              <div class="border-b border-gray-900/10 pb-12">
                <header class="text-base font-semibold leading-7 text-red-250">Add product discount</header>

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
                    <label for="desc" class="block text-sm font-medium leading-6 text-gray-900">description</label>
                    <div class="mt-2">
                      <input id="desc" type="text" name="desc" rows="3" class="block w-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></input>
                    </div>
                    @error('description')
                    <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                     @enderror
                </div>
                <div class="col-span-full">
                    <label for="discount_percent" class="block text-sm font-medium leading-6 text-gray-900">discount percent</label>
                    <div class="mt-2">
                      <input id="discount_percent" type="text" name="discount_percent" rows="3" class="block w-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></input>
                    </div>
                    @error('discount_percent')
                    <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                     @enderror
                </div>
                <div class="sm:col-span-2">
                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Status of discount</label>
                    <div class="mt-2">
                      <select id="active" name="active" autocomplete="active" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                       
                                            <option
                                                value="1">True</option>
                                                <option
                                                value="0">False</option>
                                       
                      </select>
                    </div>
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
            </div>
          </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-admin>



</html>
