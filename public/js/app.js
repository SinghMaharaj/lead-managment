const app = {};

function getCookie(cname) {
  let name = cname + "=";
  let ca = document.cookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

var url = getCookie('_car_rent_user_');
if(!url.length){
  var token = '';
}else{
  var encodedUrl = JSON.parse(decodeURIComponent(url));
  var token = encodedUrl.token;
//console.log('token ',token);
}

//console.log('token=========== ',token);


app.get = async (url,res = function(){})=>{
    const response = await fetch(url, {
    method: 'GET', // *GET, POST, PUT, DELETE, etc.
    mode: 'cors', // no-cors, *cors, same-origin
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin', // include, *same-origin, omit
    headers: {
      'Content-Type': 'application/json',
      'Authorization': 'bearer '+token 
    },
    redirect: 'follow', // manual, *follow, error
    referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
});

return response.json();
}

app.post = async (url,data,res = function(){})=>{
    const response = await fetch(url, {
    method: 'POST', // *GET, POST, PUT, DELETE, etc.
    mode: 'cors', // no-cors, *cors, same-origin
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin', // include, *same-origin, omit
    headers: {
      'Content-Type': 'application/json',
       'Authorization': 'bearer '+token 
    },
    redirect: 'follow', // manual, *follow, error
    referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
    body: JSON.stringify(data)
});

	return response.json();
}


app.postWithImg = async (url,data,res = function(){})=>{
  const response = await fetch(url, {
  method: 'POST', 
  mode: 'cors',
  cache: 'no-cache', 
  credentials: 'same-origin', 
  redirect: 'follow', 
  referrerPolicy: 'no-referrer', 
  headers: {
    'Authorization': 'bearer '+token 
  },
  body: data
});

return response.json();
}


app.put = async (url,data,res = function(){})=>{
  const response = await fetch(url, {
  method: 'PUT', 
  mode: 'cors',
  cache: 'no-cache', 
  headers: {
    'Content-Type': 'application/json',
    'Authorization': 'bearer '+token 
  },
  credentials: 'same-origin', 
  redirect: 'follow', 
  referrerPolicy: 'no-referrer', 
  body: data
});

return response.json();
}


app.delete = async (url,data,res = function(){})=>{
  const response = await fetch(url, {
  method: 'DELETE', 
  mode: 'cors',
  cache: 'no-cache', 
  headers: {
    'Content-Type': 'application/json',
    'Authorization': 'bearer '+token 
  },
  credentials: 'same-origin', 
  redirect: 'follow', 
  referrerPolicy: 'no-referrer', 
  body: data
});

return response.json();
}



app.toast = (msg, className ='info')=>{
  const options = {
    text: msg + ' ',
    duration: 3000,
    //destination: "https://github.com/apvarun/toastify-js",
    newWindow: false,
    className,
    close: true,
    gravity: "bottom", // `top` or `bottom`
    position: "center", // `left`, `center` or `right`
    stopOnFocus: true, // Prevents dismissing of toast on hover
    onClick: function(){} // Callback after click
  };

  if(className == 'success')
    options.style= {background: "#00b09b"};
  if(className == 'info')
    options.style= {background: "#0090b0"};
  if(className == 'warning')
    options.style= {background: "#ff9800"};
  if(className == 'danger')
    options.style= {background: "#f44336"};
  else
    options.style= {background: "#009688"};

  Toastify(options).showToast();
}

app.alert = (msg, className = 'success', id = '#customAlert')=>{
  let alertMessage = document.querySelector(id);
 
    if(alertMessage)
      alertMessage.innerHTML = `<div class="alert alert-${className}" role="alert">
       ${msg}
      </div>`;
}


