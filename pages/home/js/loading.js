document.addEventListener('DOMContentLoaded', function() {
  // Simulando um evento de finalização do carregamento após 3 segundos
  setTimeout(function() {
    var loading = document.querySelector('.loading');
    loading.classList.add('fade-out');
    setTimeout(function() {
      loading.parentNode.removeChild(loading);
    }, 500);
  }, 800);
});