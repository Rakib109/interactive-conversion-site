function sndp(){
  var input=document.getElementById("inch").value;
  var result=input/12;
  alert(result +"foot");
  document.getElementById("result").innerHTML = result;
    document.getElementById("result").style.fontSize = "36px";
  
  }
  function sndp1(){
  var input=document.getElementById("foot").value;
  var result=input*12;
  alert(result +"inch");
  document.getElementById("result").innerHTML = result;
    document.getElementById("result").style.fontSize = "36px";

  }
  var list1 = [];
    var list2 = [];
    

    var n = 1;
    var x = 0;

    function AddRow(){

      var AddRown = document.getElementById('show');
      var NewRow = AddRown.insertRow(n);

      list1[x] = document.getElementById("inch").value;
      list2[x] = document.getElementById("foot").value;
      

      var cel1 = NewRow.insertCell(0);
      var cel2 = NewRow.insertCell(1);
      

      cel1.innerHTML = list1[x];
      cel2.innerHTML = list2[x];
      
      n++;
      x++;
    }
    function getResult(pForm){
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
      var res = JSON.parse(this.responseText);
      document.getElementById("result").innerHTML = res[0].foot;

    }
    xhttp.open("GET" , pForm.action + "?foot=" + pForm.foot.value, true);
    xhttp.send();
}
function getResult(pForm){
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
      var res = JSON.parse(this.responseText);
      document.getElementById("result").innerHTML = res[0].foot;

    }
    xhttp.open("GET" , pForm.action + "?foot=" + pForm.foot.value, true);
    xhttp.send();
}