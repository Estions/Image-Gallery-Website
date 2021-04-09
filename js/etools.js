

var target1 = document.getElementById("col1"); //Target 1
var target2 = document.getElementById("col2"); //Target 2

var i_number = 0; //Current image index, just for the splitting between columns

var s_index = 0; //Current index to get - start
var e_index = 6; //Current index to get - start
var index_q = 6; //Index offset

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
      parts.forEach(element =>
      {
        if(i_number % 2 != 0) target1.innerHTML += element;
        else target2.innerHTML += element;
        i_number++;
      }
      );
    };
    xmlhttp.open("GET","php/databaseFetch.php?q1="+s_index+"&q2="+e_index,true);
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

