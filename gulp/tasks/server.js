export const server  = (done) => {
    app.plugins.browsersync.init({
        server: {
            baseDir: `${app.path.srcFolder}`
        },
        notyfi: false,
        port: 3000,
    })
}
