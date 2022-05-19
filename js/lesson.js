const lesson1 = document.getElementById("lesson1.1");
lesson1.addEventListener("click", function() {
    document.getElementById("source").src = "./videos/lesson1-1.mp4";
    document.getElementById("title").textContent = 'Arithmetic reasoning';
    document.getElementById("description").textContent = 'Doing arithmetic reasoning is something that you can do by paying close attention to the units you are talking about. Do arithmetic reasoning with help from a math professional in this free video clip.'
    document.getElementById("download").href = "download.php?path=files/lecture1.pdf";
    document.getElementById('video').load();
});

const lesson2 = document.getElementById("lesson1.2");
lesson2.addEventListener("click", function() {
    document.getElementById("source").setAttribute('src', './videos/lesson1-2.mp4');
    document.getElementById("title").textContent = 'Identifying fraction parts';
    document.getElementById("description").textContent = 'Identifying fraction parts | Decimals | Pre-algebra'
    document.getElementById("download").href = "download.php?path=files/lecture2.pdf";
    document.getElementById('video').load();
});

const lesson3 = document.getElementById("lesson1.3");
lesson3.addEventListener("click", function() {
    document.getElementById("source").src = "./videos/lesson1-3.mp4";
    document.getElementById("title").textContent = 'Percentage of a whole number';
    document.getElementById("description").textContent = 'We hope you are beginning to see that there is more than one way to skin a cat. In other words, there are several different ways to solve problems involving percentages, decimals, and fractions. Watch as find the percentage of a whole number.'
    document.getElementById("download").href = "download.php?path=files/lecture3.pdf";
    document.getElementById('video').load();
});