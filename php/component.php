<?php

function component($productname, $productvalue, $productimg, $productdesc){
    $element ="<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"index.php\" method=\"post\">
        <div class = \"card shadow\">
        </div>
        <div>
            <img src=\"$productimg\" alt=\"\" class=\"img-fluid card-img-top\">
        </div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">$productname</h5>
            <h6>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"far fa-star\"></i>
            </h6>
            <p class=\"card-text\">$productdesc</p>
            <h5>
                <small><s class=\"text-secondary\">$50</s></small>
                <span class=\"price\">$$productvalue</span>
                <button type= \"submit\" class=\"btn btn-warning my-3\" name = \"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
            </h5>
        </div>
    </form>
</div>";
echo $element;
}


?>