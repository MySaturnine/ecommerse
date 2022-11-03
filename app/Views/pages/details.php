<style>
    /* [class*="col-"] {
        border: 1px solid red;
    } */
</style>


<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>home">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo BASE_URL . "store"; ?>">Store</a></li>
    <li class="breadcrumb-item active">Details</li>
</ul>




<div class="container my-5">


    <div class="row">

        <div class="col-md-6">
            <img class="img-fluid details-img" src="<?php echo BASE_URL . $data["product_image1"]; ?>" alt="">
        </div>
        <div class="col-md-6">
            <span><?php echo $data["product_category"]; ?></span>
            <h3><?php echo $data["product_title"]; ?></h3>
            <h3>$<?php echo $data["product_price"]; ?></h3>


            <form action="<?php echo BASE_URL . "details/$id"; ?>" method="post">
                <div class="row">
                    <div class="col-md-2">

                        <div class="form-group">
                            <input type="number" value="1" name="cart_quantity" class="form-control" id="usr">
                        </div>

                    </div>
                    <div class="col-md-10">
                        <button name="add_to_cart" type="submit" class="btn btn-primary btn-lg">Add to cart</button>
                    </div>
                </div>
            </form>


            <div class="row">
                <div class="col-md-12">
                    <p class="font-weight-bold mb-0">About this product</p>
                    <p><?php echo $data["product_description"]; ?></p>
                </div>
            </div>


        </div>


    </div>


</div>