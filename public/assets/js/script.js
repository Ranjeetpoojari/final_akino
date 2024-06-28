$(document).ready(function () {
    $('.fa-play-btn,.youtube-poster').on('click', function () {
        var card = $(this).closest('.youtube-card');
        $(this).addClass('d-none');
        card.find(".icon-button").addClass('d-none');
        card.find(".youtube-poster").addClass('d-none');
        card.find(".youtubevideo")[0].src += "&autoplay=1";
    });
    $('iframe').on('click',function(){
        $(".youtube-poster").removeClass('d-none');
    });
});
$('#volentercarousal').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    loop: true, // Enable infinite loop
    animateOut: 'fadeOut', // Add a fade-out effect between slides
    smartSpeed: 1000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
$('#volentercarousal2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay: true,
    autoplayTimeout: 2000,
    dots: false,
    autoplayHoverPause: true,
    loop: true, // Enable infinite loop
    animateOut: 'fadeOut', // Add a fade-out effect between slides
    smartSpeed: 1000,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
$('#campaigninactive').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay: true,
    autoplayTimeout: 2000,
    dots: false,
    autoplayHoverPause: true,
    loop: true, // Enable infinite loop
    animateOut: 'fadeOut', // Add a fade-out effect between slides
    smartSpeed: 1000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
        ,1200:{
            items:4
        }
    }
})
$('#blogslider').owlCarousel({
    loop:true,
    margin:50,
    nav:true,
    autoplay: true,
    autoWidth:true,
    // autoplayTimeout: 2000,
    dots: false,
    // autoplayHoverPause: true,
    loop: true, // Enable infinite loop
    // animateOut: 'fadeOut'/, // Add a fade-out effect between slides
    smartSpeed: 1000,
    center:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})
$('#volentercarousal3').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay: true,
    dots: false,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    loop: true, // Enable infinite loop
    animateOut: 'fadeOut', // Add a fade-out effect between slides
    smartSpeed: 1000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
$('#volentercarousal4').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay: true,
    dots: false,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    loop: true, // Enable infinite loop
    animateOut: 'fadeOut', // Add a fade-out effect between slides
    smartSpeed: 1000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
$(document).ready(function(){
    $("#volentercarousal2").owlCarousel();

    // Handle video click events
    $(".volentervideo video").click(function() {
        var videoSrc = $(this).attr("src");
        var videoPoster = $(this).attr("poster");

        // Set the selected video source and poster
        $("#selectedVideo").attr("src", videoSrc);
        $("#selectedVideo").attr("poster", videoPoster);

        // Reload the video to ensure it plays
        $("#selectedVideo")[0].load();
    });
    $("#selectedVideo").click(function() {
        var video = $("#selectedVideo")[0];

        if (video.paused) {
        $(this).play();
        }else {
            video.pause();
            $("#playPauseButton").removeClass('d-none'); 
        }
    });
    $("#playPauseButton").click(function() {
        var video = $("#selectedVideo")[0];

        // Toggle play/pause state
        if (video.paused) {
            video.play();
            $(this).html('<i class="fas fa-play"></i>');
            $(this).addClass('d-none');
        } else {
            video.pause();
            $(this).html('<i class="fas fa-play"></i>');
        }
    });
});
AOS.init();

