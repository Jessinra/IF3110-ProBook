<!--Make nav bar static at top-->

window.onscroll = function() {stick_nav_to_top()};

let nav_bar = document.getElementsByClassName("nav-bar")[0];
let sticky_nav_bar = nav_bar.offsetTop;

function stick_nav_to_top() {
    if (window.pageYOffset > sticky_nav_bar) {
        nav_bar.classList.add("sticky-nav-bar");
        nav_bar.classList.add("resp-element");
    } else {
        nav_bar.classList.remove("sticky-nav-bar");
        nav_bar.classList.remove("resp-element");
    }
}
