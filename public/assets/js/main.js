(function ($) {
    "use strict";
    var animateHTML = function () {
        var elems;
        var windowHeight;

        function init() {
            elems = document.querySelectorAll(".pxp-animate-in");
            windowHeight = window.innerHeight;
            addEventHandlers();
            checkPosition();
        }

        function addEventHandlers() {
            window.addEventListener("scroll", checkPosition);
            window.addEventListener("resize", init);
        }

        function checkPosition() {
            for (var i = 0; i < elems.length; i++) {
                var positionFromTop = elems[i].getBoundingClientRect().top;

                if (positionFromTop - windowHeight <= 0) {
                    elems[i].classList.add("pxp-in");
                    if ($(elems[i]).hasClass("pxp-info-stats-item")) {
                        animateBubbles(elems[i]);
                    }
                    if (
                        $(elems[i]).hasClass("pxp-testimonials-1-circles-item")
                    ) {
                        animateTestimonialsCircles(elems[i]);
                    }
                }
            }
        }

        return {
            init: init,
        };
    };

    function handlePreloader() {
        if ($(".pxp-preloader").length > 0) {
            $(".pxp-preloader")
                .delay(200)
                .fadeOut(500, function () {
                    animateHTML().init();
                    animateHeroElement(".pxp-hero-right-bg-card");
                    animateHeroElement(".pxp-hero-card-info");
                    animateHeroElement(".pxp-hero-cards-container");
                    animateHeroElement(".pxp-hero-center-carousel");
                    setTimeout(function () {
                        animateHeroElement(".pxp-hero-stats-item");
                    }, 200);
                    setTimeout(function () {
                        animateHeroElement(".pxp-header-side-image");
                    }, 200);

                    setTimeout(function () {
                        animateHeroElement(".pxp-contact-us-form");
                    }, 200);

                    animateHeroElement(".pxp-hero-boxed-circulars");
                    animateHeroElement(".pxp-hero-boxed-icon-circle-1");
                    animateHeroElement(".pxp-hero-boxed-icon-circle-2");

                    animateHeroElement(".pxp-hero-boxed-info-card-big");
                    animateHeroElement(".pxp-hero-boxed-info-card-small");
                    animateHeroElement(".pxp-hero-boxed-info-list-container");

                    animateOnMouseMove(".pxp-mouse-move");
                });
        }
    }

    function windowResizeHandler() {
        resizeHeroBoxedCirculars();
    }

    function onContentScroll() {
        if (
            $(".pxp-header").hasClass("pxp-bigger") ||
            $(".pxp-header").hasClass("pxp-no-bg")
        ) {
            if (window.pageYOffset > 20) {
                $(".pxp-header").addClass("pxp-is-sticky");
            } else {
                $(".pxp-header").removeClass("pxp-is-sticky");
            }
        } else if ($(".pxp-header").hasClass("pxp-no-bg")) {
            if (window.pageYOffset > 0) {
                $(".pxp-header").addClass("pxp-is-sticky");
            } else {
                $(".pxp-header").removeClass("pxp-is-sticky");
            }
        } else {
            if (window.pageYOffset > 93) {
                $(".pxp-header").addClass("pxp-is-sticky");
            } else {
                $(".pxp-header").removeClass("pxp-is-sticky");
            }
        }
    }

    window.onscroll = function () {
        onContentScroll();
    };

    $(window).on("load", function () {
        handlePreloader();

        DecoupledEditor.create(
            document.querySelector("#pxp-company-job-description")
        )
            .then((editor) => {
                const toolbarContainer = document.querySelector(
                    "#pxp-company-job-description-toolbar"
                );
                toolbarContainer.appendChild(editor.ui.view.toolbar.element);
            })
            .catch((error) => {
                console.error(error);
            });

        DecoupledEditor.create(document.querySelector("#editor"))
            .then((editor) => {
                const toolbarContainer =
                    document.querySelector("#toolbar-container");

                toolbarContainer.appendChild(editor.ui.view.toolbar.element);
            })
            .catch((error) => {
                console.error(error);
            });

        var pdfIframe = document.querySelector("#pdfContainer iframe");

        // Disable context menu on the PDF iframe
        pdfIframe.addEventListener("contextmenu", function (event) {
            event.preventDefault();
        });
    });

    windowResizeHandler();

    $(window).resize(function () {
        windowResizeHandler();
    });

    function animateHeroElement(element) {
        if ($(element).hasClass("pxp-has-animation")) {
            $(element).addClass("pxp-animate");
        }
        if ($(element).hasClass("pxp-animate-cards")) {
            setTimeout(function () {
                $(element).find(".pxp-hero-card").addClass("pxp-animate");
            }, 600);
            setTimeout(function () {
                $(element).find(".pxp-hero-card-dark").addClass("pxp-animate");
                $(element).find(".pxp-hero-card-light").addClass("pxp-animate");
            }, 1200);
        }
        if ($(element).hasClass("pxp-animate-bounce")) {
            setTimeout(function () {
                $(element).addClass("animate__animated animate__bounceIn");
            }, 1800);
        }
        if ($(element).hasClass("pxp-animate-circles-bounce")) {
            $(element).addClass("animate__animated animate__bounceIn");
        }
        if ($(element).hasClass("pxp-animate-info-card")) {
            setTimeout(function () {
                $(element).addClass("animate__animated animate__flipInX");
            }, 300);
        }
        if ($(element).hasClass("pxp-animate-icon-circle-bounce")) {
            setTimeout(function () {
                $(element).addClass("animate__animated animate__bounceIn");
            }, 800);
        }
    }

    function animateBubbles(element) {
        if ($(element).hasClass("pxp-animate-bounce")) {
            setTimeout(function () {
                $(element).addClass("animate__animated animate__bounceIn");
            }, 500);
        }
    }

    function animateTestimonialsCircles(element) {
        if ($(element).hasClass("pxp-animate-bounce")) {
            setTimeout(function () {
                $(element).addClass("animate__animated animate__bounceIn");
            }, 200);
        }
    }

    function animateOnMouseMove(element) {
        const mouseMoveElems = document.querySelectorAll(element);

        mouseMoveElems.forEach(function (mouseMoveElem) {
            var speed = mouseMoveElem.getAttribute("data-speed");

            window.addEventListener("mousemove", (evt) => {
                const x =
                    -(window.innerWidth / 2 - evt.pageX) / parseInt(speed);
                const y =
                    -(window.innerHeight / 2 - evt.pageY) / parseInt(speed);
                mouseMoveElem.style.transform = `translateY(${y}px) translateX(${x}px)`;
            });
        });
    }

    function resizeHeroBoxedCirculars() {
        if ($(".pxp-hero-boxed-circulars").length > 0) {
            var circularsWidth = $(".pxp-hero-boxed-circulars").width();
            $(".pxp-hero-boxed-circulars").height(circularsWidth);
        }
    }

    if ($(".pxp-hero-logos-carousel").length > 0) {
        $(".pxp-hero-logos-carousel").owlCarousel({
            nav: false,
            dots: false,
            margin: 40,
            loop: true,
            responsive: {
                0: {
                    items: 4,
                },
                767: {
                    items: 5,
                },
                991: {
                    items: 7,
                },
                1200: {
                    items: 5,
                },
                1400: {
                    items: 6,
                },
            },
            checkVisible: false,
            smartSpeed: 600,
            autoplay: false,
            autoplayTimeout: 5000,
        });
    }

    $(".pxp-animate-icon").hover(
        function () {
            $(this)
                .find("img")
                .addClass("animate__animated animate__jackInTheBox");
        },
        function () {
            $(this)
                .find("img")
                .removeClass("animate__animated animate__jackInTheBox");
        }
    );

    // Price plans switcher
    $("[name=pxp-price-plans-switcher]").on("change", function () {
        var checkedValue = $("[name=pxp-price-plans-switcher]:checked").attr(
            "data-period"
        );

        if (checkedValue == "month") {
            $(".pxp-plans-price-annual").hide();
            $(".pxp-plans-price-monthly").show();
        } else {
            $(".pxp-plans-price-monthly").hide();
            $(".pxp-plans-price-annual").show();
        }
    });

    if ($(".pxp-categories-carousel").length > 0) {
        $(".pxp-categories-carousel").owlCarousel({
            nav: false,
            dots: true,
            margin: 30,
            loop: false,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                900: {
                    items: 4,
                },
                1600: {
                    items: 6,
                },
            },
            checkVisible: false,
            smartSpeed: 600,
        });
    }

    // Set checked badge color for jobs list filter
    $('.pxp-jobs-list-side-filter .list-group-item input[type="checkbox"').on(
        "change",
        function () {
            if ($(this).is(":checked")) {
                $(this).parent().parent().addClass("pxp-checked");
            } else {
                $(this).parent().parent().removeClass("pxp-checked");
            }
        }
    );

    // Company dashboard charts
    if ($("#pxp-company-dashboard-visits-chart").length > 0) {
        var companyVisitsChartElem = document
            .getElementById("pxp-company-dashboard-visits-chart")
            .getContext("2d");

        var gradient = companyVisitsChartElem.createLinearGradient(
            0,
            250,
            0,
            0
        );
        gradient.addColorStop(0, "rgba(255, 255, 255, 0)");
        gradient.addColorStop(0.5, "rgba(0, 112, 201, 0.09)");
        gradient.addColorStop(1, "rgba(0, 112, 201, 0.12)");

        var companyVisitsChart = new Chart(companyVisitsChartElem, {
            type: "line",
            data: {
                labels: [
                    "Oct 06",
                    "Oct 07",
                    "Oct 08",
                    "Oct 09",
                    "Oct 10",
                    "Oct 11",
                    "Oct 12",
                ],
                datasets: [
                    {
                        label: "Visits",
                        data: [12, 56, 34, 78, 38, 28, 54],
                        borderWidth: 3,
                        borderColor: "rgba(0, 112, 201, 1)",
                        pointBackgroundColor: "rgba(255, 255, 255, 0)",
                        pointHoverBackgroundColor: "rgba(255, 255, 255, 1)",
                        pointBorderColor: "rgba(66, 133, 244, 0)",
                        pointHoverBorderColor: "rgba(0, 112, 201, 1)",
                        pointBorderWidth: 10,
                        pointHoverBorderWidth: 3,
                        pointHitRadius: 20,
                        cubicInterpolationMode: "monotone",
                        fill: true,
                        backgroundColor: gradient,
                    },
                ],
            },
            options: {
                scales: {
                    xAxes: [
                        {
                            ticks: {
                                fontColor: "rgba(153, 153, 153, 1)",
                                maxTicksLimit: 7,
                                maxRotation: 0,
                            },
                            gridLines: {
                                zeroLineColor: "rgba(232, 232, 232, 1)",
                                drawOnChartArea: false,
                            },
                        },
                    ],
                    yAxes: [
                        {
                            ticks: {
                                beginAtZero: true,
                                fontColor: "rgba(153, 153, 153, 1)",
                                callback: function (value, index, values) {
                                    if (Math.floor(value) === value) {
                                        return value;
                                    }
                                },
                            },
                            gridLines: {
                                zeroLineColor: "rgba(232, 232, 232, 0)",
                            },
                        },
                    ],
                },
                responsive: true,
                tooltips: {
                    backgroundColor: "rgba(0, 39, 69, 1)",
                    cornerRadius: 7,
                    mode: "index",
                    intersect: false,
                    displayColors: false,
                    xPadding: 10,
                    yPadding: 10,
                    titleFontColor: "rgba(255, 255, 255, .7)",
                    bodyFontColor: "rgba(255, 255, 255, 1)",
                    titleFontStyle: "normal",
                    bodyFontStyle: "bold",
                },
                legend: {
                    display: false,
                },
            },
        });
    }
    if ($("#pxp-company-dashboard-app-chart").length > 0) {
        var companyAppChartElem = document
            .getElementById("pxp-company-dashboard-app-chart")
            .getContext("2d");

        var gradient = companyVisitsChartElem.createLinearGradient(
            0,
            250,
            0,
            0
        );
        gradient.addColorStop(0, "rgba(255, 255, 255, 0)");
        gradient.addColorStop(0.5, "rgba(255, 168, 35, 0.09)");
        gradient.addColorStop(1, "rgba(255, 168, 35, 0.12)");

        var companyAppChart = new Chart(companyAppChartElem, {
            type: "line",
            data: {
                labels: [
                    "Oct 06",
                    "Oct 07",
                    "Oct 08",
                    "Oct 09",
                    "Oct 10",
                    "Oct 11",
                    "Oct 12",
                ],
                datasets: [
                    {
                        label: "Applications",
                        data: [43, 81, 72, 85, 42, 65, 80],
                        borderWidth: 3,
                        borderColor: "rgba(255, 168, 35, 1)",
                        pointBackgroundColor: "rgba(255, 255, 255, 0)",
                        pointHoverBackgroundColor: "rgba(255, 255, 255, 1)",
                        pointBorderColor: "rgba(66, 133, 244, 0)",
                        pointHoverBorderColor: "rgba(255, 168, 35, 1)",
                        pointBorderWidth: 10,
                        pointHoverBorderWidth: 3,
                        pointHitRadius: 20,
                        cubicInterpolationMode: "monotone",
                        fill: true,
                        backgroundColor: gradient,
                    },
                ],
            },
            options: {
                scales: {
                    xAxes: [
                        {
                            ticks: {
                                fontColor: "rgba(153, 153, 153, 1)",
                                maxTicksLimit: 7,
                                maxRotation: 0,
                            },
                            gridLines: {
                                zeroLineColor: "rgba(232, 232, 232, 1)",
                                drawOnChartArea: false,
                            },
                        },
                    ],
                    yAxes: [
                        {
                            ticks: {
                                beginAtZero: true,
                                fontColor: "rgba(153, 153, 153, 1)",
                                callback: function (value, index, values) {
                                    if (Math.floor(value) === value) {
                                        return value;
                                    }
                                },
                            },
                            gridLines: {
                                zeroLineColor: "rgba(232, 232, 232, 0)",
                            },
                        },
                    ],
                },
                responsive: true,
                tooltips: {
                    backgroundColor: "rgba(0, 39, 69, 1)",
                    cornerRadius: 7,
                    mode: "index",
                    intersect: false,
                    displayColors: false,
                    xPadding: 10,
                    yPadding: 10,
                    titleFontColor: "rgba(255, 255, 255, .7)",
                    bodyFontColor: "rgba(255, 255, 255, 1)",
                    titleFontStyle: "normal",
                    bodyFontStyle: "bold",
                },
                legend: {
                    display: false,
                },
            },
        });
    }

    // Candidate dashboard charts
    if ($("#pxp-candidate-dashboard-visits-chart").length > 0) {
        var candidateVisitsChartElem = document
            .getElementById("pxp-candidate-dashboard-visits-chart")
            .getContext("2d");

        var gradient = candidateVisitsChartElem.createLinearGradient(
            0,
            250,
            0,
            0
        );
        gradient.addColorStop(0, "rgba(255, 255, 255, 0)");
        gradient.addColorStop(0.5, "rgba(0, 112, 201, 0.09)");
        gradient.addColorStop(1, "rgba(0, 112, 201, 0.12)");

        var candidateVisitsChart = new Chart(candidateVisitsChartElem, {
            type: "line",
            data: {
                labels: [
                    "Oct 06",
                    "Oct 07",
                    "Oct 08",
                    "Oct 09",
                    "Oct 10",
                    "Oct 11",
                    "Oct 12",
                ],
                datasets: [
                    {
                        label: "Visits",
                        data: [12, 56, 34, 78, 38, 28, 54],
                        borderWidth: 3,
                        borderColor: "rgba(0, 112, 201, 1)",
                        pointBackgroundColor: "rgba(255, 255, 255, 0)",
                        pointHoverBackgroundColor: "rgba(255, 255, 255, 1)",
                        pointBorderColor: "rgba(66, 133, 244, 0)",
                        pointHoverBorderColor: "rgba(0, 112, 201, 1)",
                        pointBorderWidth: 10,
                        pointHoverBorderWidth: 3,
                        pointHitRadius: 20,
                        cubicInterpolationMode: "monotone",
                        fill: true,
                        backgroundColor: gradient,
                    },
                ],
            },
            options: {
                scales: {
                    xAxes: [
                        {
                            ticks: {
                                fontColor: "rgba(153, 153, 153, 1)",
                                maxTicksLimit: 7,
                                maxRotation: 0,
                            },
                            gridLines: {
                                zeroLineColor: "rgba(232, 232, 232, 1)",
                                drawOnChartArea: false,
                            },
                        },
                    ],
                    yAxes: [
                        {
                            ticks: {
                                beginAtZero: true,
                                fontColor: "rgba(153, 153, 153, 1)",
                                callback: function (value, index, values) {
                                    if (Math.floor(value) === value) {
                                        return value;
                                    }
                                },
                            },
                            gridLines: {
                                zeroLineColor: "rgba(232, 232, 232, 0)",
                            },
                        },
                    ],
                },
                responsive: true,
                tooltips: {
                    backgroundColor: "rgba(0, 39, 69, 1)",
                    cornerRadius: 7,
                    mode: "index",
                    intersect: false,
                    displayColors: false,
                    xPadding: 10,
                    yPadding: 10,
                    titleFontColor: "rgba(255, 255, 255, .7)",
                    bodyFontColor: "rgba(255, 255, 255, 1)",
                    titleFontStyle: "normal",
                    bodyFontStyle: "bold",
                },
                legend: {
                    display: false,
                },
            },
        });
    }
    if ($("#pxp-candidate-dashboard-app-chart").length > 0) {
        var candidateAppChartElem = document
            .getElementById("pxp-candidate-dashboard-app-chart")
            .getContext("2d");

        var gradient = candidateVisitsChartElem.createLinearGradient(
            0,
            250,
            0,
            0
        );
        gradient.addColorStop(0, "rgba(255, 255, 255, 0)");
        gradient.addColorStop(0.5, "rgba(255, 168, 35, 0.09)");
        gradient.addColorStop(1, "rgba(255, 168, 35, 0.12)");

        var candidateAppChart = new Chart(candidateAppChartElem, {
            type: "line",
            data: {
                labels: [
                    "Oct 06",
                    "Oct 07",
                    "Oct 08",
                    "Oct 09",
                    "Oct 10",
                    "Oct 11",
                    "Oct 12",
                ],
                datasets: [
                    {
                        label: "Applications",
                        data: [43, 81, 72, 85, 42, 65, 80],
                        borderWidth: 3,
                        borderColor: "rgba(255, 168, 35, 1)",
                        pointBackgroundColor: "rgba(255, 255, 255, 0)",
                        pointHoverBackgroundColor: "rgba(255, 255, 255, 1)",
                        pointBorderColor: "rgba(66, 133, 244, 0)",
                        pointHoverBorderColor: "rgba(255, 168, 35, 1)",
                        pointBorderWidth: 10,
                        pointHoverBorderWidth: 3,
                        pointHitRadius: 20,
                        cubicInterpolationMode: "monotone",
                        fill: true,
                        backgroundColor: gradient,
                    },
                ],
            },
            options: {
                scales: {
                    xAxes: [
                        {
                            ticks: {
                                fontColor: "rgba(153, 153, 153, 1)",
                                maxTicksLimit: 7,
                                maxRotation: 0,
                            },
                            gridLines: {
                                zeroLineColor: "rgba(232, 232, 232, 1)",
                                drawOnChartArea: false,
                            },
                        },
                    ],
                    yAxes: [
                        {
                            ticks: {
                                beginAtZero: true,
                                fontColor: "rgba(153, 153, 153, 1)",
                                callback: function (value, index, values) {
                                    if (Math.floor(value) === value) {
                                        return value;
                                    }
                                },
                            },
                            gridLines: {
                                zeroLineColor: "rgba(232, 232, 232, 0)",
                            },
                        },
                    ],
                },
                responsive: true,
                tooltips: {
                    backgroundColor: "rgba(0, 39, 69, 1)",
                    cornerRadius: 7,
                    mode: "index",
                    intersect: false,
                    displayColors: false,
                    xPadding: 10,
                    yPadding: 10,
                    titleFontColor: "rgba(255, 255, 255, .7)",
                    bodyFontColor: "rgba(255, 255, 255, 1)",
                    titleFontStyle: "normal",
                    bodyFontStyle: "bold",
                },
                legend: {
                    display: false,
                },
            },
        });
    }

    // Upload company cover photo and logo
    if ($("#pxp-company-cover-choose-file").length > 0) {
        const chooseCoverFile = document.getElementById(
            "pxp-company-cover-choose-file"
        );

        chooseCoverFile.addEventListener("change", function () {
            const files = chooseCoverFile.files[0];

            if (files) {
                const fileReader = new FileReader();

                fileReader.readAsDataURL(files);
                fileReader.addEventListener("load", function () {
                    $("#pxp-company-cover-choose-file")
                        .next("label")
                        .css({
                            "background-image": "url(" + this.result + ")",
                            border: "0 none",
                        })
                        .find("span")
                        .hide();
                });
            }
        });
    }
    if ($("#pxp-company-logo-choose-file").length > 0) {
        const chooseLogoFile = document.getElementById(
            "pxp-company-logo-choose-file"
        );

        chooseLogoFile.addEventListener("change", function () {
            const files = chooseLogoFile.files[0];

            if (files) {
                const fileReader = new FileReader();

                fileReader.readAsDataURL(files);
                fileReader.addEventListener("load", function () {
                    $("#pxp-company-logo-choose-file")
                        .next("label")
                        .css({
                            "background-image": "url(" + this.result + ")",
                            border: "0 none",
                        })
                        .find("span")
                        .hide();
                });
            }
        });
    }

    // Upload candidate cover photo and logo
    if ($("#pxp-candidate-cover-choose-file").length > 0) {
        const chooseCandidateCoverFile = document.getElementById(
            "pxp-candidate-cover-choose-file"
        );

        chooseCandidateCoverFile.addEventListener("change", function () {
            const files = chooseCandidateCoverFile.files[0];

            if (files) {
                const fileReader = new FileReader();

                fileReader.readAsDataURL(files);
                fileReader.addEventListener("load", function () {
                    console.log(this.result);
                    $("#pxp-candidate-cover-choose-file")
                        .next("label")
                        .css({
                            "background-image": "url(" + this.result + ")",
                            border: "0 none",
                        })
                        .find("span")
                        .hide();
                });
            }
        });
    }
    if ($("#pxp-candidate-photo-choose-file").length > 0) {
        const chooseCandidatePhotoFile = document.getElementById(
            "pxp-candidate-photo-choose-file"
        );

        chooseCandidatePhotoFile.addEventListener("change", function () {
            const files = chooseCandidatePhotoFile.files[0];

            if (files) {
                const fileReader = new FileReader();

                fileReader.readAsDataURL(files);
                fileReader.addEventListener("load", function () {
                    $("#pxp-candidate-photo-choose-file")
                        .next("label")
                        .css({
                            "background-image": "url(" + this.result + ")",
                            border: "0 none",
                        })
                        .find("span")
                        .hide();
                });
            }
        });
    }

    // Toogle side filter on mobile
    $(".pxp-list-side-filter-header a").on("click", function () {
        $(this)
            .parent()
            .parent()
            .find(".pxp-list-side-filter-panel")
            .slideToggle();
    });

    // Toggle job details panel on mobile
    $(".pxp-jobs-card-4").on("click", function () {
        $(".pxp-jobs-tab-content").addClass("pxp-show");
    });
    $(".pxp-jobs-tab-pane-close-btn").on("click", function () {
        $(".pxp-jobs-tab-content").removeClass("pxp-show");
    });

    // Toggle messages panel on mobile
    $(".pxp-dashboard-inbox-list-item").on("click", function () {
        $(".pxp-dashboard-inbox-messages-container").addClass("pxp-show");
    });
    $(".pxp-dashboard-inbox-messages-close-btn").on("click", function () {
        $(".pxp-dashboard-inbox-messages-container").removeClass("pxp-show");
    });

    var selectedSkills = []; // Array to store the selected skill values

    $("#skillsSelect").on("change", function () {
        var selectedSkill = $(this).val();
        var selectedSkillText = $("#skillsSelect option:selected").text();

        if (selectedSkill !== "") {
            // Check if the skill is already in the list
            var existingSkill = $(
                "#selectedSkillsList li:contains(" + selectedSkillText + ")"
            );
            if (existingSkill.length === 0) {
                // Add the selected skill to the top of the list
                $("#selectedSkillsList").prepend(
                    "<li>" +
                        selectedSkillText +
                        '<span class="fa fa-trash-o"></span></li>'
                );
                selectedSkills.push(selectedSkill); // Add the selected skill to the array
                updateSelectedSkillsInput(); // Update the hidden input field
            }
        }
    });

    $(document).on(
        "click",
        ".pxp-candidate-dashboard-skills li .fa-trash-o",
        function () {
            var removedSkill = $(this).parent("li").text().trim();
            $(this).parent("li").remove();
            selectedSkills = selectedSkills.filter(function (skill) {
                return skill !== removedSkill; // Remove the skill from the array
            });
            updateSelectedSkillsInput(); // Update the hidden input field
        }
    );

    function updateSelectedSkillsInput() {
        var selectedSkillsInput = $("#selectedSkillsInput");
        selectedSkillsInput.val(selectedSkills.join(",")); // Update the hidden input value with selected skills
    }

    // Global array to store experiences
    let experiencesArray = [];

    // Add event listener to the "Add Experience" button
    $("#add-experience-btn").click(addExperienceRow);

    // Function to add a new experience row
    function addExperienceRow(event) {
        event.preventDefault();
        const job_title = $("#pxp-candidate-work-title").val();
        const company_name = $("#pxp-candidate-work-company").val();
        const start_date = $("#pxp-candidate-start-date").val();
        const end_date = $("#pxp-candidate-end-date").val();
        const job_description = $("#pxp-candidate-work-about").val();

        console.log(
            job_title,
            company_name,
            start_date,
            end_date,
            job_description
        );
        // Push the experience as an object into the array
        experiencesArray.push({
            job_title: job_title,
            company_name: company_name,
            start_date: start_date,
            end_date: end_date,
            job_description: job_description,
        });

        const newRow = $("<tr>");
        newRow.append(
            $("<td>").html(
                '<div class="pxp-candidate-dashboard-experience-title">' +
                    job_title +
                    "</div>"
            )
        );
        newRow.append(
            $("<td>").html(
                '<div class="pxp-candidate-dashboard-experience-company">' +
                    company_name +
                    "</div>"
            )
        );
        newRow.append(
            $("<td>").html(
                '<div class="pxp-candidate-dashboard-experience-time">' +
                    start_date +
                    " to " +
                    end_date +
                    "</div>"
            )
        );
        newRow.append(
            $("<td>").html(
                '<div class="pxp-dashboard-table-options">' +
                    '<ul class="list-unstyled">' +
                    '<li><button title="Edit" class="edit-btn"><span class="fa fa-pencil"></span></button></li>' +
                    '<li><button title="Delete" class="delete-btn"><span class="fa fa-trash-o"></span></button></li>' +
                    "</ul></div>"
            )
        );

        $("#experience-table tbody").append(newRow);

        // Clear input values
        $("#pxp-candidate-work-title").val("");
        $("#pxp-candidate-work-company").val("");
        $("#pxp-candidate-start-date").val("");
        $("#pxp-candidate-end-date").val("");
        $("#pxp-candidate-work-about").val("");

        // Update the hidden field value
        updateHiddenField();
    }

    // Function to update the hidden field value with the experiences array
    function updateHiddenField() {
        $("#experiences-hidden-field").val(JSON.stringify(experiencesArray));
    }

    // Event delegation to handle delete button click
    $("#experience-table tbody").on("click", ".delete-btn", function (event) {
        event.preventDefault();
        const rowIndex = $(this).closest("tr").index();
        experiencesArray.splice(rowIndex, 1); // Remove the corresponding element from the experiences array

        $(this).closest("tr").remove(); // Remove the row from the table

        // Update the hidden field value
        updateHiddenField();
    });

    // Event delegation to handle edit button click
    $("#experience-table tbody").on("click", ".edit-btn", function (event) {
        event.preventDefault();
        const rowIndex = $(this).closest("tr").index();
        const experience = experiencesArray[rowIndex];

        // Fill the form fields with the experience details for editing
        $("#pxp-candidate-work-title").val(experience.job_title);
        $("#pxp-candidate-work-company").val(experience.company_name);
        $("#pxp-candidate-start-date").val(experience.start_date);
        $("#pxp-candidate-end-date").val(experience.end_date);
        $("#pxp-candidate-work-about").val(experience.job_description);

        // Remove the corresponding row from the table
        $(this).closest("tr").remove();

        // Remove the experience from the array
        experiencesArray.splice(rowIndex, 1);

        // Update the hidden field value
        updateHiddenField();
    });

    // Global array to store trainings
    let trainingsArray = [];

    // Add event listener to the "Add Experience" button
    $("#add-edu-btn").click(addEduRow);

    // Function to add a new experience row
    function addEduRow(event) {
        event.preventDefault();
        const training_title = $("#pxp-candidate-edu-title").val();
        const training_institution = $("#pxp-candidate-edu-school").val();
        const training_start_date = $("#pxp-candidate-edu-start-time").val();
        const training_end_date = $("#pxp-candidate-edu-end-time").val();
        const training_description = $("#pxp-candidate-edu-about").val();

        // Push the training as an object into the array
        trainingsArray.push({
            training_title: training_title,
            training_institution: training_institution,
            training_start_date: training_start_date,
            training_end_date: training_end_date,
            training_description: training_description,
        });

        const newRow = $("<tr>");
        newRow.append(
            $("<td>").html(
                '<div class="pxp-candidate-dashboard-experience-title">' +
                    training_title +
                    "</div>"
            )
        );
        newRow.append(
            $("<td>").html(
                '<div class="pxp-candidate-dashboard-experience-company">' +
                    training_institution +
                    "</div>"
            )
        );
        newRow.append(
            $("<td>").html(
                '<div class="pxp-candidate-dashboard-experience-time">' +
                    training_start_date +
                    " to " +
                    training_end_date +
                    "</div>"
            )
        );
        newRow.append(
            $("<td>").html(
                '<div class="pxp-dashboard-table-options">' +
                    '<ul class="list-unstyled">' +
                    '<li><button title="Edit" class="edit-btn"><span class="fa fa-pencil"></span></button></li>' +
                    '<li><button title="Delete" class="delete-btn"><span class="fa fa-trash-o"></span></button></li>' +
                    "</ul></div>"
            )
        );

        $("#training-table tbody").append(newRow);

        // Clear input values
        $("#pxp-candidate-edu-title").val("");
        $("#pxp-candidate-edu-school").val("");
        $("#pxp-candidate-edu-start-time").val("");
        $("#pxp-candidate-edu-end-time").val("");
        $("#pxp-candidate-edu-about").val("");

        // Update the hidden field value
        updateTrainingHiddenField();
    }

    // Function to update the hidden field value with the experiences array
    function updateTrainingHiddenField() {
        $("#trainings-hidden-field").val(JSON.stringify(trainingsArray));
    }

    // Event delegation to handle delete button click
    $("#training-table tbody").on("click", ".delete-btn", function (event) {
        event.preventDefault();
        const rowIndex = $(this).closest("tr").index();
        trainingsArray.splice(rowIndex, 1); // Remove the corresponding element from the trainings array

        $(this).closest("tr").remove(); // Remove the row from the table

        // Update the hidden field value
        updateTrainingHiddenField();
    });

    // Event delegation to handle edit button click
    $("#training-table tbody").on("click", ".edit-btn", function (event) {
        event.preventDefault();
        const rowIndex = $(this).closest("tr").index();
        const training = trainingsArray[rowIndex];
        console.log(rowIndex);

        // Fill the form fields with the training details for editing
        $("#pxp-candidate-edu-title").val(training.training_title);
        $("#pxp-candidate-edu-school").val(training.training_institution);
        $("#pxp-candidate-edu-start-time").val(training.training_start_date);
        $("#pxp-candidate-edu-end-time").val(training.training_end_date);
        $("#pxp-candidate-edu-about").val(training.training_description);

        // Remove the corresponding row from the table
        $(this).closest("tr").remove();

        // Remove the experience from the array
        trainingsArray.splice(rowIndex, 1);

        // Update the hidden field value
        updateTrainingHiddenField();
    });

    $("#add-new-job").submit(function (event) {
        // Get the content of the div
        var divContent = $("#pxp-company-job-description").html();

        // Assign the div content to the hidden input field
        $("#pxp-company-job-description-input").val(divContent);

        // Submit the form
        $(this).submit();
    });

    $("#cv-store-form").submit(function (event) {
        var cv_contents = $("#editor").html();

        $("#hidden-cv-state").val(cv_contents);

        //submit the form
        $(this).submit();
    });
})(jQuery);
