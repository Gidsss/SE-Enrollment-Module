/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/views/student/regular_schedule.blade.php",],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
}

module.exports = {
  //...
  plugins: [require("daisyui")],
  daisyui: {
    themes: ["light"],
  },
}

