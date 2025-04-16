
    const storedTheme = localStorage.getItem('theme')
    const getPreferredTheme = () => {
    if (storedTheme) {
    return storedTheme
}
    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
}
    const setTheme = function (theme) {
    if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    document.documentElement.setAttribute('data-bs-theme', 'dark')
} else {
    document.documentElement.setAttribute('data-bs-theme', theme)
}
}

    setTheme(getPreferredTheme())

    window.addEventListener('DOMContentLoaded', () => {
    var el = document.querySelector('.theme-icon-active');
    if(el != 'undefined' && el != null) {
    const showActiveTheme = theme => {
    const activeThemeIcon = document.querySelector('.theme-icon-active use')
    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
    const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
    element.classList.remove('active')
})

    btnToActive.classList.add('active')
    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
}

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    if (storedTheme !== 'light' || storedTheme !== 'dark') {
    setTheme(getPreferredTheme())
}
})

    showActiveTheme(getPreferredTheme())

    document.querySelectorAll('[data-bs-theme-value]')
    .forEach(toggle => {
    toggle.addEventListener('click', () => {
    const theme = toggle.getAttribute('data-bs-theme-value')
    localStorage.setItem('theme', theme)
    setTheme(theme)
    showActiveTheme(theme)
})
})
}
});

export function sideBarOpenClose() {
    document.body.addEventListener('click', function(){
        document.getElementById("main").style.cssText = "margin: 0;"
    }, true);

    function closedSidebar() {
        document.getElementById("main").style.cssText = "margin: 0;";

    }
    function openedSidebar() {
        const mediaQuery = window.matchMedia('(min-width: 768px)')
        if (mediaQuery.matches) {
            document.getElementById("main").style.cssText = "margin: 0 -260px 0 0;";
        }else{
            document.getElementById("main").style.cssText = "margin: 0 -750px 0 0;";
        }
    }
}
