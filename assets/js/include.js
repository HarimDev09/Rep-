document.addEventListener("DOMContentLoaded", () => {
    // Cargar Header
    fetch('header.html')
      .then(res => res.text())
      .then(data => {
        document.getElementById('header').innerHTML = data;
  
        // Espera un tick para que Bootstrap reaccione si hay JS dinámico (opcional)
        initBootstrapComponents();
      });
  
    // Cargar Footer
    fetch('footer.html')
      .then(res => res.text())
      .then(data => {
        document.getElementById('footer').innerHTML = data;
      });
  });
  
  function initBootstrapComponents() {
    // Aquí puedes re-inicializar tooltips, popovers o cualquier componente Bootstrap si hace falta
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  
    // Agrega más inicializaciones si usas Collapse, Dropdown, etc.
  }
  