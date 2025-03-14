import path from 'path';

export default {
    entry: {
        app: './src/js/app.js',
        modernizr: './src/js/modernizr.js'
    },
    output: {
        filename: '[name].js',
        path: path.resolve('build/js')
    }
}