// donation amount 
function validateForm() {
    const donationAmount = parseFloat(document.getElementById("#donationAmount").value.trim());
    if (isNaN(donationAmount) || donationAmount <= 0) {
        alert("Please enter a valid donation amount")
        return false; // Prevent the form from submitting
    } const scroll = document.getElementById('scrollTop');

    window.addEventListener('scroll', () => {
        // Get the scroll position
        const scrollPosition = window.scrollY || window.pageYOffset;

        if (scrollPosition > 800) {
            // When scrolled down enough, add the 'added-class' class to the box element
            scroll.classList.add('d-block');
        } else {
            // Otherwise, remove the 'added-class' class
            scroll.classList.remove('d-block');
        }
    });
    // Clear any previous error messages
    document.getElementById("#donateError").textContent = "";
    // If validation passes, the form will submit
    return true;
}
var selected_amount = ""; fullpaymentAmount = 0;
function setInputValue(value) {
    selected_amount = value;
    var donationAmountInput = document.getElementById("#donationAmount");
    if (donationAmountInput) {
        donationAmountInput.value = value;
    }
}
// navbar 
function showMenu() {
    document.getElementById('sidebar').classList.add('open');
    document.querySelector('.overlay-menu').style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function hideMenu() {
    document.getElementById('sidebar').classList.remove('open');
    document.querySelector('.overlay-menu').style.display = 'none';
    document.body.style.overflow = 'auto';
}
// navbar
var navLink = document.querySelectorAll('.menu-link')
navLink.forEach(function (loop) {
    loop.addEventListener('click', function () {
        navLink.forEach(function (system) {
            system.classList.remove('active-link')
        })
        this.classList.add('active-link')
    })
})
// increment conter 

document.addEventListener("DOMContentLoaded", () => {
    const counterContainers = document.querySelectorAll('.counter-container');

    function incrementCounter(counterElement, dataCeil) {
        let currentNum = parseInt(counterElement.innerText);

        if (currentNum < dataCeil) {
            currentNum++;
            counterElement.innerText = currentNum;
            setTimeout(() => incrementCounter(counterElement, dataCeil), 20);
        }
    }

    function handleCounter(container) {
        const counter = container.querySelector('.counter');
        const dataCeil = parseInt(container.getAttribute('data-ceil'));

        if (window.innerWidth < 900) {
            incrementCounter(counter, dataCeil);
        } else {
            container.addEventListener('mouseenter', () => {
                incrementCounter(counter, dataCeil);
            });
        }
    }

    counterContainers.forEach((container) => {
        handleCounter(container);
    });
});



$('#card-carousel').owlCarousel({
    loop: true,
    dots: false,

    autoWidth: true,
    nav: true,
    responsive: {
        0: {
            margin: 0,
            center: true,
            items: 2
        },
        600: {
            // margin: 20,
            center: true,
            items: 2,
        },
        1000: {
            margin: 20,
            items: 3
        }
    }
})
$('#card-carousel2').owlCarousel({
    // loop: true,
    dots: false,
    margin: 25,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})
// blog
$('#blog-carousel').owlCarousel({
    loop: true,
    dots: false,
    margin: 25,
    nav: true,

    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})
$('#owl-carousel2').owlCarousel({
    loop: true,
    margin: 0,
    center: true,
    nav: true,
    dots: false,
    items: 3,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1
        },
        768: {
            items: 2
        },
        1000: {
            items: 2
        }
    }
})
$('#owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    autoWidth: false,
    // center:true,
    nav: true,
    items: 3,
    responsive: {
        0: {
            autoWidth: false,
            items: 1,
        },
        600: {
            autoWidth: false,
            items: 1
        },
        1000: {
            autoWidth: true,
            items: 2
        }
    }
})
$('#owl-carousel5').owlCarousel({
    loop: true,
    margin: 10,
    autoWidth: false,
    // center:true,
    nav: true,
    items: 3,
    responsive: {
        0: {
            autoWidth: false,
            items: 1,
        },
        600: {
            autoWidth: false,
            items: 2
        },
        1000: {
            autoWidth: true,
            items: 3
        }
    }
})

