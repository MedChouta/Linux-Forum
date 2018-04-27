var button = document.querySelector('.signUp')
var input = document.querySelectorAll('.input')
var form = document.querySelector('form')
var modal = document.querySelector('.background-modal')
var modalContainer = document.querySelector('.modal-container')
var speed = 10;

var Modal = {
	display: "none",
	toggle: function(status){
					switch(status){
						case "hide":
							this.display = "none"
							break;
						case "show":
							this.display = "block"
							break;
					}
					modal.style.display = this.display
				},

}

function fadeIn(){
	Modal.toggle("show")
	pos = parseFloat(getComputedStyle(modalContainer).top)
	modalContainer.style.top = pos + speed + "px"
	modalContainer.style.opacity = "1"
	animationId = requestAnimationFrame(fadeIn)
	
	if(pos === 150){
		cancelAnimationFrame(animationId)
	}
}

function fadeOut(){
	pos = parseFloat(getComputedStyle(modalContainer).top)
	modalContainer.style.top = pos - speed + "px"
	modalContainer.style.opacity = "0"
	animationId = requestAnimationFrame(fadeOut)
	
	if(pos === 0){
		cancelAnimationFrame(animationId)
		Modal.toggle("hide")
	}
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

//Events
button.addEventListener('click', function(){
	requestAnimationFrame(fadeIn)
})

modal.addEventListener('click', function(e){
	requestAnimationFrame(fadeOut)
})

modalContainer.addEventListener('click', function(e){
	Modal.toggle("show")
	e.stopPropagation()
})

//END-Events