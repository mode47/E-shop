@props(['item'])
<div class="showcase">

    <a href="#" class="showcase-img-box">
      <img src="./assets/images/products/clothes-1.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
    </a>
    <div class="showcase-content">
      <a href="#">
        <h4 class="showcase-title">{{ $item->title }}</h4>
      </a>
      <a href="#" class="showcase-category">{{ $item->product->title }}</a>
      <div class="price-box">
        <p class="price">{{ $item->price - 0.2*100 }}</p>
        <del>&dollar;{{ $item->price }}</del>
      </div>
    </div>
  </div>