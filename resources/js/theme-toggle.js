document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('theme-toggle');
    const currentTheme = localStorage.getItem('theme');

    console.log("Current theme: ", currentTheme);
    // Apply the stored theme on page load
    if (currentTheme) {
        document.documentElement.setAttribute('data-theme', currentTheme);
        if (currentTheme === 'light') {
            document.body.classList.add('light-mode');
        }
    }

    // Toggle theme and update localStorage
    toggleButton.addEventListener('click', () => {
        const isLight = document.body.classList.toggle('light-mode');
        const theme = isLight ? 'light' : 'dark';
        localStorage.setItem('theme', theme);

        // Apply the `data-theme` attribute for styling
        document.documentElement.setAttribute('data-theme', theme);
    });
});