function validate_review(){
    var star = document.getElementById('number-star');
    var comment = document.getElementById('book-comment');
    var valid = true;
    if(star.value == 0){
        valid = false;
    }
    if(comment.value.length == 0){
        comment.style.borderColor = "red";
        valid = false;
    }
    else{
        comment.style.borderColor = "#00374C";
    }
    return valid;
}