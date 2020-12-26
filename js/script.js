function buttonpress() {
	alert("первый алерт");
	alert("второй алерт");
}

function buttonentity() {
	const object1 = {
		a: "somestring",
		b: 42
	};

	for (const [key, value] of Object.entries(object1)) {
		alert(key)
	}
}

function buttonclick() {
	var val = document.getElementById('buttonres').value;
	
	var arr = [];

    for (var i=0, t=val; i<t; i++) {
    	arr.push(Math.round(Math.random() * t))
    }
    arr.sort((a, b) => b - a);
    alert(arr)
}


window.addEventListener('load', function OnWindowLoaded() {
    // набор кнопок
    var signs = [
        '1', '2', '3', '*', 
        '4', '5', '6', '-',
        '7', '8', '9', 
        '+', '0', 'c', '=', '/', '**', 
    ];
 
    // форма калькулятора
    var calc = document.getElementById('calc');
 
    // текстовое поле с математическим выражением
    var textArea = document.getElementById('inputVal');
 
    // Добавление кнопок к форме калькулятора
    signs.forEach(function (sign) {
        var signElement = document.createElement('div');
        signElement.className = 'btn';
        signElement.innerHTML = sign;
        calc.appendChild(signElement);
    });
 
    // проходит по всем кнопкам калькулятора
    // добавляет обработчик на клик
    document.querySelectorAll('#calc-wrap .btn').forEach(function (button) {
        // Добавляем действие, выполняемое при клике на любую кнопку
        button.addEventListener('click', onButtonClick);
    });
 
    // функция клика по кнопке калькулятора
    function onButtonClick(e) {
        // e - MouseEvent (содержит информацию о клике)
        if (e.target.innerHTML === 'c') {
            // Если нажата кнопка "с", то стирает все из текстового поля
            textArea.innerHTML = '0';
        } else if (e.target.innerHTML === '=') {
            // Если нажата кнопка "=", то, приведя выражение
            // в текстовом поле к javascript, вычислить значение
            textArea.innerHTML = eval(textArea.innerHTML);
        } else if (textArea.innerHTML === '0') {
            // Если textarea содержит только "0", то
            // стереть "0" и записать
            // значения кнопки в текстовое поле
            textArea.innerHTML = e.target.innerHTML;
        } else {
            // Добавление значения кнопки в текстовое поле
            textArea.innerHTML += e.target.innerHTML;
        }
    }
});