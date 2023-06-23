let frmTopico = document.querySelector('#formTopico');


let myHeaders = new Headers({"Content-Type": "application/json"});


frmTopico.addEventListener('submit', async(e)=>{

    let data = Object.fromEntries(new FormData(frmTopico));

    let config = {
        method: "POST",
        headers: myHeaders,
        body: JSON.stringify(data)
    };
    console.log(data);
    await fetch('../controllers/topico/insert_topico.php',config);



})