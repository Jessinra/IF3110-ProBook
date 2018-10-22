
// example request
// getAjax('http://foo.bar/?p1=1&p2=Hello+World', function(data){ console.log(data); });
function getAjax(url, function_upon_success) {
    var xhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    xhttp.open('GET', url);
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState > 3 && xhttp.status === 200)
            function_upon_success(xhttp.responseText);
    };

    xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhttp.send();
    return xhttp;
}

// example request with data object
// postAjax('http://foo.bar/', { p1: 1, p2: 'Hello World' }, display_result);
function postAjax(url, data, function_upon_success) {
    var payload = "payload=" + JSON.stringify(data);

    var xhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
    xhttp.open('POST', url);
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState > 3 && xhttp.status === 200) {
            function_upon_success(xhttp.responseText);
        }
    };

    xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send(payload);
    return xhttp;
}