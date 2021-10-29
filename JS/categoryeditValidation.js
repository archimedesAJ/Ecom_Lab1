var getBrandDetail = function(form){
    let cat_state;
    let cat_name = document.getElementById("cat_name").value;


    var regCatName =  /^[a-zA-Z]+\s*[a-zA-Z]*$/;
    

    if (!regCatName.test(cat_name)){
        alert("Please type an appropriate brand name.\n Categories should not empty!.\n Do not use numbers or special characters!");
        cat_state = false;
        return false;
    }else{
        cat_state = true;
    }

 

    let finalSate = cat_state;

    if (!finalSate){
        return false
    }
    else{
        localStorage.setItem('cat_name', cat_name);
        window.location.href= "../Actions/Update_category.php";
    }

}