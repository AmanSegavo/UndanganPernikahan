$(document).ready(function() {
    setTimeout(function() {
        $("#loading").fadeOut("slow", function() {
            $("#invitation").addClass("show-card");
        });
    }, 2000);

    // Create falling flowers
    function createFlower() {
        const flower = document.createElement('div');
        flower.classList.add('flower');
        flower.style.left = Math.random() * 100 + 'vw';
        flower.style.animationDuration = Math.random() * 3 + 2 + 's';
        document.body.appendChild(flower);
        setTimeout(() => {
            flower.remove();
        }, 5000);
    }

    setInterval(createFlower, 300);
});