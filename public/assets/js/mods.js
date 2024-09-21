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
function fetchMods() {
    return __awaiter(this, void 0, void 0, function* () {
        const URL = window.location.href;
        const CONFIG = {
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        };
        const RESPONSE = yield fetch(URL, CONFIG);
        if (!RESPONSE.ok)
            console.error(`Le requête pour l\'url ${URL} a échouée`);
        const MODS = yield RESPONSE.json();
        return MODS;
    });
}
fetchMods().then((mods) => {
    console.log(mods);
});
export {};
