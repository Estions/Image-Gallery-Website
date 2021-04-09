

var target1 = document.getElementById("col1");
var target2 = document.getElementById("col2");

var i_number = 0;

var s_index = 0;
var e_index = 6;
var index_q = 6;

function getData()
{
    var parts = new Array();
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function()
    {
      if (this.readyState == 4 && this.status == 200)
      {
        parts = (this.response).split("|");
      }
      parts.forEach(element => {
        if(i_number % 2 != 0) target1.innerHTML += element;
        else target2.innerHTML += element;
        i_number++;
      });
    };
    xmlhttp.open("GET","databaseFetch.php?q1="+s_index+"&q2="+e_index,true);
    xmlhttp.send();
    s_index += index_q;
    e_index += index_q;
}

function manualLoadMore() {
  getData();
}

var observer = new IntersectionObserver(function(entries) {
	// isIntersecting is true when element and viewport are overlapping
	// isIntersecting is false when element and viewport don't overlap
	if(entries[0].isIntersecting === true)  getData();
}, { threshold: [0] });

observer.observe(document.getElementById("endC"));

//Startup functions S
//Startup functions e
