var getBrandDetail = function(form){
    let brand_state;
    let brand_name = document.getElementById("brand_name").value;


    var regBrandName =  /^[a-zA-Z]+\s*[a-zA-Z]*$/;
    

    if (!regBrandName.test(brand_name)){
        alert("Please type an appropriate brand name. Do not use numbers or special characters!");
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
        window.location.href= "../Actions/Update_brand.php";
    }

}