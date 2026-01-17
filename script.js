document.addEventListener("DOMContentLoaded", () => {

  /* =========================
     MENU BURGER (MOBILE)
  ========================= */
  const toggleBtn = document.querySelector(".nav-toggle");
  const navLinks = document.querySelector(".nav-links");

  if (toggleBtn && navLinks) {
    toggleBtn.addEventListener("click", () => {
      navLinks.classList.toggle("active");
      toggleBtn.classList.toggle("open");
    });

    // Fecha menu ao clicar em um link (UX melhor)
    document.querySelectorAll(".nav-links a").forEach(link => {
      link.addEventListener("click", () => {
        navLinks.classList.remove("active");
        toggleBtn.classList.remove("open");
      });
    });
  }

  /* =========================
     BACK TO TOP
  ========================= */
  const backToTop = document.getElementById("backToTop");

  if (backToTop) {
    window.addEventListener("scroll", () => {
      backToTop.style.display = window.scrollY > 400 ? "block" : "none";
    });

    backToTop.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  /* =========================
     CAROUSEL AVIS (LOOP)
  ========================= */
  const track = document.querySelector(".carousel-track");

  if (track) {
    let position = 0;
    const speed = 0.4; // velocidade suave

    function moveCarousel() {
      position -= speed;

      if (Math.abs(position) >= track.scrollWidth / 2) {
        position = 0;
      }

      track.style.transform = `translateX(${position}px)`;
      requestAnimationFrame(moveCarousel);
    }

    // Duplica os avis para loop infinito
    track.innerHTML += track.innerHTML;

    // Pause no hover
    track.addEventListener("mouseenter", () => {
      track.style.animationPlayState = "paused";
    });

    track.addEventListener("mouseleave", () => {
      track.style.animationPlayState = "running";
    });

    moveCarousel();
  }

});
