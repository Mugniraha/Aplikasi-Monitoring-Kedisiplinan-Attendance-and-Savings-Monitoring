/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
        colors: {
            teal:{
                450:'#48ABAA',
                550:'#429E9D',
            }
        },
    },
  },
  plugins: 
    [require("rippleui")]
  ,
}

