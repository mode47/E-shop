<div class="row">
    <div class="col-lg-12">
        <ul class="filter__controls">
            <li  class="active" data-filter="*">All</li>
            @foreach ($categoreis as $cat)
            <li  data-filter={{ "." . $cat->name }}> {{ $cat->name }}</li>
                            @endforeach
        </ul>
    </div>
</div>
