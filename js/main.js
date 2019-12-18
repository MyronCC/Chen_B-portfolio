var controlButton = document.querySelector(".video-button");
    var videoBox = document.querySelector(".video");

    function openDialog() {
        videoBox.style.transform = "scale(1)";
    }
    function closeDialog() {
        videoBox.style.transform = "scale(0)";
     
          
    }


(() => {
   
    console.log("fired");
    
    





    const seeMoreButtons = document.querySelectorAll('.see-more'),
        popOver = document.querySelector(".popover");

    
  

    function fetchData() {
        let targetElement = this,
            url = `./includes/connect.php?id=${this.dataset.target}`;

        fetch(url)
        .then(res => res.json())
        .then(data => {
            console.log(data);
            buildPopover(data, targetElement);
        })
        .catch((err) => console.log(err));
    }

    function buildPopover(projectdata, el) {
        popOver.querySelector(".name").textContent = projectdata.name;
        popOver.querySelector(".type").textContent = projectdata.type;
        popOver.querySelector(".description").textContent = projectdata.description;

       popOver.classList.add('show-popover');

       el.appendChild(popOver);
    }

    seeMoreButtons.forEach(el => el.addEventListener("click", fetchData));
})();