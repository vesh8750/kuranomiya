import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';
import { resolve } from 'path';
import fs from 'fs';
import { homedir } from 'os';

const host = 'kuranomiya.test';
const keyPath = resolve(homedir(), `.config/valet/Certificates/${host}.key`);
const certPath = resolve(homedir(), `.config/valet/Certificates/${host}.crt`);

export default defineConfig({
  plugins: [
    tailwindcss(),
  ],

  build: {
    outDir: 'dist',
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: {
        main: resolve('./assets/js/main.js'),
      },
    },
  },

  server: {
    host,
    port: 3000,
    strictPort: true,
    cors: {
      origin: 'https://kuranomiya.test',
    },
    hmr: {
      host,
      port: 3000,
      protocol: 'wss',
    },
    https: {
      key: fs.readFileSync(keyPath),
      cert: fs.readFileSync(certPath),
    },
  },
});
