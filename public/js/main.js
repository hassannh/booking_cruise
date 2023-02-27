var cont = 0;
function loopSlider() {
    var xx = setInterval(function () {
        switch (cont) {
            case 0: {
                $("#slider-1").fadeOut(400);
                $("#slider-2").delay(400).fadeIn(400);
                $("#sButton1").removeClass("bg-purple-800");
                $("#sButton2").addClass("bg-purple-800");
                cont = 1;

                break;
            }
            case 1:
                {

                    $("#slider-2").fadeOut(400);
                    $("#slider-1").delay(400).fadeIn(400);
                    $("#sButton2").removeClass("bg-purple-800");
                    $("#sButton1").addClass("bg-purple-800");

                    cont = 0;

                    break;
                }


        }
    }, 8000);

}

function reinitLoop(time) {
    clearInterval(xx);
    setTimeout(loopSlider(), time);
}



function sliderButton1() {

    $("#slider-2").fadeOut(400);
    $("#slider-1").delay(400).fadeIn(400);
    $("#sButton2").removeClass("bg-purple-800");
    $("#sButton1").addClass("bg-purple-800");
    reinitLoop(4000);
    cont = 0

}

function sliderButton2() {
    $("#slider-1").fadeOut(400);
    $("#slider-2").delay(400).fadeIn(400);
    $("#sButton1").removeClass("bg-purple-800");
    $("#sButton2").addClass("bg-purple-800");
    reinitLoop(4000);
    cont = 1

}

$(window).ready(function () {
    $("#slider-2").hide();
    $("#sButton1").addClass("bg-purple-800");


    loopSlider();







});

// Days before today are disabled
const date_reservation = document.getElementById("date_reservation");
const today = new Date();

const year = today.getFullYear();
const month = (today.getMonth() + 1).toString().padStart(2, "0");
const day = today.getDate().toString().padStart(2, "0");
const dateForToday = `${year}-${month}-${day}`;

if (date_reservation != null) {
    date_reservation.addEventListener("input", function () {
        const selectedDate = new Date(this.value);
        if (selectedDate < today) {
            alert("Days before today are disabled");
            this.value = today;
        }
    });
}