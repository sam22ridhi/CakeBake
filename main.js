
document.addEventListener('DOMContentLoaded', function () {
    const card = document.querySelector('.card');
    const selectedWeight = document.querySelectorAll('.cakeWeight');
    const selectedWeightElement = document.querySelectorAll('.selectedWeight');
    const cakePriceElement = document.querySelectorAll('.cakePrice');
    const addToCartButton = card.querySelector('.addToCart');

    function updateCakePrice(kgs, index) {
        const cakePrice = cakePriceElement?.[index];
        const weight = selectedWeightElement?.[index];

        if (+kgs === 1) {
            weight.innerHTML = '1 kg'
            cakePrice.innerHTML = +cakePrice.dataset.price * 2
        }

        if (+kgs === 0.5) {
            weight.innerHTML = '1/2 kg'
            cakePrice.innerHTML = +cakePrice.dataset.price
        }
    }


    selectedWeight.forEach(select => {
        select.addEventListener('change', function (e) {
            updateCakePrice(e.target.value, e.target.dataset.index);
        });
    });
});
