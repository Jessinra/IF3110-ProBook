function validate_search(){
    var search = document.getElementById('form-search-query');
    var border = document.getElementsByClassName('search-bar field')[0];
    var valid = true;
    if(search.value.length==0){
        border.style.borderColor = "red";
        valid = false;
    }
    else{
        border.style.borderColor = "#E4E4E4";
    }
    return valid;
}