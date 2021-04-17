var coll = document.getElementsByClassName("collaps");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      console.log("atas"+content.style.maxHeight);
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = (content.scrollHeight-24) + "px";
      console.log(content.style.maxHeight);
    } 
  });
}