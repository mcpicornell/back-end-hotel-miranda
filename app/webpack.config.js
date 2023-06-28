const path = require('path');

module.exports = {
  entry: './scripts/swiper.js',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'bundle.js',
  },
};