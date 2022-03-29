/*
 * 
 * @param {string} message
 * @param {string} title 
 * @param {array} _params three strings 
 * @returns {undefined}
 */
function question(message,title,_url,_params,_params_error)
{
    Swal.fire({
        title: title,
        text: message,
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirmar',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.value) {
            $.ajax({
                    url: _url,
                    success: function(data)
                    {
                        Swal.fire(
                            _params[0],
                            _params[1],
                            ""
                          ).then((result) => { location.reload();});
                 
                    },
                    error: function(data)
                    {
                        Swal.fire(
                            _params_error[0],
                            _params_error[1],
                            ""
                          );
                    }
                  }).done(function() {
                  });

          
        }
      })
}


function show_error(message,title){
    
    Swal.fire({
                animation: false,
                title: '<strong>'+title+'</strong>',
                type: 'error',
                html:'<b>'+message+'</b>',
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                confirmButtonText:
                  'Cerrar',
                confirmButtonAriaLabel: 'Cerrar',
                cancelButtonText:
                  'Cerrar',
                cancelButtonAriaLabel: 'Cancelar',
              });   
}

function show_notice(message,title){
    
    Swal.fire({
                animation: false,
                title: '<strong>'+title+'</strong>',
                type: 'info',
                html:'<b>'+message+'</b>',
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                confirmButtonText:
                  'Cerrar',
                confirmButtonAriaLabel: 'OK!',
                
              });
}
  
///with ajax
/*
Swal.fire({
  title: 'Submit your Github username',
  input: 'text',
  inputAttributes: {
    autocapitalize: 'off'
  },
  showCancelButton: true,
  confirmButtonText: 'Look up',
  showLoaderOnConfirm: true,
  preConfirm: (login) => {
    return fetch(`//api.github.com/users/${login}`)
      .then(response => {
        if (!response.ok) {
          throw new Error(response.statusText)
        }
        return response.json()
      })
      .catch(error => {
        Swal.showValidationMessage(
          `Request failed: ${error}`
        )
      })
  },
  allowOutsideClick: () => !Swal.isLoading()
}).then((result) => {
  if (result.value) {
    Swal.fire({
      title: `${result.value.login}'s avatar`,
      imageUrl: result.value.avatar_url
    })
  }
})*/