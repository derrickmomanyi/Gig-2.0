/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens:{
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
    
    extend: {
      colors:{
        whiteBg:'#FFFFFF',
        greyBg:'#FBFBFB;',
        orangeDm:'#FFB618',
        solidBlack:'#262626',
        alertRed:'#FF4842',
        greenTag:'#7FD880',
        fadeBlack:'#404040',
        tegre:'#666666',
        foot:'#424242',
        inputblack:'#212B36',   
      }
    },
  },
  plugins: [],
}

