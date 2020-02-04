function showMobileNavigation() {
    document.getElementById('mobileNav').style.width = '100%';
    document.getElementById('closeButton').style.display = 'block';
}

function hideMobileNavigation() {
    document.getElementById('mobileNav').style.width = '0%';
    document.getElementById('closeButton').style.display = 'none';
}

function setPreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById('imagePreview').src = e.target.result;
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function setPreviewCover(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById('coverPreview').src = e.target.result;
        };

        reader.readAsDataURL(input.files[0]);
    }
}


function tagsToString(tagsObject) {
    var tagsString = "";

    var keys = Object.values(tagsObject)
    for (var i = 0; i < keys.length; i++) {
        tagsString += keys[i] + " ";
    }

    return tagsString;
}

function enableDisabledButtons() {
    document.getElementById("name").disabled = false;
    document.getElementById("tags").disabled = false;
}
