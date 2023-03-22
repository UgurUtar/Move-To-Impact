module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        colors: {
            main_dark_blue: "#003a63",
            main_light_blue: "#e6f4ff",
            main_turquoise: "#79f4d7",
        },
        extend: {},
            colors: {
        main_dark_blue: "#003a63",
        main_light_blue: "#e6f4ff",
        main_turquoise: "#79f4d7",
    },
    },
    plugins: [require("flowbite/plugin")],
};