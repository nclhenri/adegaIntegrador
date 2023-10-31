
  $('.produtosCategorias').slick({
    dots: true,
    autoplay: true,
    infinite: false,
    speed: 2000,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: false,
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          dots: true,
          arrows: false,
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          dots: true,
          arrows: false,
          slidesToShow: 1,
          slidesToScroll: 3
        }
      }
    ]
  });

//   wow
new WOW().init();

// queryselector seleciona QUALQUER elemento. (seja ele, class, target, id ou outros)
document.querySelector(".abrirMenu").onclick = function () {
  document.documentElement.classList.add("menuMobile");
}
document.querySelector(".fecharMenu").onclick = function () {
  document.documentElement.classList.remove("menuMobile");
}

$(function(){
  Swal.fire({
    title: '<img src="./img/logo.png">',
    text: 'Você é maior de 18 anos?',
    showClass: {popup: 'animate__animated animate__fadeInDown'},
    hideClass: {popup: 'animate__animated animate__fadeOutUp'},
    confirmButtonText: 'Sim',
    cancelButtonText: 'Não',
    showCancelButton: true,
    showCloseButton: false,
    
    })
    
    .then((result) => {
    if(result.isDismissed){
      window.location.href = "";


    }
  })

});

