var input = document.querySelectorAll('.input')
var button = document.getElementsByClassName('signUp')
var form = document.querySelectorAll('form')
var modal = document.querySelectorAll('.background-modal')
var modalContainer = document.querySelectorAll('.modal-container')
var display = "none"

function toggle(status, element){
	switch(status){
		case "hide":
			display = "none"
			break;
		case "show":
			display = "block"
			break;
	}
	element.style.display = display
}

function fadeIn(element, element2){
	toggle("show", element)
	element2.classList.add("fadeIn");
	element2.style.opacity = "1";
	console.log(element.style.opacity)

	element2.addEventListener('click', function(e){
		e.stopPropagation()
	})
}

function fadeOut(element,element2){
	element2.classList.add("fadeOut");
	element2.classList.remove("fadeIn");
	element2.style.opacity = "0";
	console.log(element2.style.opacity)
	setTimeout(function(){toggle('hide', element)}, 800)
}

/***************************/
function changeWidth(width){
	form.style.width = width + '%'
}

for(var i = 0; i < input.length; i++)
{
	input[i].addEventListener('focus', function(){
		changeWidth(95)
	})

	input[i].addEventListener('blur', function(){
		changeWidth(90)
	})
}

/***************************/
function changeWidth(width){
	form.style.width = width + '%'
}

for(var i = 0; i < input.length; i++)
{
	input[i].addEventListener('focus', function(){
		changeWidth(95)
	})

	input[i].addEventListener('blur', function(){
		changeWidth(90)
	})
}