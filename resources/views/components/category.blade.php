@props(['pro'])

        <div class="category-item">


          <div class="category-img-box">
            <img src="./assets/images/icons/dress.svg" alt="dress & frock" width="30">
          </div>

          <div class="category-content-box">

            <div class="category-content-flex">

              <h3 class="category-item-title">{{ $pro->title }}</h3>

              <p class="category-item-amount">{{ $pro->items->count() }}</p>
            </div>

            <a href="#" class="category-btn">Show all</a>

          </div>

        </div>


