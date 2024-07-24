const deleteForms = document.querySelectorAll('form.delete_form');

deleteForms.forEach((deleteFormElement) =>{
    deleteFormElement.addEventListener('submit', function( event ){
        event.preventDefault();

        if(window.confirm('Sei sicuro di voler procedere?') === true){
            this.submit();
        }
    });


})





