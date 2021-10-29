var getBrandDetails = function(form){
    let brand_state;
    let brand_name = document.getElementById("brand_name").value;


    if (brand_name.length == 0){
        alert("Please brand name cannot be empty!.\n Please input something.");
        brand_state = false;
        return false;
    }else{
        brand_state = true;
    }


    let finalSate = brand_state;

    if (!finalSate){
        return false
    }
    else{
        localStorage.setItem('brand_name', brand_name);
        window.location.href= "../Actions/Add_brand.php";
    }

}