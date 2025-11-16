import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            // Memastikan input adalah app.jsx, yang sudah benar
            input: ['resources/css/app.css', 'resources/js/app.jsx'],
            refresh: true,
        }),
        // Tempatkan plugin React di awal (sebelum Tailwind CSS)
        react(),
        tailwindcss(),
    ],
      build: {
    chunkSizeWarningLimit: 21500, // Atur batas peringatan menjadi 1000 kB
  },
 
});