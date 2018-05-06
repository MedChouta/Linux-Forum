var input = document.querySelectorAll('.input')
var button = document.getElementsByClassName('signUp')
var form = document.querySelectorAll('form')

class Modal{

	constructor(index){
		this.index = index
		this.display = "none"
		self = this
		
		this.modal = document.querySelectorAll('.background-modal')
		this.modalContainer = document.querySelectorAll('.modal-container')
		this.opacity = 0
		
		requestAnimationFrame(self.fadeIn.bind(self))

		this.modal[this.index].addEventListener('click', function(e){
			requestAnimationFrame(self.fadeOut.bind(self))
		})

		this.modalContainer[this.index].addEventListener('click', function(e){
			self.toggle("show")
			e.stopPropagation()
		})
	}

	toggle(status){
		switch(status){
			case "hide":
				this.display = "none"
				break;
			case "show":
					this.display = "block"
					break;
		}
		this.modal[this.index].style.display = this.display
	}

	fadeIn(){
		this.toggle("show")
		this.modalContainer[this.index].classList.add("fadeIn");
		this.modalContainer[this.index].style.opacity = "1";
		console.log(this.modalContainer[this.index].style.opacity)
	}

	fadeOut(){
		this.modalContainer[this.index].style.opacity -= 0.1
		this.opacity = parseFloat(getComputedStyle(this.modalContainer[this.index]).opacity)
		let animationId = requestAnimationFrame(this.fadeOut.bind(this))
		if(this.opacity === 0){
			cancelAnimationFrame(animationId)
			console.log(this.opacity)
			this.toggle("hide")
		}
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


button[0].addEventListener('click', function(){
	new Modal(0)
})

button[1].addEventListener('click', function(){
	new Modal(1)
})