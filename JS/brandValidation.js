var getBrandDetails = function(form){
    let brand_state;
    let brand_name = document.getElementById("brand_name").value;


    var regBrandName = /(^[A-Za-z]{3,16})([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})/;
    

    while (brand_name.length !==0){
        if (!regBrandName.test(brand_name)){
            alert("Please type an appropriate brand name. Do not use numbers or special characters!");
            brand_state = false;
            return false;
        }else{
            brand_state = true;
        }
    }
    alert("it's empty. Please type something");

    

    let finalSate = brand_state;

    if (!finalSate){
        return false
    }
    else{
        localStorage.setItem('brand_name', brand_name);
        window.location.href = "../Actions/Add_branch.php";
    }

}