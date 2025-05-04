document.addEventListener("DOMContentLoaded", function () {
  // Seleccionar todos los elementos de la galería
  const galleryItems = document.querySelectorAll(".gallery-item");
  const modal = document.getElementById("imageModal");
  const modalImg = document.getElementById("modalImage");
  const modalCaption = document.getElementById("modalCaption");
  const closeBtn = document.getElementById("closeModal");

  // Añadir evento click a cada elemento de la galería
  galleryItems.forEach((item) => {
    item.addEventListener("click", function () {
      const imgSrc = this.querySelector("img").getAttribute("src");
      const imgAlt = this.querySelector("img").getAttribute("alt");

      modalImg.setAttribute("src", imgSrc);
      modalImg.setAttribute("alt", imgAlt);
      modalCaption.textContent = imgAlt;

      // Mostrar modal
      modal.classList.remove("hidden");
      document.body.style.overflow = "hidden"; // Deshabilitar scroll
    });
  });

  // Cerrar modal al hacer click en el botón
  closeBtn.addEventListener("click", function () {
    modal.classList.add("hidden");
    document.body.style.overflow = ""; // Restaurar scroll
  });

  // Cerrar modal al hacer click fuera de la imagen
  modal.addEventListener("click", function (e) {
    if (e.target === modal) {
      modal.classList.add("hidden");
      document.body.style.overflow = "";
    }
  });

  // Cerrar con tecla ESC
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && !modal.classList.contains("hidden")) {
      modal.classList.add("hidden");
      document.body.style.overflow = "";
    }
  });

  const header = document.querySelector("header");
  const logo = document.querySelector(".logo");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 300) {
      header.classList.add("bg-white", "shadow-md");
      header.classList.remove("bg-transparent", "shadow-none");
      logo.classList.remove("h-20");
      logo.classList.add("h-10");
    } else {
      header.classList.remove("bg-white", "shadow-md");
      header.classList.add("bg-transparent", "shadow-none");
      logo.classList.remove("h-10");
      logo.classList.add("h-20");
    }
  });
});