$(document).ready(function () {
    $("#others-button").click(function () {
        $(".donate-search-div").removeClass("d-none");
    });
    $(".pamount").click(function () {
        $(".donate-search-div").addClass("d-none");
        $("#donationAmount").val("0");
    });
});
var selected_type;
$(document).ready(function () {
    $("#fullpayment").click(function () {
        selected_type = "fullPayment";
        selected_amount = fullpaymentAmount
        $("#fullpayment").css({
            "color": "black!important",
            "background-color": "white",
            "border": "2px solid #F9CA3E", "color": "black"
        });
        $("#onetime,#monthly").css({
            "color": "white",
            "background-color": "#F9CA3E",
            "border": "none"
        });
        $(".donate-search-div").removeClass("d-none");
        $(".donation-amount-div").addClass("d-none");
    });
});
$(document).ready(function () {
    $("#onetime").click(function () {
        selected_type = "onetime";
        $("#onetime").css({
            "color": "black!important",
            "background-color": "white",
            "border": "2px solid #F9CA3E", "color": "black"
        });
        $("#fullpayment,#monthly").css({
            "color": "white",
            "background-color": "#F9CA3E",
            "border": "none"
        });
        $(".donate-search-div").addClass("d-none");
        $(".donation-amount-div").removeClass("d-none");
    });
});
$(document).ready(function () {
    $("#monthly").click(function () {
        selected_type = "monthly";
        $("#monthly").css({
            "color": "black!important",
            "background-color": "white",
            "border": "2px solid #F9CA3E", "color": "black"
        });
        $("#fullpayment,#onetime").css({
            "color": "white",
            "background-color": "#F9CA3E",
            "border": "none"
        });
        $(".donate-search-div").addClass("d-none");
        $(".donation-amount-div").removeClass("d-none");
    });
});
$(document).ready(function () {
    $("#backbuttom").click(function () {
        $("#donor_detail").addClass("d-none");
        $("#donate_parent").removeClass("d-none");
    });
});

$(document).ready(function () {
    // Get the total and given amounts from the div elements
    var totalAmountDiv = $("#totalAmountDiv");
    var givenAmountDiv = $("#givenAmountDiv");

    // Handle the click event of the "Calculate" button
    $("#fullpayment").click(function () {
        // Parse the text content of the div elements to get the numbers
        var totalAmount = parseFloat(totalAmountDiv.text().replace("Raised of: ₹", "").replace(/,/g, ""));
        var givenAmount = parseFloat(givenAmountDiv.text().replace("₹", "").replace(/,/g, ""));

        // Subtract the given amount from the total amount
        var result = totalAmount - givenAmount;
        // Display the result in the input field
        fullpaymentAmount = result;
        $("#donationAmount").val(result);
        selected_amount = fullpaymentAmount
    });
});

$(document).ready(function () {
    $("#donate_button").click(function () {
        if (selected_type == null || selected_type == "") {
            return alert("Please select donation type first")
        }
        if (selected_type == "onetime") {
            if (selected_amount == null || selected_amount == "") {
                return alert("Please Select or enter amount1")
            } else {
                $("#donate_parent").addClass("d-none");
                $("#donor_detail").removeClass("d-none");
                return null;
            }
        }
        if (selected_type == "monthly") {
            if (selected_amount == null || selected_amount == "") {
                return alert("Please Select or enter amount")
            } else {
                $("#donate_parent").addClass("d-none");
                $("#donor_detail").removeClass("d-none");
                return null;
            }
        }
        if (selected_type == "fullPayment") {
            if (selected_amount == null || selected_amount == "") {
                return alert("Please Select or enter amount")
            } else {
                $("#donate_parent").addClass("d-none");
                $("#donor_detail").removeClass("d-none");
                return null;
            }
        }

    })
});
// this end donation

function selectAmountFromOther(amount){
    selected_amount = amount
}

