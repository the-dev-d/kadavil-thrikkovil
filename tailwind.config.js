import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            colors: {
                p1: "#EAD7B4",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            gridTemplateColumns: {
                nav: "1fr min-content",
                menu: "min-content 1fr",
            },
            gridTemplateRows: {
                cards: "0.5fr 1fr 1fr 0.5fr",
            },
        },
    },

    plugins: [forms, require("flowbite/plugin")],
};
