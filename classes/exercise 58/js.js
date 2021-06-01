

let form = document.querySelector('#addTextForm');

form.addEventListener('submit', function (e) {
    e.preventDefault();

    let replace = document.querySelector('#replace').value;

    let promise = fetch('text.php?replace=' + replace);

    promise.then(
        response =>  {
            console.log(response);
           return response.text();
    }).then (
        text => {
            console.log(text);
    })
})