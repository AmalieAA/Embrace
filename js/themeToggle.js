const storageKey = 'theme-preference'

function getThemePreference() {
    if (localStorage.getItem(storageKey))
        return localStorage.getItem(storageKey)
    else
        return '';
}

function setPreference(theme) {
    localStorage.setItem(storageKey, theme);

    reflectPreference();
}

function reflectPreference() {
    const theme = getThemePreference();
    document.firstElementChild.setAttribute('data-theme', theme);

    const themeSelector = document.querySelector('#ThemeSelector');
    if(themeSelector) {
        themeSelector.value = theme;
    }
}
reflectPreference();

window.addEventListener('load', function () {
    reflectPreference();

    document.querySelector('#ThemeSelector').addEventListener('change', changeTheme)
});

function changeTheme(event) {
    const theme = event.target.value;
    setPreference(theme);
}