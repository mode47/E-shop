<html lang="en">
<x-admin>



    <section class="register-page section-b-space">
        <div class="container">
            <div class="row" style="
            width: 58%;
            margin: auto;">
                <div class="col-lg-12">
                    <header class="text-gray-800">Add category</header>
                    <div class="theme-card">
                        <form class="theme-form" method="POST" action="/createCategory">
                            @csrf
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required="">
                                    @error('name')
                                    <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="review">description</label>
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Write description" required="">

                                        @error('description')
                                <p class="text-red-500 text-xs mt-1 ">{{ $message }}</p>
                           @enderror
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
