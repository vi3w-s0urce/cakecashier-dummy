export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                mons: ["Montserrat", "sans-serif"],
                mondwest: ["Mondwest", "sans-serif"],
                hack: ["Hack", "sans-serif"],
            },
        },
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: [
            "light",
            "dark",
            "cupcake",
            {
                myTheme: {
                    primary: "#f87171",
                    secondary: "#22d3ee",
                    accent: "#fde047",
                    neutral: "#291334",
                    "base-100": "#faf7f5",
                    info: "#3abff8",
                    success: "#86efac",
                    warning: "#fbbd23",
                    error: "#dc2626",
                },
            },
        ],
    },
};
