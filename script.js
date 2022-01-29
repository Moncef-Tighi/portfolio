const sections = document.querySelectorAll("section");


const observerCallback = function(entries, observer) {
    const [entry]= entries;
    if (!entry.isIntersecting) {
        entry.target.classList.add("section--hide");
        return
    };

    entry.target.classList.remove('section--hide')
}

const parametres = {
    root : null, //On set à null parce qu'on veut observer le contact avec le viewport
    threshold : 0.2,
    rootMargin: "50px"
}

const observer= new IntersectionObserver(observerCallback, parametres);

sections.forEach( section=> {
    observer.observe(section);
})