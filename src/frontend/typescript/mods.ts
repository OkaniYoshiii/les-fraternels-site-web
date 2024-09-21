import { Mod } from "./entities/Mod.js";

const MODS = document.querySelectorAll('.mod');

MODS.forEach((mod, index) => {
    if(mod instanceof HTMLElement) mod.style.setProperty('--animation-delay', 150 * index + 'ms');
})

async function fetchMods()
{
    const URL = window.location.href;
    const CONFIG = {
        headers : {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        }
    };
    const RESPONSE = await fetch(URL, CONFIG);
    if(!RESPONSE.ok) console.error(`Le requête pour l\'url ${URL} a échouée`);
    const MODS = await RESPONSE.json();
    return MODS;
}

fetchMods().then((mods) => {
    console.log(mods);
});