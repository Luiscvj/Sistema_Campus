
let myHeadersTema = new Headers({'Content-Type': 'application/json'});
let frmTopico =  document.querySelector("#formTema")

frmTopico.addEventListener('submit', async (e)=>{

    let data = Object.fromEntries(new FormData(frmTopico));
    let config = {
        method: "POST",
        headers: myHeadersTema,
        body: JSON.stringify(data)
    };
    console.log(data);
    await fetch('../../controllers/tema/insert_tema.php',config);

    e.preventDefault();


})