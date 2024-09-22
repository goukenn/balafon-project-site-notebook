// Generated using webpack-cli https://github.com/webpack/webpack-cli

const path = require('path');

const isProduction = process.env.NODE_ENV == 'production';

const config = {
    entry: './Scripts/App/src/main.js',
    output: {
        path: path.resolve(__dirname, './Data/assets/dist'),
    },
};

module.exports = () => {
    if (isProduction) {
        config.mode = 'production'; 
        
    } else {
        config.mode = 'development';
    }
    return config;
};
