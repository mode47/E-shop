@props(
    ['item']
)
      <div class="showcase-container">
        <div class="showcase">
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/products/shirt-1.jpg" alt="pure garment dyed cotton shirt" class="showcase-img"
              width="70">
          </a>
          <div class="showcase-content">
            <a href="#">
              <h4 class="showcase-title">{{ $item->title }}</h4>
            </a>
            <a href="#" class="showcase-category">{{ $item->category->name }}</a>
            <div class="price-box">
              <p class="price">&dollar; {{ $item->price -10}}  </p>
              <del>&dollar;{{ $item->price }}</del>
            </div>
          </div>
        </div>
      </div>



