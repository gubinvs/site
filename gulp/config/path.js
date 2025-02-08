//-- Импортируем модуль определения текущей папки проекта
import * as nodePath from 'path';
const rootFolder = nodePath.basename(nodePath.resolve()); 

//const buildFolder = `./Compiled`;
const buildFolder = `./src/css`;
const srcFolder = `./src`;


//-- Массив с данными о путях
export const path = {
    build: {   // путь куда следует переносить:
        page: `${buildFolder}/`,              // файлы php
        php: `${buildFolder}/php/`,           // классы и структуры, обработчики
        // css: `${buildFolder}/css/`,          // файл стилей style.css
        css: `${srcFolder}/css/`,          // файл стилей style.css
        js: `${buildFolder}/js/`,            // файлы js
        images: `${buildFolder}/img/`,       // файлы img
        files: `${buildFolder}/files/`,      // остальные файлы
        fonts: `${buildFolder}/fonts/`,       // файлы шрифтов
        admin: `${buildFolder}/admin/`,      // файлы admin
        pagecomponent: `${buildFolder}/page-component/`       // файлы страниц комплектующих (товаров)
        
    },
    src: {   // какие файлы следует переносить при сборке проекта и куда
        page: `${srcFolder}/*.php`,             // для работы без препроцессора pug
        php: `${srcFolder}/php/**/*.php`,
        scss: `${srcFolder}/scss/*.css`,
        js: `${srcFolder}/js/**/*.js`,
        images: `${srcFolder}/img/**/*.{jpg,jpeg,png,gif,webp}`,
        svg: `${srcFolder}/img/**/*.svg`,
        files: `${srcFolder}/files/**/*.*`,
        fonts: `${srcFolder}/fonts/**/*.*`,
        admin: `${srcFolder}/admin/**/*.*`,
        pagecomponent: `${srcFolder}/page-component/**/*.*` 
    },
    watch: {  // изменение каких файлов следует отслеживать
        page: `${srcFolder}/**/*.*`,
        php: `${srcFolder}/php/**/*.php`, 
        scss: `${srcFolder}/scss/*.scss`,
        js: `${srcFolder}/js/**/*.js`,
        images: `${srcFolder}/img/**/*.{jpg,jpeg,png,gif,webp,svg,ico}`,
        files: `${srcFolder}/files/**/*.*`,
        admin: `${srcFolder}/admin/**/*.*`,
        pagecomponent: `${srcFolder}/page-component/**/*.*`
    },
    
    clean: buildFolder,                             // какую папку следует удалять
    buildFolder: buildFolder,                       // переменная с путем к папке для переноса файлов
    srcFolder: srcFolder,                           // переменная с путем для отслеживания изменяемых файлов
    rootFolder: rootFolder,                         // переменная с путем основной папки проекта
}