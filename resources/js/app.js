import './bootstrap';

//  imports all fonts from the fonts folder
import.meta.glob([

    '../fonts/**',

]);
import Alpine from 'alpinejs'
import intersect from '@alpinejs/intersect'

Alpine.plugin(intersect)
Alpine.start()


