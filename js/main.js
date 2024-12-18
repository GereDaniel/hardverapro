for (let i = 1; i <= 5; i++) {
    document.querySelector('.parent-div').innerHTML+= ` <div class="shadow-lg flex flex-wrap w-full lg:w-4/5 mx-auto">
    
    <div class="bg-cover bg-bottom border w-full md:w-1/3 h-64 md:h-auto relative" style="background-image:url('./images/400x400.png')">
      <div class="absolute text-xl">
        <i class="fa fa-heart text-white hover:text-red-light ml-4 mt-4 cursor-pointer"></i>
      </div>
    </div>

    <div class="bg-white w-full md:w-2/3 border-t-8	">
    
      <div class="h-full mx-auto px-6 md:px-0 md:-ml-6 relative">
      
        <div class="bg-white lg:h-full p-6 -mt-6 md:mt-0 relative mb-4 md:mb-0 flex flex-wrap md:flex-wrap items-center">
 
          <div class="w-full lg:w-1/5 lg:border-right lg:border-solid text-center md:text-left">
            <h3>Példa termék</h3>
         
            <hr class="w-1/4 md:ml-0 mt-4  border lg:hidden">
          </div>
       
          <div class="w-full lg:w-3/5 lg:px-3">
            <p class="text-md mt-4 lg:mt-0 text-justify md:text-left text-sm">
           Leírás
            </p>
          </div>
          
          <div class="w-full lg:w-1/5 mt-6 lg:mt-0 lg:px-4 text-center md:text-left">
            <button class="bg-white hover:bg-grey-darker hover:text-black border border-solid border-grey w-1/3 lg:w-full py-2"><a href="pages/hirdetes.html" target="_blank">Érdekel</a> </button>
          </div>
        </div>
      </div>
   
    </div>

  </div>`
}
const galleryData = [
  { src: "images/image1.jpg", title: "kep1", alt: "kep1"},
  { src: "images/image2.jpeg", title: "kep2", alt: "kep2"},
  { src: "images/image3.jpg", title: "kep3", alt: "kep3" }
];

document.addEventListener("DOMContentLoaded", () => {
  const galleryContainer = document.getElementById("gallery");
  const searchBar = document.getElementById("searchBar");

  function renderGallery(data) {
      galleryContainer.innerHTML = "";
      data.forEach(item => {
          const img = document.createElement("img");
          img.src = item.src;
          img.alt = item.title;
  
          galleryContainer.appendChild(img);
      });
  }

  searchBar.addEventListener("input", () => {
      const filteredData = galleryData.filter(item => item.title.toLowerCase().includes(searchBar.value.toLowerCase()));
      renderGallery(filteredData);
  });

  renderGallery(galleryData);
});