function showNextTab() {
    const currentActive = document.querySelector('#RegisterForm .active');
    const nextTab = currentActive.nextElementSibling;

    if(nextTab != null) {
        //bootstrap.Tab.getOrCreateInstance(nextTab).show();
        currentActive.classList.remove('active');
        currentActive.classList.remove('show');
        nextTab.classList.add('active');
        nextTab.classList.add('show');
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
}
function showPreviousTab() {
    const currentActive = document.querySelector('#RegisterForm .active');
    const previousTab = currentActive.previousElementSibling;

    if(previousTab != null) {
        //bootstrap.Tab.getOrCreateInstance(previousTab).show();
        currentActive.classList.remove('active');
        currentActive.classList.remove('show');
        previousTab.classList.add('active');
        previousTab.classList.add('show');
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
}