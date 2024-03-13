import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

import Swiper from "swiper/bundle";
import ScrollMagic from "scrollmagic";
import "scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap";

export default class WassimWebsiteFunctions {
    whiteNavbar() {
        const headerContainer = document.querySelector(".header-container");
        const dropdownicon = document.getElementById("dropdownicon");
        const phoneDropdown = document.getElementById("phonedropdown");

        dropdownicon.classList.remove("whitedropicon");
        dropdownicon.classList.add("blackdropicon");
        phoneDropdown.classList.add("text-black"); // Toggle 'hidden'

        headerContainer.classList.remove("transparentHeader");
        headerContainer.classList.add("whiteHeader");
        var NavLogo = document.getElementById("HomeLogo");
        NavLogo.src = "/assets/svg/dark-logo.svg";
        // contactusBtn.classList.remove("btn-arrow-light");
        // contactusBtn.classList.add("btn-arrow-dark");
        // navbar.classList.remove("bg-transparent");
        // navbar.classList.add("bg-white");
        // navcol.forEach((element) => {
        //     element.classList.remove("text-white");
        //     element.classList.add("text-black");
        // });
    }
    transparentNavbar() {
        const headerContainer = document.querySelector(".header-container");
        const navbar = document.querySelector("nav");
        const navcol = document.querySelectorAll(".color-change-div");
        const dropdownicon = document.getElementById("dropdownicon");

        var NavLogo = document.getElementById("HomeLogo");

        // const contactusBtn = document.getElementById("contact-us-button");
        // contactusBtn.classList.remove("btn-arrow-dark");
        // contactusBtn.classList.add("btn-arrow-light");

        dropdownicon.classList.remove("blackdropicon");
        dropdownicon.classList.add("whitedropicon");
        if (window.pageYOffset == 0) {
            headerContainer.classList.remove("whiteHeader");
            headerContainer.classList.add("transparentHeader");

            // navbar.classList.remove("bg-white");
            // navbar.classList.add("bg-transparent");
            // navcol.forEach((element) => {
            //     element.classList.remove("text-black");
            //     element.classList.add("text-white");
            // });

            NavLogo.src = "/assets/svg/light-logo.svg";
        }
    }
    adjustNavbar() {
        // changeImageOnScroll();
        const phoneDropdown = document.getElementById("phonedropdown");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 0) {
                this.whiteNavbar();
            } else {
                if (phoneDropdown.classList.contains("hidden")) {
                    this.transparentNavbar();
                }
            }
        });
    }
    testimonialsCarousel() {
        $(document).ready(function () {
            var swiper = new Swiper("#testimonialsCarousel", {
                loop: false,
                slidesPerView: 1,
                navigation: {
                    nextEl: ".nextBtn",
                    prevEl: ".prevBtn",
                },
                spaceBetween: 20, // Equivalent to margin in Owl Carousel
                touchDrag: true,
            });

            // Custom pagination
            var customPagination = document.getElementById("custom-pagination");

            for (var i = 0; i < swiper.slides.length; i++) {
                var paginationItem = document.createElement("span");
                paginationItem.className = "pagination-item";

                paginationItem.addEventListener("click", function () {
                    var index = parseInt(this.dataset.index);
                    swiper.slideTo(index); // Slide to the clicked pagination item
                });
                if (i === 0) {
                    // Make the first pagination item active by default
                    paginationItem.classList.add("active");
                }
                customPagination.appendChild(paginationItem);
            }

            // Update custom pagination on slide change
            swiper.on("slideChange", function () {
                var activeIndex = swiper.activeIndex;

                // Remove active class from all pagination items
                var paginationItems = document.querySelectorAll(
                    "#custom-pagination .pagination-item"
                );
                paginationItems.forEach(function (item) {
                    item.classList.remove("active");
                });

                // Add active class to the current pagination item
                paginationItems[activeIndex].classList.add("active");
            });
        });
    }
    articlesCarousel() {
        $(document).ready(function () {
            $("#article-carousel").owlCarousel({
                loop: false,
                navigation: false,
                margin: 20,
                touchDrag: true,

                responsive: {
                    0: {
                        items: 1,
                    },
                    400: {
                        items: 1,
                    },
                    600: {
                        items: 2.7,
                    },
                },
            });
        });
    }
    clickedValue(div) {
        div.classList.toggle("clicked");

        const text = div.querySelector(".text");
        text.classList.toggle("show");
    }
    clickedService(div) {
        var currentElement = div;
        var container = null;
        while ((currentElement = currentElement.parentElement)) {
            if (currentElement.classList.contains("service-container")) {
                // Found the element with the desired class
                container = currentElement;
                break;
            }
        }
        if (container) {
            container.classList.toggle("clicked");
        }

        // const text = div.querySelector(".text");
        // text.classList.toggle("show");
    }
    initPartnersCarousel() {
        var swiper = new Swiper(".partners-slider", {
            slidesPerView: 3.5,
            spaceBetween: 10,
            speed: 6000,
            autoplay: {
                delay: 1,
            },
            loop: true,
            allowTouchMove: false,
            breakpoints: {
                426: {
                    spaceBetween: 15,
                },
                800: {
                    spaceBetween: 30,
                },
            },
        });
        try {
            // Initialize Swiper
            var swiper2 = new Swiper(".mySwiper", {
                direction: "vertical",
                effect: "coverflow",
                pagination: false,
            });

            gsap.registerPlugin(ScrollTrigger);
            // var timeline = gsap.timeline({
            //     defaults: { duration: 1 },
            //     scrollTrigger: {
            //         trigger: ".slider-container",
            //         start: "top top",
            //         end: "+=900%", // Adjust this based on the number of slides
            //         scrub: 1, // Smooth animation during scroll
            //         pin: true,
            //         anticipatePin: 1, // Improve the pinning experience
            //         onUpdate: (self) => {
            //             swiper2.slideTo(
            //                 Math.round(
            //                     self.progress * (swiper2.slides.length - 1)
            //                 )
            //             );
            //             const totalSlides = swiper2.slides.length;
            //             const currentSlideIndex = Math.floor(
            //                 self.progress * (totalSlides - 1)
            //             );
            //             const progressWithinSlide =
            //                 (self.progress -
            //                     currentSlideIndex / (totalSlides - 1)) *
            //                 (totalSlides - 1);

            //             // Update your slider with the current slide index
            //             swiper2.slideTo(currentSlideIndex);

            //             const currentSlide = swiper2.slides[currentSlideIndex];

            //             // Log the progress within the current slide to the console
            //             $(currentSlide)
            //                 .find(".slide")
            //                 .find(".data")
            //                 .find(".text")
            //                 .find(".barcontainer")
            //                 .find(".bar")
            //                 .css("height", parseInt(progressWithinSlide * 100));
            //             console.log(
            //                 $(currentSlide)
            //                     .find(".slide")
            //                     .find(".data")
            //                     .find(".text")
            //                     .find(".barcontainer")
            //                     .find(".bar")
            //             );
            //         },
            //     },
            // });
        } catch (e) {}
    }
    showServiceImage(serviceId) {
        const originalImage = document.getElementById("original-image");

        originalImage.classList.add("hidden");
        // Get all images with the class 'services-images'
        const images = document.querySelectorAll(".services-images");
        // Loop through each image
        images.forEach((image) => {
            // Get the data-attribute value of the image
            var dataAttribute = image.getAttribute("data-attribute");
            // If the data-attribute matches the serviceId, remove the 'hidden' class
            if (dataAttribute == serviceId) {
                console.log("should show");
                image.classList.remove("hidden");
            } else {
                // Otherwise, add the 'hidden' class
                image.classList.add("hidden");
            }
        });
    }
    scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    }
    scrollToElement(elementId) {
        var element = document.getElementById(elementId);
        if (element) {
            // var offset = document.getElementById('your-navbar-id').offsetHeight; // Replace 'your-navbar-id' with the actual ID of your navbar
            var offsetPosition = element.offsetTop - 80;

            window.scrollTo({
                top: offsetPosition,
                behavior: "smooth",
            });
        }
        // alert("asdnipjok[]");
    }
    removeQueryParameter(parameterName) {
        const url = new URL(window.location.href);
        url.searchParams.delete(parameterName);
        const newUrl = url.toString();
        history.replaceState(null, "", newUrl);
    }
    scrollMagicWassim() {
        $(document).ready(function () {
            try {
                var ctrl = new ScrollMagic.Controller();

                // Initialize ScrollMagic Scene for each slide
                $(".slide").each(function (index, element) {
                    var scene = new ScrollMagic.Scene({
                        triggerElement: this,
                        triggerHook: 0.5, // Adjust trigger hook as needed
                        duration: $(this).height(),
                        offset: 0,
                    })
                        .setClassToggle(this, "fade-in") // Add class when in view
                        .on("enter", function (event) {
                            // Remove active class from all navigation items
                            $(".steps-vertical .step").removeClass(
                                "active-step"
                            );
                            // Add active class to the corresponding navigation item
                            $(".steps-vertical .step")
                                .eq(index)
                                .addClass("active-step");
                            // Remove active class from all slides
                            $(".slide").removeClass("active");
                            // Add active class to the current slide
                            $(element).addClass("active");
                        })
                        .addTo(ctrl);
                });

                // Click event handler for navigation list items
                $(".steps-vertical .step").on("click", function () {
                    var index = $(this).index(); // Get clicked item index
                    var slide = $(".slide").eq(index); // Get corresponding slide
                    // alert(slide.parent().parent().css('margin-top'));
                    var offset = slide.offset().top - 150; // Adjust for fixed navigation
                    $("html, body").animate({ scrollTop: offset }, 0); // Scroll animation
                });
            } catch (error) {
                console.log(error);
            }
        });
    }
    dropdownHover(parent) {
        const dropdown = parent.querySelector(".dropdown-menu");
        dropdown.classList.toggle("hidden");
        // Position the absolute dropdown
        const parentRect = parent.getBoundingClientRect(); // Get dimensions of the parent
        const rightOffset = parentRect.left; // Calculate the offset
        dropdown.style.left = rightOffset + "px";
    }
    dropdownPhone(parent) {
        const dropdown = parent.querySelector(".dropdown-menu");
        dropdown.classList.toggle("hidden");
    }
    toggleResponsiveDropdown() {
        const phoneDropdown = document.getElementById("phonedropdown");
        const dropdownicon = document.getElementById("dropdownicon");

        phoneDropdown.classList.toggle("hidden"); // Toggle 'hidden'
        phoneDropdown.classList.toggle(
            "flex",
            !phoneDropdown.classList.contains("hidden")
        ); // Toggle 'flex' based on 'hidden'
        dropdownicon.classList.toggle("blackdropicon");

        // Check if phoneDropdown is hidden or not before calling whiteNavbar
        if (!phoneDropdown.classList.contains("hidden")) {
            const navbar = document.querySelector("nav");
            const navcol = document.querySelectorAll(".color-change-div");
            const dropdownicon = document.getElementById("dropdownicon");
            const phoneDropdown = document.getElementById("phonedropdown");

            dropdownicon.classList.remove("whitedropicon");
            dropdownicon.classList.add("blackdropicon");
            phoneDropdown.classList.add("text-black"); // Toggle 'hidden'
            var NavLogo = document.getElementById("HomeLogo");

            navbar.classList.remove("bg-transparent");
            navbar.classList.add("bg-white");

            navcol.forEach((element) => {
                element.classList.remove("text-white");
                element.classList.add("text-black");
            });

            NavLogo.src = "/assets/svg/dark-logo.svg";
        } else {
            const navbar = document.querySelector("nav");
            const navcol = document.querySelectorAll(".color-change-div");
            const dropdownicon = document.getElementById("dropdownicon");
            var NavLogo = document.getElementById("HomeLogo");

            dropdownicon.classList.remove("blackdropicon");
            dropdownicon.classList.add("whitedropicon");
            if (window.pageYOffset == 0) {
                navbar.classList.remove("bg-white");
                navbar.classList.add("bg-transparent");
                navcol.forEach((element) => {
                    element.classList.remove("text-black");
                    element.classList.add("text-white");
                });

                NavLogo.src = "/assets/svg/light-logo.svg";
            }
        }
        const body = document.body;
        body.classList.toggle("overflow-hidden");
    }
    InitializeWebsite() {
        const Class = this;
        // this.adjustNavbar();
        // this.whiteNavbar();
        this.initPartnersCarousel();
        this.testimonialsCarousel();
        this.articlesCarousel();
        // this.scrollToTop();
        // this.scrollMagic();
        this.scrollMagicWassim();
    }
}
