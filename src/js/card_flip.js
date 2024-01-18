var team_cards = document.querySelectorAll('.team .card');

[...team_cards].forEach((card)=>{
    card.addEventListener('click', function() {
        card.classList.toggle('is-flipped');
    });
});

var activities_cards = document.querySelectorAll('.activities .card');

[...activities_cards].forEach((card) => {
    var btn = card.querySelector('.buttons button');
    btn.addEventListener('click', function () {
        card.classList.toggle('is-flipped');
    });
    var card_back = card.querySelector('.card__face--back');
    card_back.addEventListener('click', function () {
        card.classList.toggle('is-flipped');
    });
});