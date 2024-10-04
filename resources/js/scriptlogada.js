document.querySelectorAll('nav ul li a').forEach(link => {
    link.addEventListener('click', function() {
        document.querySelectorAll('nav ul li a').forEach(l => l.classList.remove('active'));
        this.classList.add('active');
    });
});

// Abre o painel lateral de usuário
function openUserPanel() {
    document.getElementById("userPanel").style.width = "300px";
}

// Fecha o painel lateral de usuário
function closeUserPanel() {
    document.getElementById("userPanel").style.width = "0";
}