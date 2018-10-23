function browsefile(){
    document.getElementById('file-to-upload').click();
};

function updateimagesection(filename, file){
    var contentarray = filename.split('\\');
    // window.alert(document.getElementById('file-to-upload').files[0]);
    document.getElementById('file-upload-label').value = contentarray[contentarray.length-1];
    document.getElementById('user-image').src = URL.createObjectURL(file[0]);
}

function gotoprofile(){
    location.href = "profile.php";
}