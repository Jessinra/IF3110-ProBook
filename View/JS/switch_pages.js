function switch_to_page(page) {
    var nav_bar = document.getElementsByClassName("nav-button");
    nav_bar[page].classList.add("active");

}

function switch_to_browse() {
    switch_to_page(0);
}

function switch_to_history() {
    switch_to_page(1);
}

function switch_to_profile() {
    switch_to_page(2);
}