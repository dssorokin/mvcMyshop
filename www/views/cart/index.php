<?php include_once (ROOT . "/views/layouts/header.php");?>
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <td class="image">Item</td>
                    <td class="description"></td>
                    <td class="price">Price</td>
                    <td class="quantity">Quantity</td>
                    <td class="total">Total</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                <?php foreach($cartProducts as $product) {?>
                <tr>
                    <td class="cart_product">
                        <a href=""><img style="width: 100px;" src="/php_learn/images/<?= $product['image'] ?>" alt=""></a>
                    </td>
                    <td class="cart_description">
                        <h4><a href=""><?= $product['name']; ?></a></h4>
                        <p>Web ID: <?= $product['code']; ?></p>
                    </td>
                    <td class="cart_price">
                        <p>$<?= $product['price']; ?></p>
                    </td>
                    <td class="cart_quantity">
                        <div class="cart_quantity_button">
                            <a class="cart_quantity_up" href=""> + </a>
                            <input class="cart_quantity_input" type="text" name="quantity" value="<?= $quantity[$product['id']]; ?>" autocomplete="off" size="2">
                            <a class="cart_quantity_down" href=""> - </a>
                        </div>
                    </td>
                    <td class="cart_total">
                        <p class="cart_total_price">$<?php echo $product['price'] * $quantity[$product['id']]; ?></p>
                    </td>
                    <td class="cart_delete">
                        <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                <?php }; ?>


                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->


 <?php include_once (ROOT . "/views/layouts/footer.php");