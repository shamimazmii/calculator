document.getElementById('calculatorForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const num1 = parseFloat(document.getElementById('num1').value);
    const operation = document.getElementById('operation').value;
    const num2 = parseFloat(document.getElementById('num2').value);

    let result;

    if (operation === 'add') {
        result = num1 + num2;
    } else if (operation === 'subtract') {
        result = num1 - num2;
    } else if (operation === 'multiply') {
        result = num1 * num2;
    } else if (operation === 'divide') {
        result = num1 / num2;
    }

    document.getElementById('result').innerHTML = `<p>Result: ${result}</p>`;
});
