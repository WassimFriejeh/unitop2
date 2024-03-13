/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        // screens: {
            // fl: { max: "322px" },
            // // sm: { max: "1000px" },
            // phlg: { min: "323", max: "450px" },
            // ph: { max: "639px" },
            // lp: { min: "900px" },
            // lpsm: { min: "900px", max: "1100px" },
            // tb: { min: "640px", max: "850px" },
        // },
        extend: {
            gridTemplateColumns: {
                // Simple 14 column grid
                14: "repeat(14, minmax(0, 1fr))",
                // Simple 23 column grid
                23: "repeat(23, minmax(0, 1fr))",
            },
            fontFamily: {
                "Helvetica-Neue": ["Helvetica Neue"],
                // "Bulmer-italic": ["Bulmer MT Std italic"],
                // "Bulmer-regular": ["Bulmer MT Std Regular"],
                // "sweet-sans-pro": ["sweet-sans-pro", "sans-serif"],
            },
            colors: {
                primaryColor: "#EC4115",
                lightColor: "#DEDDDD",
                darkColor: "#333333",
            },
        },
    },
};
