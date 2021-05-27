let form = document.getElementById('form');

form.addEventListener('submit', function(event) {

    let num1 = this.querySelector('[name="num1"]').value;
    let num2 = this.querySelector('[name="num2"]').value;
    let num3 = this.querySelector('[name="num3"]').value;

    let promise = fetch('les3/sum.php?num1=' + num1 + '&num2=' + num2 + '&num3=' + num3);

    promise.then(
        response => {
            return response.text();
    }).then (
        text => {
           document.querySelector('#result').innerHTML = '<b>' + text + '</b>';
        }
    )

    event.preventDefault(); // отменим отправку формы
});