document.getElementById('creation_form').addEventListener('submit', function(){
    event.preventDefault();


    if(window.confirm('Sei sicuro di voler creare un nuovo animale?')){
        this.submit();
    }
})

