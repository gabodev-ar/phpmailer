const btn    = document.querySelector('.btn');
const loader = document.querySelector('.btn__loader');
const form   = document.querySelector('.form');

btn.addEventListener('click', ()=>{
    loader.classList.add('btn__loader--active');

    const data = new FormData(form);

    fetch("src/php/server.php", {
        method : "post",
        body   : data
    })
    .then(res => res.json())
    .then(echo => {

        console.log(echo);

        // if(echo == "success") {

        //     form.reset()

        //     loader.classList.remove('btn__loader--active');

        // } else if(echo == "failure"){

        //     loader.classList.remove('btn__loader--active');

        // };
    })
});

