;function sendForm(currForm) { 
  var form = currForm;
  if (hasEmptyFields(form)){
    var status=document.getElementById('sendStatus');
    status.classList.add('error');
    status.innerHTML='<i class="fa fa-exclamation-circle" aria-hidden="true"></i>Required fields are empty';
    status.classList.remove('unvisible');
    status.classList.add('visible');
    return false;
  }


    var formData = new FormData(form);  
    var xhr = new XMLHttpRequest();
            
    xhr.open("POST", "wp-content/themes/lorem-test/sendmail.php"); 

    xhr.onreadystatechange = function() {
        var status=document.getElementById('sendStatus');
        if (xhr.readyState == 4) {
          if(xhr.status == 200) {
            data = xhr.responseText;
            if(data == "true") {
              if(status.classList.contains('error'))  status.classList.remove('error');
              status.classList.add('ok');
              status.innerHTML = '<i class="fa fa-check-circle" aria-hidden="true"></i></i>Message was sent';
            } 
            else {
              if(status.classList.contains('ok')) status.classList.remove('ok');
              status.classList.add('error');
              status.innerHTML = '<i class="fa fa-exclamation-circle" aria-hidden="true"></i>Server error. Please try again later';
            }
          }
          if(xhr.status == 404){
            console.log(status.classList);
            if(status.classList.contains('ok')) status.classList.remove('ok');
            status.classList.add('error');
            status.innerHTML = '<i class="fa fa-exclamation-circle" aria-hidden="true"></i>Network error. Please check your internet connection';
          }
        }
    };

    xhr.send(formData);
}

function hasEmptyFields(form){
  var flag=false;
  if (isEmpty(form.name)) {
    flag=true;
  }
  if (isEmpty(form.phone)) {
    flag=true;
  }
  if (isEmpty(form.message)) {
    flag=true;
  }
  return flag;
}
function hiddenStatus(){

}

function isEmpty(elem){
  if(elem.value=='') {
    elem.classList.add('empty-field');
    return true;
  } else {
    elem.classList.remove('empty-field');
    return false;
  }
}