// validation of donor form start
$(document).ready(function () {
    $("#donate-conform").click('#donate-conform', function (event) {
        event.preventDefault();
        var name = $("#donor_name").val();
        // var phone = $("#donor_pancard").val();
        var emailPattern = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
        var namePattern = /^[a-zA-Z\s]+$/;
        var panPattern = /^[A-Z0-9]{10}$/;
        var phonePattern = /^\d{10}$/;
        var address = $("#donor_address").val();
        var city = $("#donor_city").val();
        var state = $("#donor_state").val();
        var phone = $("#donor_phone").val();
        var email = $("#donor_email").val();
        var pan = $("#donor_pancard").val();
        var country = $("#country").val();
        var validate = false;
        var checkboxes = $(".donor-check input[type='checkbox']:checked");
        if (pan.trim() === "") {
             $("#pan-error").html("Pan card number cannot be empty.");
             validate = false;
        } else if (!panPattern.test(pan)) {
            validate = false;
             $("#pan-error").html("Please provide valid pan card id.");
        } else {
             $("#pan-error").html(" ");
             validate = true;
        }
        if (name.trim() === "") {
            validate = false;
             $("#name-error").html("Name cannot be empty.");
        } else if (!namePattern.test(name)) {
            validate = false;
             $("#name-error").html("Please provide currect name");
        } else {
             $("#name-error").html(" ");
             validate = true;
        }

        if (!pan.trim() === "") {
            validate = false;
             $("#phone-error").html("Phone number should not be empty");
        } else if (!panPattern.test(pan)) {
            validate = false;
             $("#phone-error").html("Please provide currect number");
        } else {
             $("#phone-error").html("");
             validate = true;
        }
        if (!email.trim() === "") {
            validate = false;
             $("#email-error").html("Email id should not be empty");
        }
        else if (!emailPattern.test(email)) {
            validate = false;
             $("#email-error").html("Please provide currect email");
        } else {
             $("#email-error").html("");
             validate = true;
        }
        if (!city.trim() === "") {
            validate = false;
             $("#city-error").html("city name should not be empty");
        }
        else if (!namePattern.test(city)) {
            validate = false;
             $("#city-error").html("Please provide currect city name");
        } else {
             $("#city-error").html("");
             validate = true;
        }
        if (!phone.trim() === "") {
            validate = false;
             $("#phone-error").html("Phone number should not be empty");
        }
        else if (!phonePattern.test(phone)) {
            validate = false;
             $("#phone-error").html("Please provide currect number");
        } else {
             $("#phone-error").html("");
             validate = true;
        }
        if (!state.trim() === "") {
            validate = false;
             $("#state-error").html("city name should not be empty");
        }
        else if (!namePattern.test(state)) {
            validate = false;
             $("#state-error").html("Please provide currect city name");
        } else {
             $("#state-error").html("");
             validate = true;
        }

        $("#checkbox-error").html("");
        if (address.trim() === "") {
            validate = false;
            $("#address-error").html("The address is required");
        }
        else {
            $("#address-error").html("");
             validate = true;
        }
        if (checkboxes.length === 0) {
            validate = false;
                $("#checkbox-error").html("Please select at least one option.");
        }else {
            $("#checkbox-error").html("");
             validate = true;
        }
        if(validate == true){
            // alert()
            var data = {
                "campaign_id":$("#campaign_id").val(),
                "donation_type":selected_type,
                "donation_amount":selected_amount,
                "full_name":name,
                "pancard":pan,
                "email":email,
                "mobile":phone,
                "address":address,
                "city":city,
                "state":state,
                "country":country,
                "status":"pending"
            }
            var order_id ;var options = {};
            $.post("/donation/create", {data}, function(res){
                if(res.status == "success"){
                    $("#donation_id").val(res.donation_id);
                    $("#order_id").val(res.order_id);
                    order_id = res.order_id;
                    // rzp1.open();
                    razorPayPaymentGateway(res.order_id)
                    // e.preventDefault();
                }
            });

        }


    });
});

