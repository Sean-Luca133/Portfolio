import './bootstrap';

//  imports all fonts from the fonts folder
import.meta.glob([

    '../fonts/**',

]);
import Alpine from 'alpinejs'
import intersect from '@alpinejs/intersect'
import * as pdfjs from 'pdfjs-dist'

// pdf embed library  -> uses web worker for parsing in the background, obtained via CDN.
pdfjs.GlobalWorkerOptions.workerSrc = `https://cdn.jsdelivr.net/npm/pdfjs-dist@${pdfjs.version}/build/pdf.worker.min.mjs`
// make global
window.pdfjs = pdfjs

Alpine.plugin(intersect)
Alpine.start()
