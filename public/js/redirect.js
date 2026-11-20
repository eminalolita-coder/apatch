function checkIP(file, redirectUrl) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'check_ip.php?file=' + encodeURIComponent(file), true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);

            if (response.allowed) {
                window.location.href = redirectUrl; // Utilisez l'URL de redirection fournie
            } else {
                console.log('IP non autorisée pour le fichier ' + file);
            }
        }
    };

    xhr.send();
}