var regexp = new RegExp('^\-?[0-9]+[.,]?[0-9]*$')
var form = document.querySelector('.validatedform')
form.addEventListener('submit', function(event){
    removeValidation()
    var fields = new Array()
    var chfields = new Array()

    chfields = document.querySelector('input[type=checkbox]:checked')
    if(chfields == null){
      event.preventDefault()
      var error = document.createElement("div")
      chfields = document.querySelector('input[type=checkbox]')
      error.className="error"
      error.style.color = "red"
      error.innerHTML = "Invalid Value"
      chfields.parentElement.parentElement.insertBefore(error, chfields.parentElement)
    }


    fields[0] = document.querySelector('[name="y"]')
    fields[1] = document.querySelector('select[name="r"]')

    for(let i =0; i<fields.length; i++){
      regexp.lastIndex=0
      console.log(fields[i] == null)
      if(fields[i] == null){
        var error = document.createElement("div")
        error.className="error"
        error.style.color = "red"
        error.innerHTML = "Invalid Value"
        fields[i].parentElement.parentElement.insertBefore(error, fields[i].parentElement)

      }
      //console.lo
      if(!regexp.test(fields[i].value)){
        event.preventDefault()
        var error = document.createElement("div")
			  error.className="error"
        error.style.color = "red"
			  error.innerHTML = "Invalid Value"
			  fields[i].parentElement.parentElement.insertBefore(error, fields[i].parentElement)
      }
    }
    if((fields[0].value < -5) || (fields[0].value > 3)){
      event.preventDefault()
      var error = document.createElement("div")
      error.className="error"
      error.style.color = "red"
      error.innerHTML = "Invalid Value"
      fields[0].parentElement.parentElement.insertBefore(error, fields[0].parentElement)


    }
  })

  var removeValidation = function () {
    var errors = form.querySelectorAll('.error')

    for (let i = 0; i < errors.length; i++) {
      errors[i].remove()
    }
  }
