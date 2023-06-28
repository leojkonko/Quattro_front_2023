// Scripts especificos do layout
/**
 * Exemplo:
 * Se precisar adicionar alguma classe ou manipular algum elemento
 *
 *
 */

/* 
Exemplo de um intersection observer
const exampleObserver = new IntersectionObserver(
	(entries, observer) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				observer.unobserve(entry.target);
                // Executar código aqui
			}
		});
	},
	{
		rootMargin: "0px 0px 0px 0px",
	}
);
exampleObserver.observe(document.querySelector(".teste"));
*/

// Smooth scroll para seção
(function () {
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            if (this.getAttribute("href") !== "#") {
                let target = document.querySelector(this.getAttribute("href"));
                if (target) {
                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "center",
                        inline: "center",
                    });
                }
            }
        });
    });
})();

// Lazy loading das imagens que possuem data-src
(function () {
    var lazyLoadImages = document.querySelectorAll("img[data-src]");
    if (lazyLoadImages) {
        const lazyLoadObserver = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let currentImage = entry.target;
                        currentImage.src = currentImage.dataset.src; // src = data-src
                        // Remove loader caso ele seja o proximo irmao daquela imagem
                        entry.target.addEventListener("load", function () {
                            let loader = this.nextElementSibling;
                            if (loader && loader.classList.contains("loader"))
                                loader.remove();
                        });
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: "50% 50% 50% 50%",
            }
        );

        lazyLoadImages.forEach((el) => {
            lazyLoadObserver.observe(el);
        });
    }
})();

// Botão whatsapp fixo
$(document).ready(function () {
    $(".btn-whatsapp").click(function () {
        $(this).addClass("active");
        $(".whatsapp-form").toggleClass("show");
    });

    $(".whatsapp-form-close").click(function () {
        $(".whatsapp-form").removeClass("show");
        $(".btn-whatsapp").removeClass("active");
    });

    $(".timeline-image").css({
        "margin-top": -$(".timeline-title").height(),
    });
});

$(document).on("ready resize load", function () {
    $(".timeline-image").css({
        "margin-top": -$(".timeline-title").height(),
    });
});

//botão comprar
/*var contador = 0;
var botaoComprar = document.getElementById("comprar");
var divCompra = document.getElementById("compra");

botaoComprar.addEventListener("click", function () {
    console.log("opaaa")
    contador++;
    divCompra.innerText = "Número de cliques: " + contador;
    divCompra.style.display = "block";
});

document.addEventListener("click", function (event) {
    if (event.target !== botaoComprar) {
        divCompra.style.display = "none";
    }
});*/
//comparar
var botaoComprar = document.querySelectorAll("#comprar");
var divCompra = document.querySelectorAll("#compra");
var divFundoImg = document.getElementById("fundo_img");
var divBlack = document.getElementById("fundo_black");

for (var i = 0; i < botaoComprar.length; i++) {
    botaoComprar[i].addEventListener("click", function (event) {
        event.stopPropagation();

        var compraIndex = Array.prototype.indexOf.call(botaoComprar, this);
        var compraElement = divCompra[compraIndex];

        if (compraElement.classList.contains("show")) {
            compraElement.classList.remove("show");
            compraElement.innerHTML = "";
            divFundoImg.classList.remove("fundo-img");
            divBlack.classList.remove("fundo-black");
        } else {
            compraElement.classList.add("show");
            compraElement.innerHTML = "1";
            divFundoImg.classList.add("fundo-img");
            divBlack.classList.add("fundo-black");
        }
    });

    document.addEventListener("click", function (event) {
        for (var j = 0; j < divCompra.length; j++) {
            if (!divCompra[j].contains(event.target) && !botaoComprar[j].contains(event.target)) {
                divCompra[j].classList.remove("show");
                divCompra[j].innerHTML = "";
                divFundoImg.classList.remove("fundo-img");
                divBlack.classList.remove("fundo-black");
            }
        }
    });
}

//comparar

//efeito-img
const imagemEffectList = document.querySelectorAll('.imagem-effect');

imagemEffectList.forEach(function (element) {
    element.addEventListener('mouseover', function () {
        addImgEffect(this);
    });

    element.addEventListener('mouseout', function () {
        removeImgEffect(this);
    });
});

function addImgEffect(element) {
    element.classList.add('img-effect');
    element.classList.remove('img-effect-disabled');
    element.nextElementSibling.classList.add('img-effect');
    //console.log('Mouse sobre o elemento');
}

function removeImgEffect(element) {
    element.classList.remove('img-effect');
    element.classList.add('img-effect-disabled');
    element.nextElementSibling.classList.remove('img-effect');
    //console.log('Mouse fora do elemento');
}

//efeito-img
//header
window.addEventListener('DOMContentLoaded', function () {
    var header = document.getElementById('infos');
    var hederBody = document.getElementById('headerBody');
    // Função para calcular a distância entre o elemento e o topo da página
    function calcularDistanciaAoTopo() {
        var rect = header.getBoundingClientRect();
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        console.log(rect);
        console.log(scrollTop);
        return rect.top + scrollTop;
    }

    var headerTop = calcularDistanciaAoTopo();

    window.addEventListener('scroll', function () {
        var currentScroll = window.pageYOffset;

        console.log(currentScroll);
        console.log(headerTop + 'dist topo');

        if (currentScroll > headerTop) {
            hederBody.classList.add('position-fixed');
            hederBody.classList.add('bg-header');
            hederBody.classList.remove('position-absolute');
        } else {
            hederBody.classList.remove('bg-header');
            hederBody.classList.remove('position-fixed');
            hederBody.classList.add('position-absolute');
        }
    });
});
//header

AOS.init();
$(document).ready(function () {
    $('.js-example-basic-multiple').select2();
});
