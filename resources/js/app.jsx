import './bootstrap';
import React from 'react';
import { createRoot } from 'react-dom/client';

// Impor komponen dari file masing-masing
import LanyardCard from './Components/LanyardCard'; 
import LiquidEther from './components/LiquidEther';
import ProjectsSlider from './components/ProjectsSlider';
import SkillsSlider from './components/SkillsSlider';

// --- Logika Rendering Komponen Dinamis ---

// 1. Daftar semua komponen yang bisa dirender secara dinamis
const componentRegistry = {
    LanyardCard,
    LiquidEther,
    ProjectsSlider,
    SkillsSlider,
};

/**
 * Merender komponen React ke dalam elemen DOM target.
 * @param {string} componentName - Nama komponen (harus ada di componentRegistry).
 * @param {string} targetId - ID elemen DOM tempat komponen akan dirender.
 * @param {object} props - Props yang akan diteruskan ke komponen.
 */
window.renderReactComponent = (componentName, targetId, props = {}) => {
    console.log(`Attempting to render component: ${componentName} into #${targetId}`);
    const Component = componentRegistry[componentName];
    const container = document.getElementById(targetId);

    if (Component && container) {
        const root = createRoot(container);
        root.render(
            <React.StrictMode>
                <Component {...props} />
            </React.StrictMode>
        );
        console.log(`Komponen '${componentName}' berhasil dipasang pada #${targetId}`);
    } else {
        if (!Component) {
            console.error(`Error: Komponen '${componentName}' tidak ditemukan di registry.`);
        }
        if (!container) {
            console.error(`Error: Target container dengan ID '${targetId}' tidak ditemukan.`);
        }
    }
};

// --- Logika Rendering Awal (jika diperlukan) ---

// Contoh: Tetap merender LanyardCard pada container spesifik saat load
// Ini bisa dihapus jika semua rendering akan dipanggil dari file Blade
document.addEventListener('DOMContentLoaded', () => {
    const lanyardContainer = document.getElementById('lanyard-card-container');
    if (lanyardContainer) {
        window.renderReactComponent('LanyardCard', 'lanyard-card-container');
    }

    const projectsSliderContainer = document.getElementById('projects-slider-root');
    if (projectsSliderContainer) {
        window.renderReactComponent('ProjectsSlider', 'projects-slider-root');
    }
});
