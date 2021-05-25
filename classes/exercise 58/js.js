


let button = document.getElementById('addText');
//отменяем загрузку
button.addEventListener('click', function (e){
    e.preventDefault();
    let data = document.querySelector('#replace').value;

    let formData = new FormData();
    formData.append('replace', data);
    let promise = fetch('five/classes/exercise_58/work.php', {
        method: 'POST',
        body: formData
    });
    promise.then(

        response => {
            return response.text();
        }
    ).then(
        text => {
            // alert('work!');
            // result.innerHTML = text;
        }
    )

});


// var url = '/your/url?x=hello';
//
// fetch(url)
//     .then(function (response) {
//         return response.text();
//     })
//     .then(function (body) {
//         console.log(body);
//     });
//
// If you want to $_POST['x'], you need to send the data as FormData:
//
//     var url = '/your/url';
// var formData = new FormData();
// formData.append('x', 'hello');
//
// fetch(url, { method: 'POST', body: formData })
//     .then(function (response) {
//         return response.text();
//     })
//     .then(function (body) {
//         console.log(body);
//     });
