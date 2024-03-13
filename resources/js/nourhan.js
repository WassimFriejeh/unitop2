import { gsap } from "gsap";

import { ScrollTrigger } from "gsap/ScrollTrigger";

import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
window.Fancybox = Fancybox;
Fancybox.bind("[data-fancybox]", {
    // Your custom options
});
export default class NourhanWebsiteFunctions {
    initFancybox() {
        window.Fancybox.bind("[data-fancybox]", {});
    }
    // gsap() {
    //     gsap.registerPlugin(ScrollTrigger);
    //     const tl = gsap.timeline({
    //         scrollTrigger: {
    //             trigger: "h2",
    //             start: "+=10 100%",
    //             end: "+=1000 40%",
    //             scrub: true,
    //             markers: false,
    //             toggleActions: "play reverse play reverse",
    //         },
    //     });

    //     tl.to("h2", {
    //         opacity: 1,
    //         height: 250,
    //         duration: 1,
    //         stagger: 0.1,
    //     }).to(
    //         "h2",
    //         {
    //             opacity: 0,
    //             height: 0,
    //             duration: 1,
    //             stagger: 0.1,
    //         },
    //         0.8
    //     );
    // }
    teamCarousel() {
        $(".team-highlights").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: [
                ' <i class="fa-solid fa-arrow-left p-3"></i>',
                ' <i class="fa-solid fa-arrow-right p-3"></i>',
            ],

            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 3,
                },
                1000: {
                    items: 2.3,
                },
            },
        });
    }
    attachment_inputs() {
        const fileInput = document.getElementById("file-input");
        const fileInputText = document.querySelector(".file-input-text");
        if(fileInputText){
            fileInput.addEventListener("change", function () {
                const filename = this.files[0].name;
                fileInputText.textContent = filename;
            });
        }
    }
    openYoutube(link) {
        new window.Fancybox([
            {
                src: link,
            },
        ]);
    }
    //  showMessage(title, text) {

    //     new window.Fancybox([
    //         {
    //             src:
    //                 '<div class="message"><h2>' +
    //                 title +
    //                 "</h2><p>" +
    //                 text +
    //                 "</p></div>",
    //             type: "html",
    //         },
    //     ]);
    // }

    servicesCard() {
        const gridContainer = document.getElementById("dynamic-grid");
        if (gridContainer) {
            const sections = gridContainer.children;

            for (let i = 0; i < sections.length; i++) {
                const section = sections[i];
                const colSpan =
                    sections.length % 2 !== 0 && i === sections.length - 1
                        ? 12
                        : 6;
                section.classList.remove("col-span-6");
                section.classList.add(`col-span-${colSpan}`);
            }
        }
    }

    InitializeWebsite() {
        const Class = this;
        this.teamCarousel();
        this.servicesCard();
        this.attachment_inputs();

    }
}
