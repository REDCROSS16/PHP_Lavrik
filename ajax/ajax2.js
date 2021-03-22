let result = document.querySelector('#result');
let button = document.querySelector('#button');

    button.addEventListener('click', ()=> {
        let num = +document.querySelector('#num').value;
        let promise = fetch(`les2/les2-1.php?num=${num}`);
        promise.then(
            response => {
                return response.text();
            }
        ).then(
            text => {
                result.innerHTML = text;
            }
        )
    });

/**
 *  На клиенте дана кнопка и абзац. Пусть сервер возвращает квадратный 
 * корень переданного GET параметром числа числа. 
 * По нажатию на кнопку передайте на сервер GET параметром 
 * какое-нибудь число. После ответа сервера выведите переданные данные в вашем абзаце. 
 */

let btn1 = document.querySelector('#btn1');
let res1 = document.querySelector('#res1');

btn1.addEventListener('click', ()=>{
    let num = +document.querySelector('#num1').value;
    let promise = fetch(`les2/sqrt.php?num=${num}`);
    

    promise.then(
        response=> {
            return response.text();
        }
    ).then(
        text => {
            res1.innerHTML = text;
        }
    )
})

// Пусть сервер ожидает три GET параметра с числами, а возвращает сумму этих чисел. Сделайте на клиенте 3 инпута для ввода чисел и кнопку. По нажатию на кнопку отправьте содержимое инпутов на сервер, а после ответа сервера результат выведите в какой-нибудь абзац. 

let btn2 = document.querySelector('#btn2');

let out2 = document.querySelector('#out2');

btn2.addEventListener('click', ()=> {
    

    let num1 = +document.querySelector('#num21').value;
    let num2 = +document.querySelector('#num22').value;
    let num3 = +document.querySelector('#num23').value;

    let promise = fetch(`les2/sum.php?num1=${num1}&num2=${num2}&num3=${num3}`);

    promise.then(
        response => {
            return response.text();
        }
    ).then (
        text => {
            out2.innerHTML = text;
        }
    )
})

let btn3 = document.querySelector('#btn3');
let out3 = document.querySelector('#out3');
let out4 = document.querySelector('#out4');
btn3.addEventListener('click', ()=> {
    let num = +document.querySelector('#num3').value;
    let promise = fetch(`les2/array.php?num=${num}`);
    let li = document.createElement('li');

    promise.then (
        response => {
            return response.text();
        }
    ).then (
        text => {
            out3.innerHTML = text;
            li.innerHTML = text;
            out4.append(li);
        }
    )
})