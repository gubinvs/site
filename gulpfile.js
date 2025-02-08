// Подключаю основные модули
// Импортирую сам gulp 
import gulp from "gulp";

// Импортирую пути к файлам и директориям
import { path } from "./gulp/config/path.js";

// Импорт общих плагинов
import { plugins } from "./gulp/config/plugins.js";

// создаю глобальную переменную в которой буду хранить сущности
global.app = {
  isBuild: process.argv.includes('--build'),
  isDev: !process.argv.includes('--build'),
  path: path,
  gulp: gulp,
  plugins: plugins
}


// Import Tasks for gulp file
import { copy, copy_php, copy_page, copy_js, copy_fonts, copy_admin, copy_pagecomponent} from "./gulp/tasks/copy.js";
import { reset } from "./gulp/tasks/reset.js";
// import { html } from "./gulp/tasks/html.js";
import { server } from "./gulp/tasks/server.js";
import { phpServer } from "./gulp/tasks/phpServer.js";
import { scss } from "./gulp/tasks/scss.js";
// import { js } from "./gulp/tasks/js.js";
import { images } from "./gulp/tasks/images.js";
import { otfToTtf, ttfToWoff, fontsStyle } from "./gulp/tasks/fonts.js";        // преобразование шрифтов gulp.fonts

// Наблюдатель за файлами
function watcher() {
  gulp.watch(path.watch.scss, scss)
}



// Методы объеденены в одне переменную, которые выполняются параллельно
//const mainTasks = gulp.parallel(copy_fonts, copy, copy_php, copy_page, copy_js, copy_admin, copy_pagecomponent, scss, images);
// Методы объеденены в одне переменную, которые выполняются параллельно - это для PHP приложения
const mainTasks = gulp.parallel(scss);

// Методы запуска основных плагинов
const dev = gulp.series(reset, mainTasks, gulp.parallel(watcher, server, phpServer));

// метод переключения режимов разработка\продакшен
const build = gulp.series(reset, mainTasks);

export { dev }
export { build }



// метод для запуска плагина преобразования шрифтов
const fonts = gulp.series(otfToTtf, ttfToWoff, fontsStyle); // пока не работает
// Создание сценария для выполнения по умолчанию
gulp.task('default', dev);

// Команда для запуска в режиме разработчика: npm run dev
// Команда для запуска в режиме продакшена: npm run build
// Остановить сервер control C