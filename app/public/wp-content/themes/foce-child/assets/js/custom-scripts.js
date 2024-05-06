
console.log("Démarrage du script !");

// Différe le lancement du script => ne se lance qu'une fois que tout le HTML a été chargé

document.addEventListener("DOMContentLoaded", function () {
  monScript();
});

function monScript() {
  // console.log("HTML prêt !");

  // Gestion de la fermeture et de l'ouverture de la modale avec jQuery
  (function($) {
      $(".modal-open").click(function () {
      console.log("modal-trigger cliqué");
      $(".modal__content").animate({ height: "toggle", opacity: "toggle" }, 1000);
      $(".modal__content").toggleClass("open");
      $(".modal__burger").toggleClass("close");
    });
    $("a").click(function () {
      if ($(".modal__content").hasClass("open")) {
        $(".modal__content").animate(
          { height: "toggle", opacity: "toggle" },
          1000
        );
        $(".modal__content").removeClass("open");
        $(".modal__burger").removeClass("close");
      }
    });    
  })(jQuery);
}

   // Initialize Swiper
   var swiper = new Swiper('.swiper-container', {
    spaceBetween: 60,
    speed: 1000,
    autoplay: {
        delay: 250,
    },
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 3,
    coverflowEffect: {
        rotate: 60,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
    },
    autoplay: {
        delay: 2500,
        // disableOnInteraction: false,
    },

});


  let posX = 0;
  let mouveCloud = false;

  const root = document.documentElement;
  const place = document.querySelector("#place");

  const handleIntersect = (entries) => {
    entries.forEach(function (entry) {
      // Contrôle si l'élément à observer
      // est dans le ratio de la zone qui est affichée
      if (entry.intersectionRatio > ratio) {
        elementName = entry.target.className;
        // console.log(elementName + " est visible");
        
        // Si on trouve l'élément indiqué, on active l'animation d'apparition
        if (
          elementName === "story hidden" ||
          elementName === "studio hidden" ||
          elementName === "oscars hidden" ||
          elementName === "site-footer hidden"
        ) {
          // On valide la class qui va executer le keyframes d'apparition des sections
          entry.target.classList.add("mouve-up");
          // On arrête l'observation sur cet élément
          observer.unobserve(entry.target);
          // On retire la class qui cachait par défaut l'élement
          entry.target.classList.remove("hidden");
        }

        if (
          elementName === "story__title hidden" ||
          elementName === "studio__title hidden" ||
          elementName === "characters__title hidden" ||
          elementName === "place__title hidden"
        ) {
          entry.target.classList.add("animTitle");
          observer.unobserve(entry.target);
          entry.target.classList.remove("hidden");
        }        
      }
    });
  };

    const ratio = 0.05;
    // Initialisation de l'option pour la fonction IntersectionObserver
    // root :
    // ratio : % qui doit être visible de l'élement avant de déclencher l'action
    const options = {
        root: null,
        rootMargin: "0px",
        threshold: ratio,
    };


  //  Initialisation de la fonction IntersectionObserver
  const observer = new IntersectionObserver(handleIntersect, options);

  // Activation des éléments que l'on va surveiller
  observer.observe(document.querySelector(".story"));
  observer.observe(document.querySelector(".studio"));
  observer.observe(document.querySelector(".oscars"));
  observer.observe(document.querySelector(".story__title"));
  observer.observe(document.querySelector(".studio__title"));
  observer.observe(document.querySelector(".characters__title"));
  observer.observe(document.querySelector(".place__title"));


// EFFET DE PARALLAX DU LOGO
  document.addEventListener('DOMContentLoaded', function() {
    // Sélectionne le logo
    var logo = document.querySelector('.banner__logo');

    // Fonction pour ajuster la position du logo en fonction du défilement
    function adjustLogoPosition() {
        // Obtient la position de défilement actuelle
        var scrollPosition = window.scrollY;

        // Définit la position maximale du logo
        var maxLogoPosition = document.querySelector('.banner').offsetHeight - logo.offsetHeight;

        // Ajuste la position du logo en fonction du défilement
        if (scrollPosition < maxLogoPosition) {
            logo.style.top = scrollPosition + 'px';
        } else {
            logo.style.top = maxLogoPosition + 'px';
        }
    }

    // Écoute l'événement de défilement de la page et ajustez la position du logo
    window.addEventListener('scroll', adjustLogoPosition);
});

 // Contrôle si on scroll sur la fenêtre
 window.addEventListener("scroll", () => {
      // On bouge les 2 nuages en fonction du scroll
      posX = Math.round(0 - (window.scrollY - place.offsetTop - 200));
      if (posX <= 0 && posX > -400) {
        root.style.setProperty("--posX", posX + "px");
      }     
  });