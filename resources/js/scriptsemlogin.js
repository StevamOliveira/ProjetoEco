document.querySelectorAll('nav ul li a').forEach(link => {
    link.addEventListener('click', function() {
        document.querySelectorAll('nav ul li a').forEach(l => l.classList.remove('active'));
        this.classList.add('active');
    });
});