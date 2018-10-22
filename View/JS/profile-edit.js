function browsefile(){
    document.getElementById('file-to-upload').click();

};

function updatefilelabel(content){
    var contentarray = content.split('\\');
    document.getElementById('file-upload-label').value = contentarray[contentarray.length-1];
}

function gotoprofile(){
    location.href = "profile.php";
}