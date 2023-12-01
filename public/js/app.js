window.onscroll = function() {
    var backButton = document.getElementById('back-to-top-button');
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        backButton.style.display = 'block';
    } else {
        backButton.style.display = 'none';
    }
};

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

