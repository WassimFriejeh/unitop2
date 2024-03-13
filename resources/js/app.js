import "./bootstrap";
import "owl.carousel";
// import ""
// resources/js/app.js

// // Wassim Section
// import "./wassim.js";
// import pdfjsLib from "pdfjs-dist/build/pdf";
// import { PDFViewer } from "pdfjs-dist/web/pdf_viewer";
// import "pdfjs-dist/web/pdf_viewer.css";
// pdfjsLib.GlobalWorkerOptions.workerSrc = "pdfjs-dist/build/pdf.worker.min.mjs";

// window.Fancybox = Fancybox;

// import intlTelInput from "intl-tel-input";
// window.intlTelInput = intlTelInput;

import WassimWebsiteFunctions from "./wassim.js";
window.WassimWebsiteFunctions = new WassimWebsiteFunctions();

import NourhanWebsiteFunctions from "./nourhan.js";
window.NourhanWebsiteFunctions = new NourhanWebsiteFunctions();
