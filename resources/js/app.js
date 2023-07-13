import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Swiper from 'swiper/swiper-bundle.min.js';

document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.swiper-container', {
        // Konfigurasi Swiper
    });
});