var getBrandDetails = function(form){
    let title_state, price_state, desc_state, keyword_state;
    let product_title = document.getElementById("title").value;
    let product_price = document.getElementById("price").value;
    let product_desc = document.getElementById("desc").value;
    let product_keyword = document.getElementById("keyword").value;
    

    if (product_title.length == 0){
        alert("Please product title cannot be empty!.\n Please input something.");
        title_state = false;
        return false;
    }else{
        title_state = true;
    }

    if (product_price.length == 0){
        alert("Please product price cannot be empty!.\n Please input something.");
        price_state = false;
        return false;
    }else{
        price_state = true;
    }

    if (product_desc.length == 0){
        alert("Please product description cannot be empty!.\n Please input something.");
        product_desc = false;
        return false;
    }else{
        product_desc = true;
    }

    if (product_keyword.length == 0){
        alert("Please product keyword cannot be empty!.\n Please input something.");
        product_keyword = false;
        return false;
    }else{
        product_keyword = true;
    }


    let finalSate = title_state && price_state && desc_state && keyword_state;

    if (!finalSate){
        return false
    }
    else{
        localStorage.setItem('product_title', product_title);
        localStorage.setItem('product_price', product_price);
        localStorage.setItem('product_desc', product_desc);
        localStorage.setItem('product_keyword', product_keyword);
        window.location.href= "../Actions/Add_product.php";
    }

}