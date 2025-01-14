const weather = document.querySelector('#weather');


fetch("../db/weatherdata.json")
.then(res => res.json())
.then(data => {
    console.log(data)
    console.log(data[0].Vuosi)
})