function razorPayPaymentGateway(order_id){
    var name = $("#donor_name").val();
    // var phone = $("#donor_pancard").val();
    var emailPattern = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
    var namePattern = /^[a-zA-Z\s]+$/;
    var panPattern = /^[A-Z0-9]{10}$/;
    var phonePattern = /^\d{10}$/;
    var address = $("#donor_address").val();
    var city = $("#donor_city").val();
    var state = $("#donor_state").val();
    var phone = $("#donor_phone").val();
    var email = $("#donor_email").val();
    var pan = $("#donor_pancard").val();
    var country = $("#country").val();
    var validate = false;
    var checkboxes = $(".donor-check input[type='checkbox']:checked");
    if (pan.trim() === "") {
         $("#pan-error").html("Pan card number cannot be empty.");
         validate = false;
    } else if (!panPattern.test(pan)) {
        validate = false;
         $("#pan-error").html("Please provide valid pan card id.");
    } else {
         $("#pan-error").html(" ");
         validate = true;
    }
    if (name.trim() === "") {
        validate = false;
         $("#name-error").html("Name cannot be empty.");
    } else if (!namePattern.test(name)) {
        validate = false;
         $("#name-error").html("Please provide currect name");
    } else {
         $("#name-error").html(" ");
         validate = true;
    }

    if (!pan.trim() === "") {
        validate = false;
         $("#phone-error").html("Phone number should not be empty");
    } else if (!panPattern.test(pan)) {
        validate = false;
         $("#phone-error").html("Please provide currect number");
    } else {
         $("#phone-error").html("");
         validate = true;
    }
    if (!email.trim() === "") {
        validate = false;
         $("#email-error").html("Email id should not be empty");
    }
    else if (!emailPattern.test(email)) {
        validate = false;
         $("#email-error").html("Please provide currect email");
    } else {
         $("#email-error").html("");
         validate = true;
    }
    if (!city.trim() === "") {
        validate = false;
         $("#city-error").html("city name should not be empty");
    }
    else if (!namePattern.test(city)) {
        validate = false;
         $("#city-error").html("Please provide currect city name");
    } else {
         $("#city-error").html("");
         validate = true;
    }
    if (!phone.trim() === "") {
        validate = false;
         $("#phone-error").html("Phone number should not be empty");
    }
    else if (!phonePattern.test(phone)) {
        validate = false;
         $("#phone-error").html("Please provide currect number");
    } else {
         $("#phone-error").html("");
         validate = true;
    }
    if (!state.trim() === "") {
        validate = false;
         $("#state-error").html("city name should not be empty");
    }
    else if (!namePattern.test(state)) {
        validate = false;
         $("#state-error").html("Please provide currect city name");
    } else {
         $("#state-error").html("");
         validate = true;
    }

    $("#checkbox-error").html("");
    if (checkboxes.length === 0) {
        validate = false;
         $("#checkbox-error").html("Please select at least one option.");
    }
    if (address.trim() === "") {
        validate = false;
         $("#address-error").html("The address is required");
    }
    else {
         $("#address-error").html("");
         validate = true;
    }
    if(validate == true){
      
        var options = {
            "key": "rzp_live_tlypQbIzKSsgnl",
            "amount": selected_amount+"00",
            "currency": "INR",
            "name": $('#client_name').val(),
            "description": "Akino Foundation",
            "image": $('#client_logo').val(),
            "order_id": order_id, 
            
            "handler": function (response){
                $.get('/payment/razorpay/'+response.razorpay_payment_id+'/'+$("#donation_id").val()+'/success', function(res){
                    if(res.status == "success"){
                        // alert("Thank you for your contribution! 80G Certificate sent to your email. Your payment id is "+response.razorpay_payment_id)
                        // location.reload()
                        window.location.href = "/donation/success/"+response.razorpay_payment_id;
                    }
                });
            },
            "prefill": {
                "name": $('#student_name').val(),
                "email": $('#student_email').val(),
                "contact": $('#student_mobile').val(),
            },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#F9CA3D"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
        rzp1.on('payment.failed', function (response){
            $.get('/payment/razorpay/'+response.error.metadata.payment_id+'/'+$("#form_id").val()+'/pending', function(res){
                alert("Payment Failed! Please try again")
            });
        });
        
    }


}
// validation of donor form end


// campaign img 
var thumbnails = document.getElementById("thumbnails");
var imgs = thumbnails.getElementsByTagName("img");
var main = document.getElementById("main");
var counter = 0;

for (let i = 0; i < imgs.length; i++) {
    let img = imgs[i];

    img.addEventListener("click", function () {
        main.src = this.src;
    });
}




$('#thumbnails').owlCarousel({
    loop: true,
    dots: false,
    nav: true,
    responsive: {
        0: {
            margin: 20,
            items: 4
        },
        600: {
            margin: 20,
            items: 4,
        },
        1000: {
            margin: 20,
            items: 4
        }
    }
});

