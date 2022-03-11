<?php
    function printImg($book) {
        echo '<img width="100%" src='.$book['picture_url'].' class="card-img-top" alt="Cover :'.$book['name'].'">';
    }

    function printInfosBooks($book) {
        echo '<h5 class="card-title">'.$book['name'].'</h5>';
        echo '<p class="card-text">'.$book['summary'].'</p>';
        if ( $book['discount'] != null) {
            echo '<small class="badge rounded-pill bg-success">discount : '.$book['discount'].'%</small>';
        }
    }
    
    function printPrice($book) {
        $price = priceForDevise($book['price'], $book['discount']);
        if ( $book['discount'] != null) {
            $priceDiscount = number_format( priceDiscount($book['price'], $book['discount']), 2, ",", " ");
            return '<small class="text-muted"><del>'.$price.'</del> € => '.$priceDiscount.' €</small>';
        }
        else {
            return '<small class="text-muted">'.$price.' €</small>';
        }
    }

    function priceForDevise($price) {
        // echo "\price\n".number_format( $discouted/100, 2, ",", " ");
        return number_format( $price/100, 2, ",", " ");
    }
    
    function discount($price, $discount) {
        $discount = $price*($discount/100);
        $discount = (floor($discount)/100);
        return $discount;
    }

    function priceDiscount($price, $discount) {
        $discount = discount($price, $discount);
        $price = $price/100;
        $discouted = $price - $discount;
        return $discouted;
    }
?>