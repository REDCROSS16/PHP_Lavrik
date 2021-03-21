
let button = document.getElementById('button');
let result = document.getElementById('result');

button.addEventListener('click', function () {
    let promise = fetch('ajax.php');

	promise.then(
		response => {
			return response.text();
		}
	).then (
		text => {
			result.innerHTML = text;
		}
	);
});


let ex1 = document.querySelector('#ex1');
let btex1 = document.querySelector('#btex1');

btex1.addEventListener('click', ()=> {
	let promise = fetch('les/1.php');

	promise.then(
		response => {
			return response.text();
		}
	).then (
		text => {
			ex1.innerHTML = text;
		}
	)
});

let btex2_1 = document.querySelector('#btex2_1');
let btex2_2 = document.querySelector('#btex2_2');
let btex2_3 = document.querySelector('#btex2_3');
let btex2_4 = document.querySelector('#btex2_4');
let btex2_5 = document.querySelector('#btex2_5');

let ex2 = document.querySelector('#ex2');

btex2_1.addEventListener('click', ()=> {
	let promise = fetch('les/1.php');

	promise.then(
		response => {
			return response.text();
		}
	).then (
		text => {
			ex2.innerHTML = text;
		}
	)
});
btex2_2.addEventListener('click', ()=> {
	let promise = fetch('les/2.php');

	promise.then(
		response => {
			return response.text();
		}
	).then (
		text => {
			ex2.innerHTML = text;
		}
	)
});
btex2_3.addEventListener('click', ()=> {
	let promise = fetch('les/3.php');

	promise.then(
		response => {
			return response.text();
		}
	).then (
		text => {
			ex2.innerHTML = text;
		}
	)
});
btex2_4.addEventListener('click', ()=> {
	let promise = fetch('les/4.php');

	promise.then(
		response => {
			return response.text();
		}
	).then (
		text => {
			ex2.innerHTML = text;
		}
	)
});
btex2_5.addEventListener('click', ()=> {
	let promise = fetch('les/5.php');

	promise.then(
		response => {
			return response.text();
		}
	).then (
		text => {
			ex2.innerHTML = text;
		}
	)
});

let count = 1;
let btex3 = document.querySelector('#btex3');
let ex3 = document.querySelector('#ex3');


btex3.addEventListener('click', ()=> {
	
	let promise = fetch(`les/${count}.php`);
	count++;
	if (count > 5) {
		count = 1;
	}
	promise.then(
		response => {
			return response.text();
		}
	).then (
		text => {
			ex3.innerHTML = text;
		}
	);
});

let btex4 = document.querySelector('#btex4');
let ex4 = document.querySelector('#ex4');

btex4.addEventListener('click', ()=> {

	let promise = fetch('les/timeNow.php');
	promise.then(
		response => {
			return response.text();
		}
	).then (
		text => {
			ex4.innerHTML = text;
		}
	)	
})

/**
 * Дана кнопка, список ul и страница /ajax/, которая возвращает текущее время. Сделайте так, чтобы по нажатию на кнопку с сервера загружалось содержимое страницы /ajax/ и добавлялось в новый тег li тега ul. 
 */

let btex5 = document.querySelector('#btex5');
let ul5 = document.querySelector('#ul-5');

btex5.addEventListener('click', ()=> {
	let promise = fetch('les/timeNow.php');
	let li = document.createElement('li');

	promise.then(
		response => {
			return response.text();
		}
	).then(
		text => {
			li.innerHTML = text;
		}
	)

	ul5.appendChild(li);

})

/**
 * Модифицируйте предыдущую задачу так, чтобы вместо кнопки работал таймер, 
 * который каждые 2 секунды будет опрашивать страницу /ajax/ и добавлять 
 * результат в новый тег li тега ul. 
 */

let ul6 = document.querySelector('#ul-6');

setInterval(()=> {
	let promise = fetch('les/timeNow.php');
	let li = document.createElement('li');
	promise.then(
		response => {
			return response.text();
		}
	).then (
		text => {
			li.innerHTML = text;
		}
	)

	// ul6.appendChild(li);
}, 1000);