function checkEmail() {
    var n = document.getElementById('N').value;
    var p = document.getElementById('P').value;
    var e = document.getElementById('E').value;
    var ff = document.getElementById('f').value;
    var ll = document.getElementById('l').value;
    var bd = document.getElementById('B').value;
    var ht = document.getElementById('h').value;

    var email = document.getElementById('E');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(ff==''){
      alert('First name is required');
      return false;
    }else if(ll==''){
      alert('Last name is required');
      return false;
    }else if(bd==''){
      alert('Birthdate is required');
      return false;
    }else if(ht==''){
      alert('Hometown is required');
      return false;
    }else if(n==''){
      alert('Username is required');
      return false;
    }else if(e==''){
      alert('Email is required');
      return false;
    }else if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }else if(p==''){
      alert('Password is required');
      return false;
 }else
  return true;
}


/* log */

function checkEmail2() {
    var p = document.getElementById('P').value;
    var e = document.getElementById('E').value;

    var email = document.getElementById('E');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   if(e==''){
      alert('Email is required');
      return false;
    }else if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }else if(p==''){
      alert('Password is required');
      return false;
 }else
  return true;
}
