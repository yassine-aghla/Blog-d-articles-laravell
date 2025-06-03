import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    
  server: {
    port: 5173,
    strictPort: true, // N'essayera pas d'autres ports
    hmr: {
      port: 5173 // Important pour le Hot Module Replacement
    }
  }
})
;
