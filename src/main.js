import "bootstrap";
import ScrollReveal from "scrollreveal";

document.addEventListener("DOMContentLoaded", function () {
  const sr = ScrollReveal({
    duration: 1000,
    origin: "top",
    distance: "50px",
    easing: "ease-in-out",
    reset: false,
  });

  sr.reveal(".scroll-reveal");
  sr.reveal(".scroll-reveal-bottom", { origin: "bottom", distance: "100px" });
  sr.reveal(".scroll-reveal-left", { origin: "left" });
  sr.reveal(".scroll-reveal-left-step-1", { origin: "left", distance: "100px" });
  sr.reveal(".scroll-reveal-left-step-2", { origin: "left", distance: "150px" });
  sr.reveal(".scroll-reveal-right", { origin: "right" });
  sr.reveal(".scroll-reveal-top", { origin: "top" });
  sr.reveal(".scroll-reveal-scale", { scale: 0.3, duration: 1200 });
  sr.reveal(".scroll-reveal-scale-end", { scale: 1.3, duration: 1200 });
  sr.reveal(".scroll-reveal-fade", { opacity: 0, distance: "30px" });

  /* Navbar Scroll */
  const footer = document.getElementById("footer");
  const scrollToTop = document.getElementById("scroll-to-top");

  function handleScroll() {
    if (footer && scrollToTop) {
      const footerPosition = footer.getBoundingClientRect();
      const windowHeight = window.innerHeight;

      if (footerPosition.top < windowHeight) {
        scrollToTop.classList.remove("d-none");
      } else {
        scrollToTop.classList.add("d-none");
      }
    }
  }
  handleScroll(); // Initial check
  window.addEventListener("scroll", handleScroll);
});

/* CountUp.js */
import { CountUp } from "countup.js";
document.querySelectorAll(".countup").forEach((el) => {
  const value = parseInt(el.dataset.value);
  if (!isNaN(value)) {
    const observer = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const counter = new CountUp(el, value);
            if (!counter.error) {
              counter.start();
              obs.unobserve(el);
            } else {
              console.error(counter.error);
            }
          }
        });
      },
      { threshold: 0.6 }
    );

    observer.observe(el);
  }
});
/* CountUp.js - End */

document.addEventListener("DOMContentLoaded", function () {
  const dropdown = document.querySelector(".custom-dropdown-menu");

  if (dropdown) {
    const toggle = dropdown.querySelector(".dropdown-toggle");
    const menu = dropdown.querySelector(".dropdown-menu");

    let clickedOnce = false;

    dropdown.addEventListener("mouseenter", () => {
      if (window.innerWidth >= 1200) {
        toggle.classList.add("show");
        menu.classList.add("show");
      }
    });

    dropdown.addEventListener("mouseleave", () => {
      if (window.innerWidth >= 1200) {
        toggle.classList.remove("show");
        menu.classList.remove("show");
      }
    });

    toggle.addEventListener("click", function (e) {
      e.preventDefault();
      if (window.innerWidth >= 1200) {
        e.preventDefault();
        return (window.location.href = toggle.getAttribute("href"));
      } else {
        if (!clickedOnce) {
          e.preventDefault();
          toggle.classList.add("show");
          menu.classList.add("show");
          clickedOnce = true;
        } else {
          window.location.href = toggle.getAttribute("href");
        }
      }
    });
  }
});

/* HomePage Projects */
document.addEventListener("DOMContentLoaded", function () {
  const carouselTrack = document.getElementById("carouselTrack");
  const items = document.querySelectorAll(".custom-carousel-item");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");
  let currentIndex = 1; // Aktif (ortadaki) kartın indeksi

  // Carousel'i başlangıç pozisyonuna ayarla
  function updateCarouselPosition() {
    const viewportWidth = document.querySelector(".custom-carousel-viewport").offsetWidth;
    let offset = 0;

    // Aktif kartın sol kenarını viewport'un ortasına getirmek için kaydırma hesapla
    // Bu, aktif kartın genişliğini ve solundaki kartların toplam genişliğini hesaba katmalıdır.

    // İlk olarak tüm kartların aktif/pasif genişliklerini belirle
    let itemWidths = Array.from(items).map((item, index) => {
      if (index === currentIndex) {
        // Aktif kartın genişliği (CSS'ten alınacak veya sabit bir değer)
        // Geniş ekranlarda %50, tabletlerde %70, mobilde %100
        if (window.innerWidth >= 992) return viewportWidth * 0.5; // 50%
        else if (window.innerWidth >= 768) return viewportWidth * 0.7; // 70%
        else return viewportWidth * 1; // 100%
      } else {
        // Pasif kartların genişliği (CSS'ten alınacak veya sabit bir değer)
        // Geniş ekranlarda %33.33, tabletlerde %50, mobilde %100
        if (window.innerWidth >= 992) return viewportWidth * 0.3333; // 33.33%
        else if (window.innerWidth >= 768) return viewportWidth * 0.5; // 50%
        else return viewportWidth * 1; // 100%
      }
    });

    // Solundaki kartların toplam genişliğini hesapla
    for (let i = 0; i < currentIndex; i++) {
      offset += itemWidths[i];
    }

    // Aktif kartın kendi genişliği
    const activeItemActualWidth = itemWidths[currentIndex];

    // Aktif kartı ortalamak için ek kaydırma
    // (Viewport genişliği - Aktif kartın genişliği) / 2 - Solundaki kartların toplam genişliği
    // Bu, aktif kartın sol kenarını viewport'un soluna hizalar, sonra ortalar.
    const centerOffset = viewportWidth / 2 - activeItemActualWidth / 2;

    // Toplam kaydırma miktarı
    const totalTranslateX = -(offset - centerOffset);

    carouselTrack.style.transform = `translateX(${totalTranslateX}px)`;

    // Aktif sınıfı güncelle
    items.forEach((item, index) => {
      item.classList.remove("active-center");
      if (index === currentIndex) {
        item.classList.add("active-center");
      }
    });
  }

  // Sonraki karta geç
  function nextSlide() {
    currentIndex = (currentIndex + 1) % items.length;
    updateCarouselPosition();
  }

  // Önceki karta geç
  function prevSlide() {
    currentIndex = (currentIndex - 1 + items.length) % items.length;
    updateCarouselPosition();
  }

  // Butonlara tıklama olaylarını ekle
  nextBtn.addEventListener("click", nextSlide);
  prevBtn.addEventListener("click", prevSlide);

  // Pencere boyutu değiştiğinde carousel'i yeniden konumlandır
  window.addEventListener("resize", updateCarouselPosition);

  // Sayfa yüklendiğinde ve ilk kez carousel'i ayarla
  updateCarouselPosition();
});
