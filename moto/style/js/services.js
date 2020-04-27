var details=document.getElementsByClassName("body-niveau1");
console.log(details[3]);
cacherTout();
details[0].style.display="flex";


function cacherTout(){
  for(var i=0;i<details.length;i++){
    details[i].style.display="none";
    
  }
}

function afficher(numb){
  cacherTout();
  details[numb-1].style.display="flex";

  
}

function focus (self){
	self.value="";

}

function blur (self, text){

	self.value=text;

}