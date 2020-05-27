<div class="container">
    <div class="heading heading-v1 margin-bottom-20">
        <h2>Product you may like</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio elit, ultrices vel cursus sed, placerat ut leo. Phasellus in magna erat. Etiam gravida convallis augue non tincidunt. Nunc lobortis dapibus neque quis lacinia. Nam dapibus tellus sit amet odio venenatis</p>
    </div>

    <div class="illustration-v2 margin-bottom-60">
        <div class="customNavigation margin-bottom-25">
            <a class="owl-btn prev rounded-x"><i class="fa fa-angle-left"></i></a>
            <a class="owl-btn next rounded-x"><i class="fa fa-angle-right"></i></a>
        </div>

        <ul class="list-inline owl-slider-v4">
          
            @foreach ($might_also_like as $product)
                
            
            <li class="item">        <!--This images should be thumb like so src="assets/img/thumb/03.jpg"--->
                <a href="{{route('pages.show',$product->slug)}}"><img class="img-responsive" src="{{asset('assets/img/products/'.$product->slug.'.webp')}}" alt=""></a>
                <div class="product-description-v2">
                    <div class="margin-bottom-5">
                    <h4 class="title-price"><a href="{{route('pages.show',$product->slug)}}">{{$product->name}}</a></h4>
                    <span class="title-price">{{$product->price}}</span>
                    </div>
                    <ul class="list-inline product-ratings">
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                    </ul>
                </div>
            </li>

        @endforeach
        </ul>
    </div>
</div>