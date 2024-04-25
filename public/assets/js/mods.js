const MODS = document.querySelectorAll('.mod');

MODS.forEach((MOD, index) => {
    MOD.style.setProperty('--animation-delay', 150 * index + 'ms');
})