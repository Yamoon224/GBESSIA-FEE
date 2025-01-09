$(document).ready(function() {

    var hostname = $('meta[name="base-url"]').prop('content');
    var token = $('meta[name="csrf-token"]').prop('content');
    var auth = $('meta[name="auth"]').prop('content');
    var httpRequestRoute = () => {
        // localStorage.setItem('Link', hostname+'/welcome');
        var Link = localStorage.getItem('Link') != undefined && auth !== '' ? localStorage.getItem('Link') : hostname+'/welcome';

        $('#page-content').load(Link, {'_token':token, '_method':'GET'});
    }

    httpRequestRoute();
});
