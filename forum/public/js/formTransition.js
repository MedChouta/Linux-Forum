var button = document.querySelector('.signUp')
var input = document.querySelectorAll('input')
var form = document.querySelector('form')
var modalContainer = document.querySelector('.modal-container')

function changeWidth(width){
	form.style.width = width + '%'
}

function modalMove(){
}

button.addEventListener('click', function(){
	var modalContainerState = modalContainer.style.display
	if(modalContainerState === "block")
	{
		modalContainer.style.display = "none"
		modalContainer.style.opacity = "0"
	}
	else{
		modalContainer.style.display = "block"
		modalContainer.style.opacity = "1"
	}
})

for(var i = 0; i < input.length; i++)
{
	input[i].addEventListener('focus', function(){
		changeWidth(100)
	})

	input[i].addEventListener('blur', function(){
		changeWidth(80)
	})
}