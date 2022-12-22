/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [ "./App/views/*.{php,js,html}"],
  theme: {
    extend: {},
  },
  plugins: [ require("flowbite/plugin")],
}
