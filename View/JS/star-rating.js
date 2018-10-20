function set_ratings(rating) {

    var star_ratings = document.getElementsByClassName('rating');
    var i;
    // reset star to empty state
    for (i = 0; i < 5; i++) {
        star_ratings[i].textContent = "☆";
    }
    // fill the star
    for (i = 4; i >= 5 - rating; i--) {
        star_ratings[i].textContent = "★";
    }

    // set form hidden input field
    var number = document.getElementById('number-star');
    number.value = rating;
}

function display_star_rating(rating) {
    var star_ratings = document.getElementsByClassName('rating');
    var i;

    // fill the star
    for (i = 0; i < Math.floor(rating); i++) {
        star_ratings[i].textContent = "★";
    }
}