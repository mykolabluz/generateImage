var form = document.querySelector('.formWithValidation')
var validateBtn = form.querySelector('.validateBtn')
var width = form.querySelector('.width')
var height = form.querySelector('.height')
var radius = form.querySelector('.radius')
var fields = form.querySelectorAll('.field')
var integer = form.querySelectorAll('.integer')

form.addEventListener('submit', function (event) {
//  event.preventDefault()

    var errors = form.querySelectorAll('.error')

    for (var i = 0; i < errors.length; i++) {
        errors[i].remove()
    }

    for (var i = 0; i < integer.length; i++) {
        if (!integer[i].value.match(/^[0-9]+/)) {
            var error = document.createElement('div')
            error.className = 'error'
            error.style.color = 'red'
            error.innerHTML = 'Значение должно быть числом'
            form[i].parentElement.insertBefore(error, integer[i])
        }
    }

    for (var i = 0; i < fields.length; i++) {
        if (!fields[i].value) {
            var error = document.createElement('div')
            error.className = 'error'
            error.style.color = 'red'
            error.innerHTML = 'Поле обязательное к заполнению'
            form[i].parentElement.insertBefore(error, fields[i])
        }
    }

    var x = width.value;
    var y = height.value;
    if (x >= y) {
        var z = y;
    } else {
        var z = x;
    }
    if (!(z / 2 >= radius.value)) {
        var error = document.createElement('div')
        error.className = 'error'
        error.style.color = 'red'
        error.innerHTML = 'Радиус не должен быть больше половины ширины или высоты'
        radius.parentElement.insertBefore(error, radius)
    }
    if (error) {
        event.preventDefault()
    }
})