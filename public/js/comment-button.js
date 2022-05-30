class Comment {
    constructor(target){
        this.place = target.parentElement.parentElement.parentElement.lastElementChild;
    }
    toggle(){
        this.place.classList.toggle("hide");
    }
}

document.addEventListener("click", ({target}) => {
    if(target.classList.contains("comment")){
        comment = new Comment(target);
        comment.toggle();
    }
})

