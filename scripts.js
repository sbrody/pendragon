document.addEventListener("DOMContentLoaded", pendragonAnimate);


function pendragonAnimate() {
    console.log('ready');
    var textWrapper = document.querySelector('.entry-title');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({ loop: false })
        .add({
            targets: '.entry-title',
            opacity: [0, 1],
        })
        .add({
            targets: '.entry-title .letter',
            opacity: [0, 1],
            easing: "easeInOutQuad",
            duration: 1250,
            delay: (el, i) => 150 * (i + 1)
        });
}
