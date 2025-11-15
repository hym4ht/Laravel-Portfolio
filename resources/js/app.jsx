import './bootstrap';
import React from 'react';
import { createRoot } from 'react-dom/client';
// Pastikan path ini benar menuju file LanyardCard.jsx yang Anda buat
import LanyardCard from './Components/LanyardCard'; 

// 1. Temukan elemen container
const container = document.getElementById('lanyard-card-container');

// 2. Lakukan mounting hanya jika container ditemukan
if (container) {
    const root = createRoot(container);
    
    // 3. Render komponen LanyardCard
    root.render(
        <React.StrictMode>
            <LanyardCard />
        </React.StrictMode>
    );
    
    console.log('Lanyard Card komponen berhasil dipasang!');
}
// ... kode inisialisasi React/Inertia lainnya di app.js (jika ada) ...