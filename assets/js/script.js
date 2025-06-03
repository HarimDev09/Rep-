document.getElementById("newsletterForm").addEventListener("submit", function (e) {
  e.preventDefault();
  const email = document.getElementById("text6").value.trim();
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!emailRegex.test(email)) {
      alert("Por favor, ingresa un correo válido.");
      return;
  }

  fetch("subscribe.php", {
      method: "POST",
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: `email=${encodeURIComponent(email)}`
  })
  .then(res => res.text())
  .then(data => {
      document.getElementById("responseMessage").textContent = data;
      document.getElementById("text6").value = "";
  })
  .catch(err => {
      console.error(err);
      document.getElementById("responseMessage").textContent = "Error al suscribirse.";
  });
});