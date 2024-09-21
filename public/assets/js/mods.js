var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
const MODS = document.querySelectorAll('.mod');
MODS.forEach((mod, index) => {
    if (mod instanceof HTMLElement)
        mod.style.setProperty('--animation-delay', 150 * index + 'ms');
});
function fetchMods(parameters = null) {
    return __awaiter(this, void 0, void 0, function* () {
        const MODS_URL = new URL(window.location.href);
        if (parameters !== null) {
            let paramName;
            for (paramName in parameters) {
                MODS_URL.searchParams.append(paramName, parameters[paramName]);
            }
            console.log(MODS_URL.toString());
        }
        const CONFIG = {
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        };
        const RESPONSE = yield fetch(MODS_URL, CONFIG);
        if (!RESPONSE.ok)
            console.error(`Le requête pour l\'url ${URL} a échouée`);
        const MODS = yield RESPONSE.json();
        return MODS;
    });
}
fetchMods().then((mods) => {
    console.log(mods);
});
const MODS_FILTERS_FORM = document.querySelector('form.mods-filters-form');
MODS_FILTERS_FORM === null || MODS_FILTERS_FORM === void 0 ? void 0 : MODS_FILTERS_FORM.addEventListener('submit', (ev) => {
    ev.preventDefault();
    const FORM_DATA = new FormData(MODS_FILTERS_FORM);
    const ACTIVATED_MODS = FORM_DATA.get('activated-mods');
    const TAGS = FORM_DATA.get('tags');
    if (typeof ACTIVATED_MODS === 'string' && typeof TAGS === 'string') {
        const FILTERS_DATA = { 'activated-mods': ACTIVATED_MODS, 'tags': TAGS };
        fetchMods(FILTERS_DATA).then((mods) => console.log(mods));
    }
});
export {};
