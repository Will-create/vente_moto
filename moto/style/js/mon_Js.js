
        var plier = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < plier.length; i++) {
          plier[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            var child=this.getElementsByTagName("i");
            if (panel.style.maxHeight) {
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
            }
          });
        }





  function afficherPhoto(self,idPhoto){
    
    var photo=document.getElementById(idPhoto);
    photo.style.width='150px';
     photo.style.height='150px';


    var fReader= new FileReader();
    fReader.readAsDataURL(self.files[0]);
    fReader.onloadend =function(e){
      
    if(e.target.result!=photo.src){
          photo.src=e.target.result;
          console.log(e.target.result);
    }else{
      alert("veillez choisir une photo");
    }
    }
  }
  