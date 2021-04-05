var images;
const limit = 10;
var loading = false;

var j = 0;

//2 columns
const JavaLinkedContainer1 = document.querySelector(".JLC1");
const JavaLinkedContainer2 = document.querySelector(".JLC2");


async function loadBatch()
{
    if(loading) return;
    console.log("loading batch...");
    loading = true;
    images = new Array();

    /* This worked, but the image size was way too huge for a reasonable websitex
    var res = await fetch('https://picsum.photos/v2/list?page='+page+'&limit='+limit)
    var json = await res.json();
    */

    for(let i = 0 ; i < limit ; i++){
        var cPush = true;
        j++;
        var url = "https://picsum.photos/id/"+j+"/1920/1080";
        var res = await fetch(url);
        if(res.ok) images.push(res.url);
        else continue;
    }
    displayData();
    loading = false;
}


//Load Images
async function displayData()
{
    for(let i = 0 ; i < limit ; i ++)
    {
        //console.log(images[i]);//debug
        
        //save image to temp container, just in case
        var tempURL = images[i];
        var tempaObj = document.createElement("a");
        tempaObj.href = tempURL;
        var splitPath = tempaObj.pathname.split('/');
        var url = "https://picsum.photos/id/"+splitPath[2]+"/info"
        res = await fetch(url);

        if(res.ok) json = await res.json();
        else continue;

        //main container for sinle image data
        const c_Container = document.createElement("div");
        c_Container.className = "container-fluid my-3";
        //image object
        const c_Image = document.createElement("img");
        c_Image.src = tempURL;
        c_Image.className = "img-fluid p-0";
        c_Image.setAttribute("loading","lazy");
        //image name - (in case of picsum - id)
        const c_Name = document.createElement("h3");
        c_Name.innerText = json.id;
        /*Since Name's in lorem picsum are ID based -
        THIS IS THE BEST THING I COULD COME UP WITH ,
        besides doing an enourmous number of fetch requests
        to get the name from original website (+ i can't sort them like this
        i need to access a database using
            SELECT url, author, name
            FROM imagedatabase
            ORDERBY(name)
            LIMIT currentIndex, newIndex;
        )
        */
        c_Name.className = "text-center fs-1 m-0 py-1 bg-main-body";
        //image author
        const c_Author = document.createElement("h4");
        c_Author.innerText = json.author;
        c_Author.className = "text-center fs-5 m-0 py-1 fst-italic bg-main-body";
        if(i%2 == 0)
        {
            JavaLinkedContainer1.appendChild(c_Container);
        }
        else
        {
            JavaLinkedContainer2.appendChild(c_Container);
        }
        //add all children to image container
        c_Container.appendChild(c_Image);
        c_Container.appendChild(c_Name);
        c_Container.appendChild(c_Author);
    }
}


//Initial load
loadBatch();
//Once scroll check if windowScrollY + windowInnerHeight >= Document
window.onscroll = 
(
    function()
    {
        const{scrollTop, scrollHeigh, clientHeight} = document.documentElement;
        if((clientHeight + scrollTop) >= scrollHeigh)
        {
            loadBatch()
        }
    }
);