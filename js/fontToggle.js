const fontStorageKey = 'font-preference'

function getFontPreference() {
    if (localStorage.getItem(fontStorageKey))
        return localStorage.getItem(fontStorageKey)
    else
        return '';
}

function setFontPreference(font) {
    localStorage.setItem(fontStorageKey, font);

    reflectFontPreference();
}

function reflectFontPreference() {
    const font = getFontPreference();
    document.firstElementChild.setAttribute('data-font', font);

    const fontSelector = document.querySelector('#FontSelector');
    if(fontSelector) {
        fontSelector.value = font;
    }
}
reflectFontPreference();
window.addEventListener('load', function () {
    reflectFontPreference();

    document.querySelector('#FontSelector').addEventListener('change', changeFont)
});

function changeFont(event) {
    const font = event.target.value;
    setFontPreference(font);
}