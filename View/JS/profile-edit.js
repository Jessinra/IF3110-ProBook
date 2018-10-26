function browsefile(){
    document.getElementById('file-to-upload').click();
};

function updateimagesection(img){
    if(img.value.length == 0)
        return;
    var contentarray = img.value.split('\\');
    var imgcontainer = document.getElementById('user-image');
    var imgname = document.getElementById('file-upload-label');
    if(validateImageName(contentarray[contentarray.length-1])){
        imgname.value = contentarray[contentarray.length-1];
        imgcontainer.src = URL.createObjectURL(img.files[0]);
    }
    else{
        window.alert(contentarray[contentarray.length-1] + ' Not Image');
    }
}

function gotoprofile(){
    location.href = "profile.php";
}

function resizeEvent(){
    document.getElementById('image-container').style.height = document.getElementById('image-container').clientWidth.toString() + "px";
}

function validate(){
    var phone_number = document.getElementById('phone_number');
    var name = document.getElementById('name');
    var address = document.getElementById('address');
    var isAllTrue = true;
    if(name.value.length == 0 || name.value.length > 20){
        name.style.borderColor = "red";
        isAllTrue = false;
    }
    else
        name.style.borderColor = "initial";
    if(!(/^[0-9]{9,12}$/.test(phone_number.value))){
        phone_number.style.borderColor = "red";
        isAllTrue = false;
    }
    else
        phone_number.style.borderColor = "initial";
    if(address.length==0){
        address.style.borderColor = "red";
        isAllTrue = false;
    }
    else
        address.style.borderColor = "#a9a9a9";
    return isAllTrue;
}

function validateImageName(filename){
    var IMAGE_EXT = [".jpg", ".png", ".gif", ".bmp", ".jpeg"];
    for(var i=0;i<IMAGE_EXT.length;i++){
        if(filename.substr(filename.length - IMAGE_EXT[i].length, IMAGE_EXT[i].length).toLowerCase() == IMAGE_EXT[i])
            return true;        
    }
    return false;
}