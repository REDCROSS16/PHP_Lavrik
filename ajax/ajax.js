
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

