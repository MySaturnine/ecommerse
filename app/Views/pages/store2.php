<style>
    .product-grid {
        font-family: 'Montserrat', serif;
        text-align: center;
    }

    .product-grid .product-image {
        background-color: #000;
        overflow: hidden;
        position: relative;
    }

    .product-grid .product-image a.image {
        display: block;
    }

    .product-grid .product-image img {
        width: 100%;
        height: auto;
    }

    .product-grid .product-image .pic-1 {
        transition: all 0.5s ease 0s;
    }

    .product-grid:hover .product-image .pic-1 {
        opacity: 0;
    }

    .product-grid .product-image .pic-2 {
        width: 100%;
        height: 100%;
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        transition: all 0.5s ease 0s;
    }

    .product-grid:hover .product-image .pic-2 {
        opacity: 0.75;
    }

    .product-grid .product-links {
        width: 150px;
        padding: 0;
        margin: 0;
        list-style: none;
        opacity: 1;
        transform: translateY(-50%) translateX(-50%) scale(0);
        position: absolute;
        top: 50%;
        left: 50%;
        transition: all .3s ease;
    }

    .product-grid:hover .product-links {
        transform: translateY(-50%) translateX(-50%) scale(1);
    }

    .product-grid .product-links li {
        margin: 0 3px;
        display: inline-block;
    }

    .product-grid .product-links li a {
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        line-height: 36px;
        height: 40px;
        width: 40px;
        margin: 0;
        border: 2px solid #fff;
        display: block;
        overflow: hidden;
        transition: all 0.3s ease 0.1s;
    }

    .product-grid .product-links li:first-child {
        margin: 0 0 8px;
        display: block;
    }

    .product-grid .product-links li:first-child a {
        line-height: 30px;
        width: auto;
        border-width: 4px;
        border-style: double;
        border-left: none;
        border-right: none;
    }

    .product-grid .product-links li a:hover {
        color: #ff2db9;
        border-color: #ff2db9;
    }

    .product-grid .product-content {
        text-align: left;
        padding: 15px 0 0;
    }

    .product-grid .title {
        font-size: 16px;
        font-weight: 600;
        text-transform: capitalize;
        margin: 0 0 10px;
    }

    .product-grid .title a {
        color: #666;
        transition: all 0.3s ease 0s;
    }

    .product-grid .title a:hover {
        color: #ff2db9;
    }

    .product-grid .price {
        color: #ff2db9;
        font-size: 17px;
        font-weight: 300;
        line-height: 20px;
        width: calc(100% - 89px);
        display: inline-block;
    }

    .product-grid .rating {
        color: #777777;
        font-size: 12px;
        width: 85px;
        padding: 0;
        margin: 0;
        list-style: none;
        display: inline-block;
    }

    @media screen and (max-width: 990px) {
        .product-grid {
            margin-bottom: 30px;
        }
    }
</style>


<div class="container my-5">
    <div class="row">



        <?php foreach ($product_details as $data) : ?>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1" src="images/products/tv1-1.jpg">
                            <img class="pic-2" src="images/products/tv1-1.jpg">
                        </a>
                        <ul class="product-links">
                            <li><a href="#">Add to Cart</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-random"></i></a></li>
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Top</a></h3>
                        <div class="price">$59.99</div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="far fa-star"></li>
                        </ul>
                    </div>
                </div>
            </div>

        <?php endforeach;  ?>






        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img class="pic-1" src="images/img-3.jpg">
                        <img class="pic-2" src="images/img-4.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#">Add to Cart</a></li>
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Top</a></h3>
                    <div class="price">$69.99</div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="far fa-star"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>