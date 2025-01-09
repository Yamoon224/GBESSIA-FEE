$('form').on('submit', function(e) {
    e.preventDefault();
    
    let data = new FormData(this),
        action = $(this).attr('action');
    
    $(":submit", this).on("click", () => { return false })
    axios.post(action, data)
        .then(function (response) {
            response = response.data
            Swal.fire({title: response.title, text: response.message, icon: "success"});
            setTimeout(() => location.reload(), 5000);
        })
        .catch((e) => $('#report-error').text(e.response.data.message));
})