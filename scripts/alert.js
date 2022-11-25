$('.button_prod').click(function() {
    //alert("Funckja niedostępna, za utrudnienia przepraszamy.");
    $.confirm({
        useBootstrap: false,
        theme: 'modern',
        icon: 'icon-attention alert-iko',
        type: 'red',
        title: 'Uwaga!',
        content: 'Ta funkcja jest niedostępna. Prace nad przywróceniem funkcjonalności trwają.',
        buttons: {
            kk: {
                btnClass: 'btn-red',
                text: 'rozumiem',
            },
        
        },
        closeAnimation: 'top',
    });
    
});