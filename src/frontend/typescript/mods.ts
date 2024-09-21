import { Mod } from "./entities/Mod.js";

const MODS = document.querySelectorAll('.mod');

MODS.forEach((mod, index) => {
    if(mod instanceof HTMLElement) mod.style.setProperty('--animation-delay', 150 * index + 'ms');
})

async function fetchMods(parameters : Readonly<ModsFilterData|null> = null)
{
    const MODS_URL = new URL(window.location.href);

    if(parameters !== null) {
        let paramName : keyof ModsFilterData;
        for(paramName in parameters) {
            MODS_URL.searchParams.append(paramName, parameters[paramName]);
        }

        console.log(MODS_URL.toString());
    }

    const CONFIG = {
        headers : {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        }
    };
    const RESPONSE = await fetch(MODS_URL, CONFIG);
    if(!RESPONSE.ok) console.error(`Le requête pour l\'url ${URL} a échouée`);
    const MODS = await RESPONSE.json();
    return MODS;
}

fetchMods().then((mods) => {
    console.log(mods);
});

const MODS_FILTERS_FORM = document.querySelector('form.mods-filters-form') as HTMLFormElement|null;
MODS_FILTERS_FORM?.addEventListener('submit', (ev : SubmitEvent) => {
    ev.preventDefault();
    const FORM_DATA = new FormData(MODS_FILTERS_FORM);
    const ACTIVATED_MODS = FORM_DATA.get('activated-mods');
    const TAGS = FORM_DATA.get('tags');
    if(typeof ACTIVATED_MODS === 'string' && typeof TAGS === 'string') {
        const FILTERS_DATA : ModsFilterData = { 'activated-mods' : ACTIVATED_MODS, 'tags' : TAGS };
        fetchMods(FILTERS_DATA).then((mods) => console.log(mods));
    }
});
