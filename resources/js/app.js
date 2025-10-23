import './bootstrap';
import "flowbite";

if (
    localStorage.theme === 'dark' ||
    (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
) {
    document.documentElement.classList.add('dark');
    document.querySelector('#theme-toggle-dark-icon').classList.add('hidden');
    document.querySelector('#theme-toggle-light-icon').classList.remove('hidden');
} else {
    document.documentElement.classList.remove('dark');
    document.querySelector('#theme-toggle-dark-icon').classList.remove('hidden');
    document.querySelector('#theme-toggle-light-icon').classList.add('hidden');
}

const themeToggle = document.getElementById('theme-toggle');
themeToggle.addEventListener('click', () => {
    const html = document.documentElement;
    const isDark = html.classList.toggle('dark');

    document.querySelector('#theme-toggle-dark-icon').classList.toggle('hidden');
    document.querySelector('#theme-toggle-light-icon').classList.toggle('hidden');

    localStorage.theme = isDark ? 'dark' : 'light';
});