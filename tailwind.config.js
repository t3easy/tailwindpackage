module.exports = {
  future: {
    purgeLayersByDefault: true,
    removeDeprecatedGapUtilities: true,
  },
  purge: [
    "./Resources/Private/**/*.html"
  ],
  theme: {
    extend: {
      screens: {
        'dark': {'raw': '(prefers-color-scheme: dark)'},
      }
    },
  },
  variants: {},
  plugins: [],
}
