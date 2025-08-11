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

//Custom Dropdown
document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".custom-dropdown-menu");

  dropdowns.forEach(function (dropdown) {
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
        return (window.location.href = toggle.getAttribute("href"));
      } else {
        if (!clickedOnce) {
          toggle.classList.add("show");
          menu.classList.add("show");
          clickedOnce = true;
        } else {
          window.location.href = toggle.getAttribute("href");
        }
      }
    });
  });

  // Alt menü (dropdown-submenu) için yeni kod
  const subDropdowns = document.querySelectorAll(".dropdown-submenu");

  subDropdowns.forEach(function (subDropdown) {
    const subToggle = subDropdown.querySelector(".dropdown-toggle");
    const subMenu = subDropdown.querySelector(".dropdown-menu");

    // Masaüstü ekranlarda hover ile açılmasını sağlar
    if (window.innerWidth >= 1200) {
      subDropdown.addEventListener("mouseenter", () => {
        subToggle.classList.add("show");
        subMenu.classList.add("show");
      });

      subDropdown.addEventListener("mouseleave", () => {
        subToggle.classList.remove("show");
        subMenu.classList.remove("show");
      });
    }

    // Mobil cihazlarda tıklama ile açılmasını sağlar
    subToggle.addEventListener("click", function (e) {
      if (window.innerWidth < 1200) {
        e.preventDefault(); // Linke gitmeyi engelle
        subToggle.classList.toggle("show");
        subMenu.classList.toggle("show");
      }
    });
  });

});

/* HomePage Projects */
document.addEventListener("DOMContentLoaded", function () {
  const carouselTrack = document.getElementById("carouselTrack");
  const items = document.querySelectorAll(".custom-carousel-item");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");
  let currentIndex = 1; // Aktif (ortadaki) kartın indeksi

  if (carouselTrack && items.length > 0 && prevBtn && nextBtn) {

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
    
  }
});

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    }
  });
});

// Gözlemlemek istediğin tüm elementleri seç:
document.querySelectorAll('.image-box').forEach(el => observer.observe(el));

// "Who Are We" bölümünün görünürlüğünü izlemek için Intersection Observer
const targetWhatWeDo = document.querySelector('.what-we-do');
const observerWhatWeDo = new IntersectionObserver(
  ([entry]) => {
    const btn = targetWhatWeDo.querySelector('a.btn');
    if (!entry.isIntersecting) {
      targetWhatWeDo.classList.add('scrolled');
      btn.classList.add('btn-outline-parlement');
      btn.classList.remove('btn-outline-white');
    } else {
      targetWhatWeDo.classList.remove('scrolled');
      btn.classList.add('btn-outline-white');
      btn.classList.remove('btn-outline-parlement');
    }
  },
  {
    threshold: 0.60 // %60 görünüyorsa bile görünür say
  }
);

if (targetWhatWeDo) observerWhatWeDo.observe(targetWhatWeDo);

// "Who Are We" bölümünün görünürlüğünü izlemek için Intersection Observer kullan
const targetWhoAreWe = document.querySelector('.who-are-we');
const observerWhoAreWe = new IntersectionObserver(
  ([entry]) => {
    if (!entry.isIntersecting) {
      targetWhoAreWe.classList.add('scrolled');
    } else {
      targetWhoAreWe.classList.remove('scrolled');
    }
  },
  {
    threshold: 0.2 // %20 görünüyorsa bile "görünür" say
  }
);

if (targetWhoAreWe) observerWhoAreWe.observe(targetWhoAreWe);