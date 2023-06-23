/* ACA IMPORTO CADA api referente a mis vistas */
import '../view/stack_tecnologico/regStack.js';
import '../view/unidad_tematica2/regUnidadTematica.js';
import '../view/capitulo/regCapitulo.js';
import '../view/tema/regTema.js';
import '../view/modulo/regModulo.js';
import '../view/topico/regTopico.js';



/* Mostrar divs dinamicamente */
console.log(document.querySelector("#contenidoCapitulo"));
document.querySelectorAll('.menuMaterias').forEach(link =>{

    link.addEventListener('click',(e)=>{
     
        let data = JSON.parse(e.target.dataset.ocultarmostrar);
        let  divMostrar = document.querySelector(data[0]);
        divMostrar.style.display ="block";
        console.log(divMostrar);
        data[1].forEach(div =>{           
            let divOcultar = document.querySelector(div);
            divOcultar.style.display ="none";
        })
        e.preventDefault();
    })
})


