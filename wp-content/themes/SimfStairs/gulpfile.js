import gulp from "gulp";

import { path } from "./gulp/config/path.js";
import { img } from "./gulp/tasks/img.js";
import { svg } from "./gulp/tasks/svg.js";
import { reset } from "./gulp/tasks/reset.js";
import { scss } from "./gulp/tasks/scss.js";
import { js } from "./gulp/tasks/js.js";

import { plugins } from "./gulp/config/plugins.js";
import { fontsStyle, otfToTtf, ttfToWoff } from "./gulp/tasks/fonts.js";

global.app = {
    path: path,
    gulp: gulp,
    plugins: plugins,
}

function watcher() {
    gulp.watch(path.watch.img, img)
    gulp.watch(path.watch.svg, svg)
    gulp.watch(path.watch.scss, scss)
    gulp.watch(path.watch.js, js)
}

const fonts =  gulp.series(otfToTtf, ttfToWoff, fontsStyle)

const mainTask =  gulp.series(fonts, gulp.parallel(img, svg, scss, js))

const tasks = gulp.series(reset, mainTask, watcher)

gulp.task('default', tasks);