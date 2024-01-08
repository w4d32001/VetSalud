function toggleHidden() {
    var elemento = document.getElementById('aside');
    if (elemento.classList.contains('hidden')) {
        elemento.classList.remove('hidden','lg:block');
    } else {
        elemento.classList.add('hidden');
    }
}