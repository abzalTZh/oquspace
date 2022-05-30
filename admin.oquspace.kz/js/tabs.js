function calendarToggle() {
    var x = document.getElementById("calendar-tab-container");
    if (x.style.display == "none") {
        x.style.display = "block";
    }

    document.getElementById("feedbacks-tab-container").style.display = "none";
    document.getElementById("staff-tab-container").style.display = "none";
    document.getElementById("reply-container").style.display = "none";
}

function feedbacksToggle() {
    var y = document.getElementById("feedbacks-tab-container");
    if (y.style.display == "none") {
        y.style.display = "block";
    }

    document.getElementById("calendar-tab-container").style.display = "none";
    document.getElementById("staff-tab-container").style.display = "none";
    document.getElementById("reply-container").style.display = "none";
}

function staffToggle() {
    var z = document.getElementById("staff-tab-container");
    if (z.style.display == "none") {
        z.style.display = "block";
    }

    document.getElementById("calendar-tab-container").style.display = "none";
    document.getElementById("feedbacks-tab-container").style.display = "none";
    document.getElementById("reply-container").style.display = "none";
}

function replyToggle() {
    var s = document.getElementById("reply-container");
    if (s.style.display == "none") {
        s.style.display = "block";
    }

    document.getElementById("calendar-tab-container").style.display = "none";
    document.getElementById("staff-tab-container").style.display = "none";
}