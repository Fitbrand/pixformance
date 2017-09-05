module.exports = {
  plugins: {
   'postcss-import': {},
   'postcss-size': {},
   'postcss-cssnext': {
     browsers: ['last 2 versions', '> 5%'],
     features: {
      autoprefixer: false
    }
	  }
	}  
};
