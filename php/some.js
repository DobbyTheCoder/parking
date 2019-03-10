function displayStatus(p, id) {
  if (p <1) {
    document.getElementById(id).style.backgroundColor = "red";
    document.getElementById(id).style.cursor = "not-allowed";
  } else if (p<2) {
    document.getElementById(id).style.backgroundColor = "green";
    document.getElementById(id).style.cursor = "pointer";
  }
}

function display(){
  var i;

  /*for(i = 1; i<=12;i++){
    var r = "p"+i;
    displayStatus(r, r);
  }*/

  displayStatus(p1, "p1");
  displayStatus(p2, "p2");
  displayStatus(p3, "p3");
  displayStatus(p4, "p4");
  displayStatus(p5, "p5");
  displayStatus(p6, "p6");
  displayStatus(p7, "p7");
  displayStatus(p8, "p8");
  displayStatus(p9, "p9");
  displayStatus(p10, "p10");
  displayStatus(p11, "p11");
  displayStatus(p12, "p12");
}

function clicked(p, id){
  if(p>0){
    document.getElementById(id).style.backgroundColor = "red";
    document.getElementById(id).style.cursor = "not-allowed";
    alert("Spot booked");
    window.location = "update.php?id="+id;
  }
}

function findCount(){
  var count = 0;

  if(p1==1)
    count++;
  if(p2==1)
    count++;
  if(p3==1)
    count++;
  if(p4==1)
    count++;
  if(p5==1)
    count++;
  if(p6==1)
    count++;
  if(p7==1)
    count++;
  if(p7==1)
    count++;
  if(p9==1)
    count++;
  if(p10==1)
    count++;
  if(p12==1)
    count++;

    var rem = 11-count;

    document.getElementById('c1').innerHTML = count;
    document.getElementById('c2').innerHTML = rem;
    document.getElementById('c3').innerHTML = 1;
}
