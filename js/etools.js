var cq1 = 0;
const loadCount = 6;
var cq2 = 6;

async function loadImages(q1, q2) {
    var xhttp;
    var resultString = new Array();
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function()
    {
        console.log(this.readyState + " " + this.status)
      if (this.readyState == 4 && this.status == 200)
      {
        resultString = (this.responseText).split("|");
        for(var i = q1 ; i <= q2 ; i ++)
        {
            //console.log(resultString[i]);
            if(i%2 != 0) document.getElementById("col 1").innerHTML += resultString[i];
            else document.getElementById("col 2").innerHTML += resultString[i];
        }
      }
    };
    xhttp.open("GET", "dbFetch.php?q1="+q1+"&q2="+q2, true);
    xhttp.send();
    cq1+=loadCount;
    cq2+=loadCount;
  }

  loadImages(cq1,cq2);

  window.addEventListener('scroll', function() {
    var {scrollTop, scrollHeight, clientHeight} = document.documentElement;
    //console.log(scrollHeight-scrollTop + " " + clientHeight);
    if(Math.floor(scrollHeight-scrollTop) <= clientHeight)
    {
        loadImages(cq1,cq2);
    }
  })