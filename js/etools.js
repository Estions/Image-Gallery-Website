const images = new Array();
var gI = 0;
var saving = true;

//fetch data from picsum API
fetch('https://picsum.photos/v2/list?page=2&limit=100')
    .then(res => res.json())
    .then(data => saveData(data));

//save fetched data to array
function saveData(parsedData)
{
    for(let i = 0 ; i < parsedData.length ; i ++)
    {
        images.push(parsedData[i]);
    }
    images.sort();
    saving = false;
    loadImages();
    
}

//2 columns
const target1 = document.querySelector(".jsLinkContainter1");
const target2 = document.querySelector(".jsLinkContainter2");

//Load Images
function loadImages(numImg = 10)
{
    //if saving no complete - stop
    if(saving == true) return;

    for(let i = 0 ; i < numImg ; i ++)
    {
        console.log(images[gI+i]);//debug
        console.log(gI);
        //save image to temp container, just in case
        var tempIMG = images[gI+i];
        //main container for sinle image data
        const cc_Container = document.createElement("div");
        cc_Container.className = "container-fluid my-3";
        //image object
        const cc_Image = document.createElement("img");
        cc_Image.src = tempIMG.download_url;
        cc_Image.className = "img-fluid p-0";
        //image name - (in case of picsum - id)
        const cc_Name = document.createElement("h3");
        cc_Name.innerText = tempIMG.id;
        cc_Name.className = "text-center fs-1 m-0 py-1 bg-main-body";
        //image author
        const cc_Author = document.createElement("h4");
        cc_Author.innerText = tempIMG.author;
        cc_Author.className = "text-center fs-4 m-0 py-1 fst-italic bg-main-body";

        //evenly distribute singular image containers
        if(i%2 == 0) {
            target1.appendChild(cc_Container);
        } else { 
            target2.appendChild(cc_Container);
        }

        //add all children to image container
        cc_Container.appendChild(cc_Image);
        cc_Container.appendChild(cc_Name);
        cc_Container.appendChild(cc_Author);
        //add 1 to global i
        gI++;
    }
}
//Once scroll check if windowScrollY + windowInnerHeight >= Document
window.addEventListener('scroll', () => 
{
    if(window.scrollY + window.innerHeight >= document.documentElement.scrollHeight)
    {
        loadImages();
    }
});