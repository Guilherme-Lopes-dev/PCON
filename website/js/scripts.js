$(document).ready(function () {
  //CAROUSEL MODELOS
  var carousel_modelos = $(".home_modelos_desktop .carousel_content .carousel");
  carousel_modelos.slick({
    slidesToShow: 2,
    dots: true,
    arrows: false,
    appendDots: ".home_modelos_desktop .carousel_content .dots",
    autoplay: false,
    autoplaySpeed: 5000,
    variableWidth: true,
    speed: 500,

    responsive: [
      {
        breakpoint: 1150,
        settings: {
          slidesToShow: 1,
        },
      },

      {
        breakpoint: 960,
        settings: {
          slidesToShow: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  $(".home_modelos_desktop .container-home .arrows button").click(function () {
    var direction = $(this).attr("class");
    carousel_modelos.slick(direction);
  });

  var carousel_modelos_mobile = $(
    ".home_modelos_mobile .carousel_content .carousel"
  );
  carousel_modelos_mobile.slick({
    slidesToShow: 2,
    dots: true,
    arrows: false,
    appendDots: ".home_modelos_mobile .carousel_content .dots",
    autoplay: false,
    autoplaySpeed: 5000,
    variableWidth: true,
    speed: 500,

    responsive: [
      {
        breakpoint: 1150,
        settings: {
          slidesToShow: 1,
        },
      },

      {
        breakpoint: 960,
        settings: {
          slidesToShow: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  $(".home_modelos_mobile .container-home .arrows button").click(function () {
    var direction = $(this).attr("class");
    carousel_modelos_mobile.slick(direction);
  });
  //*//CAROUSEL INSTITUCIONAL
  var carousel_modelos_institucional = $(
    ".home_modelos_institucional .carousel_content .carousel"
  );
  var containerWidth = $(
    ".home_modelos_institucional .carousel_content"
  ).width();
  var itemWidth = containerWidth / 4; // Define a largura de cada item

  carousel_modelos_institucional.on("init", function (event, slick) {
    var slides = slick.$slides;

    slides.each(function (index) {
      if (index >= 4) {
        // Defina o limite a partir do qual os itens devem ficar transparentes
        $(this).addClass("transparent");
      }
    });
  });

  carousel_modelos_institucional.slick({
    slidesToShow: 4,
    dots: true,
    arrows: false,
    appendDots: ".home_modelos_institucional .carousel_content .dots",
    autoplay: false,
    autoplaySpeed: 5000,
    variableWidth: true,
    speed: 500,
    infinite: false,
  });

  $(".home_modelos_institucional .arrows button.prev").click(function () {
    carousel_modelos_institucional.slick("slickPrev");
  });

  $(".home_modelos_institucional .arrows button.next").click(function () {
    carousel_modelos_institucional.slick("slickNext");
  });

  carousel_modelos_institucional.on(
    "afterChange",
    function (event, slick, currentSlide) {
      var slides = slick.$slides;

      slides.removeClass("transparent"); // Remover a classe de transparência de todos os slides

      slides.each(function (index) {
        if (index < currentSlide || index >= currentSlide + 4) {
          // Defina o limite a partir do qual os itens devem ficar transparentes
          $(this).addClass("transparent");
        }
      });

      var arrowLeft = $(".home_modelos_institucional .arrows button.prev");
      var arrowRight = $(".home_modelos_institucional .arrows button.next");

      if (currentSlide === 0) {
        arrowLeft.addClass("hidden");
      } else {
        arrowLeft.removeClass("hidden");
      }

      if (currentSlide >= slick.slideCount - 4) {
        // Defina o limite a partir do qual o botão next deve ser ocultado
        arrowRight.addClass("hidden");
      } else {
        arrowRight.removeClass("hidden");
      }
    }
  );
});

//Abre e fecha menu lateral
function toggleNav(state) {
  const nav = document.getElementById("myNav");
  const button = document.getElementById("openBtn");

  if (state === "open") {
    button.classList.add("is-active");
    button.classList.remove("non-active");
    //Esse 1900 é só pra não dar problema em dispositivos menores, se deixar 100vh 100dvh ou 100% se der scroll ele fica menor depois cresce
    nav.style.height = "1800px";
    // console.log(state)
  } else if (state === "close") {
    button.classList.remove("is-active");
    button.classList.add("non-active");
    nav.style.height = "0%";
    // console.log(state)
  }
}

if (pagina == "home") {
  document.addEventListener("DOMContentLoaded", function () {
    slideImages();
  });

  function slideImages() {
    const secondImage = document.querySelector(".second-image");
    const thirdImage = document.querySelector(".third-image");

    // Adiciona classes para animação de entrada da segunda imagem
    secondImage.classList.add("slide-from-left");

    // Adiciona classes para animação de entrada da terceira imagem
    thirdImage.classList.add("slide-from-right");
  }
}
if (pagina == "institucional") {
  document.addEventListener("DOMContentLoaded", function () {
    const itemContainers = document.querySelectorAll(".item-container");
    itemContainers.forEach((container, index) => {
      if (index % 2 === 0) {
        container.classList.add("column");
      } else {
        container.classList.add("column-reverse");
      }
    });
  });
}

if (pagina === "portfolio") {
  const paginationList = document.querySelector(".pagination");
  const imageElements = document.querySelectorAll(
    "#pagination-container .image-to"
  );
  const itemsPerPage = 6;
  const totalItems = imageElements.length;
  const totalPages = Math.ceil(totalItems / itemsPerPage);
  let currentPage = 1;
  function createPaginationButtons() {
    paginationList.innerHTML = ""; // Limpa os botões existentes

    const maxVisiblePages = 5; // Número máximo de páginas visíveis

    if (totalPages <= maxVisiblePages) {
      // Caso o número total de páginas seja menor ou igual ao número máximo de páginas visíveis, exibe todas as páginas
      for (let i = 1; i <= totalPages; i++) {
        createPageLink(i);
      }
    } else {
      // Caso contrário, ajusta o intervalo de páginas visíveis com base na página atual
      let startPage, endPage;

      if (currentPage <= Math.floor(maxVisiblePages / 2)) {
        // Exibe as primeiras maxVisiblePages páginas
        startPage = 1;
        endPage = maxVisiblePages;
      } else if (currentPage >= totalPages - Math.floor(maxVisiblePages / 2)) {
        // Exibe as últimas maxVisiblePages páginas
        startPage = totalPages - maxVisiblePages + 1;
        endPage = totalPages;
      } else {
        // Exibe as páginas ao redor da página atual
        startPage = currentPage - Math.floor(maxVisiblePages / 2);
        endPage = currentPage + Math.floor(maxVisiblePages / 2);
      }

      // Adiciona os botões de página
      for (let i = startPage; i <= endPage; i++) {
        createPageLink(i);
      }

      // Adiciona os botões de ellipsis no início e no final
      if (startPage > 1) {
        createEllipsis(true); // true indica que os ellipsis estão no início
      }
      if (endPage < totalPages) {
        createEllipsis(false); // false indica que os ellipsis estão no final
      }
    }
  }

  function createPageLink(pageNumber) {
    const li = document.createElement("li");
    li.classList.add("page-item");

    const link = document.createElement("a");
    link.classList.add("page-link");
    link.href = "#";
    link.innerText = pageNumber;
    link.setAttribute("data-page", pageNumber); // Adiciona o atributo data-page

    li.appendChild(link);
    paginationList.appendChild(li);

    link.addEventListener("click", (event) => {
      event.preventDefault();
      const pageNumber = parseInt(link.getAttribute("data-page")); // Obtém o número da página do atributo data-page
      showItemsByPage(pageNumber);
      updateActiveLink(pageNumber);
    });
  }

  function createEllipsis(isStart) {
    const li = document.createElement("li");
    li.classList.add("page-item");

    const span = document.createElement("span");
    span.classList.add("page-link");
    span.innerText = "...";

    if (isStart) {
      paginationList.prepend(li); // Insere os ellipsis no início da lista
    } else {
      paginationList.appendChild(li); // Insere os ellipsis no final da lista
    }

    li.appendChild(span);
  }

  function showItemsByPage(pageNumber) {
    const startIndex = (pageNumber - 1) * itemsPerPage;
    const endIndex = Math.min(startIndex + itemsPerPage, totalItems);

    imageElements.forEach((image, index) => {
      if (index >= startIndex && index < endIndex) {
        image.style.display = "flex";
      } else {
        image.style.display = "none";
      }
    });
  }
  function updateActiveLink(pageNumber) {
    const links = paginationList.querySelectorAll("a.page-link");
    links.forEach((link) => {
      link.parentElement.classList.remove("active");
      link.style.backgroundColor = "";
      link.style.color = ""; // Limpa a cor do texto

      if (link.getAttribute("data-page") !== pageNumber.toString()) {
        link.style.color = "#000"; // Define a cor do texto como preto para links não ativos
      }
    });

    const activeLink = paginationList.querySelector(
      `a.page-link[data-page="${pageNumber}"]`
    );
    if (activeLink) {
      activeLink.parentElement.classList.add("active");
      activeLink.style.backgroundColor = "#A11416";
      activeLink.style.color = "#fff";
    }
  }

  createPaginationButtons();
  showItemsByPage(1);
  updateActiveLink(1);

  document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('#pagination-container');
    const elements = container.children;
  
    for (let i = 0; i < elements.length; i++) {
      const element = elements[i];
      const className = i % 2 === 0 ? 'left' : 'right';
      element.classList.add(className);
    }
  });
  
}

// Transição no navbar
