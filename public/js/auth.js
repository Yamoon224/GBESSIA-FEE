$('form').on('submit', function(e) {
    e.preventDefault();
    
    let data = new FormData(this),
        action = $(this).attr('action');
    
    axios.post(action, data)
        .then(function (response) {
            if(response.data.auth) {
                window.location.href = response.data.redirectUrl;
                // localStorage.setItem('navlink', $('meta[name="base-url"]').prop('content')+'/dash')
                location.reload()
            }            
        })
        .catch(function (e) {
            $('#report-error')
                .text(e.response.data.message)
                    .addClass( e.response.data.class === undefined ? 'text-danger' : e.response.data.class );
        });
})