let frmModulo  = document.querySelector('#formModulo');

let myHeaderModulo = new Headers({"Content-Type": "application/json"});

frmModulo.addEventListener('submit', async(e)=>{

    let data = Object.fromEntries(new FormData(frmModulo));
    console.log(data);
    let config = {
        method: "POST",
        headers: myHeaderModulo,
        body: JSON.stringify(data)
    };

    await fetch('../../controllers/modulo/insert_modulo.php',config);

})