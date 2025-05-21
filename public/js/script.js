let swiper;
fetch("public/js/galeria.json")
  .then((response) => response.json())
  .then((images) => {
    const gallery = document.querySelector(".gallery");
    images.slice(3).forEach((img) => {
      // Ignora las primeras 3 ya cargadas
      gallery.innerHTML += `
                        <div class="swiper-slide w-72 bg-white rounded-xl shadow-lg overflow-hidden">
              <div class="relative">
                <img src="${img.src}" alt="${img.alt}" class="w-full h-72 object-cover" />
                <img src="/isangeles/public/img/Isangeles_Logo_Gold.png" alt="Marca de agua" class="absolute top-2 left-2 w-20" />
              </div>
              <div class="p-4 text-center">
                <p class="text-red-800 font-semibold">${img.title}</p>
              </div>
            </div>
          `;
    });

    if (swiper) swiper.destroy(true, true);
    swiper = new Swiper(".mySwiper", {
      loop: true,
      slidesPerView: "auto", // Cambiado de 1 a 'auto' para mejor adaptación
      centeredSlides: true,
      spaceBetween: 20,
      speed: 4000,
      allowTouchMove: true,
      autoplay: {
        delay: 1,
        disableOnInteraction: false,
      },
      lazy: {
        loadPrevNext: true,
      },
      breakpoints: {
        // Cuando el ancho de la ventana es >= 640px
        640: {
          slidesPerView: 2,
        },
        // Cuando el ancho de la ventana es >= 1024px
        1024: {
          slidesPerView: 3,
        },
      },
      on: {
        init: function () {
          // Pausar al pasar el mouse
          this.el.addEventListener("mouseenter", () => {
            this.autoplay.stop();
          });

          // Reanudar al quitar el mouse
          this.el.addEventListener("mouseleave", () => {
            this.autoplay.start();
          });
        },
      },
    });
    // ✅ Llama la función para enlazar los eventos después de crear los slides
    initImageModal();
  });
function initImageModal() {
  const modal = document.getElementById("imageModal");
  const modalContent = document.getElementById("modalContent");
  const modalImg = document.getElementById("modalImage");
  const modalCaption = document.getElementById("modalCaption");

  document.querySelectorAll(".swiper-slide").forEach((slide) => {
    slide.addEventListener("click", () => {
      const img = slide.querySelector("img");
      modalImg.src = img.src;
      modalImg.alt = img.alt;
      modalCaption.textContent = slide.querySelector("p")?.textContent || "";

      // Mostrar modal
      modal.classList.remove("invisible");
      document.body.style.overflow = "hidden";

      // Forzar reflow para aplicar transiciones
      void modal.offsetWidth;

      modal.classList.replace("bg-opacity-0", "bg-opacity-80");
      modalContent.classList.remove("scale-95", "opacity-0");
      modalContent.classList.add("scale-100", "opacity-100");
      modalCaption.classList.remove("opacity-0");
      modalCaption.classList.add("opacity-100");
    });
  });

  const closeModal = () => {
    modal.classList.replace("bg-opacity-80", "bg-opacity-0");
    modalContent.classList.remove("scale-100", "opacity-100");
    modalContent.classList.add("scale-95", "opacity-0");
    modalCaption.classList.remove("opacity-100");
    modalCaption.classList.add("opacity-0");

    setTimeout(() => {
      modal.classList.add("invisible");
      document.body.style.overflow = "auto";
    }, 300);
  };

  document.getElementById("closeModal").addEventListener("click", closeModal);
  modal.addEventListener("click", (e) => e.target === modal && closeModal());
  document.addEventListener("keydown", (e) => e.key === "Escape" && !modal.classList.contains("invisible") && closeModal());
}

// document.addEventListener("DOMContentLoaded", initImageModal);
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
