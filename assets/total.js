const habileteCarac = document.getElementById('game_habileteCarac');
const habileteItem = document.getElementById('game_habileteItem');
const habileteGain = document.getElementById('game_habileteGain');
const habileteBase = document.getElementById('game_habileteBase');
const habileteTotal = document.getElementById('game_habileteTotal');

function calculTotal(){
    let total = 0;
    total += parseInt(habileteCarac.value);
    total += parseInt(habileteItem.value);
    total += parseInt(habileteGain.value);
    total += parseInt(habileteBase.textContent);
    habileteTotal.textContent = total;
}

habileteCarac.addEventListener('keyup', calculTotal);
habileteItem.addEventListener('keyup', calculTotal);
habileteGain.addEventListener('keyup', calculTotal);