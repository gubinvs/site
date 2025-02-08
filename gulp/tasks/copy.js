// Создаю таск для копирования файлов при сборке проекта в папку для продакшена
export const copy = () => {
    return app.gulp.src(app.path.src.files) 
    .pipe(app.gulp.dest(app.path.build.files))
} 

// Создаю таск для копирования файлов php при сборке проекта в папку для продакшена
export const copy_page = () => {
    return app.gulp.src(app.path.src.page) 
    .pipe(app.gulp.dest(app.path.build.page))
} 

// Создаю таск для копирования файлов php при сборке проекта в папку для продакшена
export const copy_php = () => {
    return app.gulp.src(app.path.src.php) 
    .pipe(app.gulp.dest(app.path.build.php))
} 

// Создаю таск для копирования файлов js при сборке проекта в папку для продакшена
export const copy_js = () => {
    return app.gulp.src(app.path.src.js) 
    .pipe(app.gulp.dest(app.path.build.js))
} 

// Создаю таск для копирования файлов fonts при сборке проекта в папку для продакшена
export const copy_fonts = () => {
    return app.gulp.src(app.path.src.fonts) 
    .pipe(app.gulp.dest(app.path.build.fonts))
} 

// Создаю таск для копирования файлов admin при сборке проекта в папку для продакшена
export const copy_admin = () => {
    return app.gulp.src(app.path.src.admin) 
    .pipe(app.gulp.dest(app.path.build.admin))
} 

// Создаю таск для копирования файлов admin при сборке проекта в папку для продакшена
export const copy_pagecomponent = () => {
    return app.gulp.src(app.path.src.pagecomponent) 
    .pipe(app.gulp.dest(app.path.build.pagecomponent))
} 
