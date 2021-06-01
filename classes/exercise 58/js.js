

let form = document.querySelector('#addTextForm');

form.addEventListener('submit', function (e) {
    e.preventDefault();

    let replace = document.querySelector('#replace').value;

    console.log(replace);

    let promise = fetch('text.php?replace=' + replace);

    promise.then(
        response =>  {
            console.log(response);
           return response.text();
    }).then (
        text => {
            console.log(text);
            alert(text);
    })

    // promise.then(
    //     response => {
    //         return response.text();
    //     }).then (
    //     text => {
    //         document.querySelector('#result').innerHTML = '<b>' + text + '</b>';
    //     }
    // )



})