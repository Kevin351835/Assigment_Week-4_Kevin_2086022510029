const greeting = document.getElementById('greeting');
if (greeting) {
    const hour = new Date().getHours();
    let text = 'Selamat malam!';
    if (hour < 11) text = 'Selamat pagi!';
    else if (hour < 15) text = 'Selamat siang!';
    else if (hour < 18) text = 'Selamat sore!';
    greeting.textContent = text;
}

const toggle = document.getElementById('themeToggle');

function applyTheme(isDark) {
    document.body.classList.toggle('dark', isDark);
    toggle.textContent = isDark ? '☀️ Mode Terang' : '🌙 Mode Gelap';
}

applyTheme(localStorage.getItem('theme') === 'dark');

toggle.addEventListener('click', () => {
    const isDark = !document.body.classList.contains('dark');
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
    applyTheme(isDark);
});