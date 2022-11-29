if (preview.getAttribute('src') != null) {
    document.querySelector('.clearButton').style.display = "inline";
    document.querySelector('.imageButton').style.display = "none"
}
//Image preview
thumbnail.onchange = evt => {
    const [file] = thumbnail.files
    if (file) {
        preview.src = URL.createObjectURL(file);
        preview.style.display = "block";
        document.getElementsByName('thumbnailOld')[0].value = URL.createObjectURL(file);

        document.querySelector('.clearButton').style.display = "inline";
        document.querySelector('.imageButton').style.display = "none"
    }
}

document.querySelector(".clearButton").onclick = function () {

    thumbnail.value = null;
    document.getElementsByName('thumbnailOld')[0].value = '';
    preview.src = '';
    preview.style.display = "none";
    document.querySelector('.clearButton').style.display = "none";
    document.querySelector('.imageButton').style.display = "inline"
};
