@props(['product'])
    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix {{$product->subcategory->name}} ">
        <div class="product__item {{$product->discount->name}}">

            <div class="product__item__pic set-bg" data-setbg="/storage/{{$product->Image}}">
                @if($product->discount->active)
                <span class="label">{{$product->discount->name}}</span>
                @endif
                <ul class="product__hover">
                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                    <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                    <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6>{{ $product->name }}</h6>
                <a href="#" class="add-cart">+ Add To Cart</a>
                <div class="rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <h5>${{ $product->price - $product->discount->discount_percent}}</h5>
                <del>$ {{  $product->price }} </del>
                <div class="product__color__select">
                    <label for="pc-10">
                        <input type="radio" id="pc-10">
                    </label>
                    <label class="active black" for="pc-11">
                        <input type="radio" id="pc-11">
                    </label>
                    <label class="grey" for="pc-12">
                        <input type="radio" id="pc-12">
                    </label>
                </div>
            </div>
        </div>
    </div>

