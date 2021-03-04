

function fct(){
  var select = document.getElementById("a");
  var choice = select.selectedIndex ;
  var country =  select.options[choice].value;

  var _token = document.getElementsByName('_token')[0].value;

  var request = new XMLHttpRequest();

  request.open("POST", "/country",true);

  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  var data = 'country='+country+'&_token='+_token;

  var text = document.getElementById('contenu');
  request.onreadystatechange = function(result) {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        text.innerHTML = request.responseText;
    }

}
  request.send(data);

}
