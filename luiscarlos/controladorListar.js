

let cardImg = document.querySelectorAll("img");
let dataArr=[];
let container = document.querySelector('#content');
let myHeader =  new Headers({"Content-Type": "json/application"});
let config = {
    method: 'GET',
    headers: myHeader,
};

let configArr = {

    method: 'POST',
    headers: myHeader,
}


cardImg.forEach(element =>{
 
 
    element.addEventListener('click', async (e)=>{
        
        e.stopPropagation(); 
        e.preventDefault();
        let id= parseInt(e.target.id);
        console.log(id)
       

      
        

            await fetch (`../controllers/unidad_tematica/get_unidad_tematica.php?id=${id}`,config)
            .then(respuesta => respuesta.json())
            .then(data =>{
              
                dataArr= data;
                configArr.body = JSON.stringify(data);
                 fetch('../view/unidad_tematica2/listUnidadTematica.php',configArr)
                 .then(respuesta=> respuesta.text())
                 .then(data=>{
                    
                   
                    container.innerHTML =data;
                    inspeccionarCapitulos();

                 })
            })
        
        .catch(error => {
            console.error(error)
        });
     
   

    
    });
})

let inspeccionarCapitulos = ()=>{

    let arrCapitulo;
    document.querySelectorAll('.imgTematica').forEach(element =>{
        element.addEventListener('click',async (e)=>{
            e.stopPropagation(); 
            e.preventDefault();
            let id = e.target.id;
           
            await fetch(`../controllers/capitulo/get_capitulo.php?id=${id}`,config)
            .then(respuesta=>respuesta.json())
            .then(data=>{
                   
                    arrCapitulo = data;
                    configArr.body =JSON.stringify(arrCapitulo);
                    fetch('../view/capitulo/listCapitulos.php',configArr)
                    .then(respuesta =>respuesta.text())
                    .then(data=>{
                            container.innerHTML =data;
                            inspeccionarTemas();


                    })



                }).catch(error=>{
                    console.error(error)
                });








       })
    })
}




let inspeccionarTemas = ()=>{

    let arrCapitulo;
    document.querySelectorAll('.imgCapitulo').forEach(element =>{
        element.addEventListener('click',async (e)=>{
            e.stopPropagation(); 
            e.preventDefault();
            let id = e.target.id;
           
            await fetch(`../controllers/tema/get_tema.php?id=${id}`,config)
            .then(respuesta=>respuesta.json())
            .then(data=>{
                 
                    arrCapitulo = data;
                    configArr.body =JSON.stringify(arrCapitulo);
                    fetch('../view/tema/listTema.php',configArr)
                    .then(respuesta =>respuesta.text())
                    .then(data=>{
                            container.innerHTML =data;
                            inspeccionarModulos();


                    })



                }).catch(error=>{
                    console.error(error)
                });








       })
    })
}




let inspeccionarModulos = ()=>{

    let arrCapitulo;
    document.querySelectorAll('.imgTema').forEach(element =>{
        element.addEventListener('click',async (e)=>{
            e.stopPropagation(); 
            e.preventDefault();
            let id = e.target.id;
           
            await fetch(`../controllers/modulo/get_modulos.php?id=${id}`,config)
            .then(respuesta=>respuesta.json())
            .then(data=>{
                 
                    arrCapitulo = data;
                    configArr.body =JSON.stringify(arrCapitulo);
                    fetch('../view/modulo/listModulo.php',configArr)
                    .then(respuesta =>respuesta.text())
                    .then(data=>{
                            container.innerHTML =data;
                          


                    })



                }).catch(error=>{
                    console.error(error)
                });








       })
    })
}

