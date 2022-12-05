const wormhole = document.getElementById('wormhole');

wormhole.addEventListener("click", (event) => {
    let value = Math.random();
    console.log(value);
    if (value > .5){
        if (value > .75){
            location.href = "lenticular-galaxy.php";
        }else{
            location.href = "throne-zytkow.php";
        }
        return;
    }

    value = Math.random();

    if (value > .9){
        location.href = 'sun.php';
    }else if(value > .8){
        location.href = 'mercury.php';
    }else if(value > .7){
        location.href = 'venus.php';
    }else if(value >.6){
        location.href = 'earth.php';
    }else if(value > .5){
        location.href = 'mars.php';
    }else if(value >.4){
        location.href = 'jupiter.php';
    }else if(value >.3){
        location.href = 'saturn.php';
    }else if(value >.2){
        location.href = 'uranus.php';
    }else if(value >.1){
        location.href = 'neptune.php';
    }else{
        location.href = 'moon.php';
    }
    return;
});

