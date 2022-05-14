import * as nodePath from "path";
const rootFolder = nodePath.basename(nodePath.resolve());

const buildFolder = "./build";
const srcFolder = "./src";

export const path = {
  build: {
    js: `${buildFolder}/js/`,
    css: `${buildFolder}/css/`,
    img: `${buildFolder}/img/`,
    svg: `${buildFolder}/svg/`,
    fonts: `${buildFolder}/fonts/`,
  },
  src: {
    js: `${srcFolder}/js/index.js`,
    scss: `${srcFolder}/scss/index.scss`,
    img: `${srcFolder}/img/*.{jpg,jpeg,png,gif,webp}`,
    svg: `${srcFolder}/svg/*.svg`,
  },
  watch: {
    js: `${srcFolder}/js/**/*.js`,
    scss: `${srcFolder}/scss/**/*.scss`,
    img: `${srcFolder}/img/*.{jpg,jpeg,png,gif,webp,ico}`,
    svg: `${srcFolder}/svg/*.{svg}`,
  },
  clean: buildFolder,
  buildFolder: buildFolder,
  srcFolder: srcFolder,
  rootFolder: rootFolder,
};
