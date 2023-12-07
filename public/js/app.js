window.onscroll = function () {
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

document.addEventListener('DOMContentLoaded', function () {
    let price = document.querySelector('#price');
    let discount_percent = document.querySelector('#discount_percent');
    let discount = document.querySelector('#discount');

    discount_percent.addEventListener('input', () => {
        console.log(discount_percent.value);
        discount.value = price.value - (price.value * discount_percent.value) / 100;
    });
});
