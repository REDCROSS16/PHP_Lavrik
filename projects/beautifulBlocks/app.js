const container = document.querySelector('.container');

for (let i = 0; i <= 200; i++) {
    const blocks = document.createElement('div');
    blocks.classList.add('block');
    let color = `rgb(${randomGenerator()},${randomGenerator()},${randomGenerator()})`;
    // console.log(color);
    blocks.style.backgroundColor = color;
    container.appendChild(blocks);
}


function generate() {
    anime ({
        targets: '.block',
        translateX: function () {
            return anime.random(-700, 700);
        },
        translateY: function () {
            return anime.random(-700, 700);
        },
        scale: function () {
            return anime.random(1,2);
        }
    })
}


let button = document.querySelector('button');
button.addEventListener('click', generate);

button.style.opacity = '0.5';

// button.style.display('none');

setInterval(generate, 10000);

function randomGenerator() {
    return Math.floor(Math.random() * 255);
}


