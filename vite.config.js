import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'
import { resolve } from 'path'

export default defineConfig({
  plugins: [tailwindcss()],

  build: {
    rollupOptions: {
      input: {
        index: resolve(__dirname, 'index.html'),
        page1: resolve(__dirname, 'page-1.html'),
        page2: resolve(__dirname, 'page-2.html'),
        page2Detail: resolve(__dirname, 'page-2-detail.html'),
        page3: resolve(__dirname, 'page-3.html'),
        page3Detail: resolve(__dirname, 'page-3-detail.html'),
        page4: resolve(__dirname, 'page-4.html'),
        page5: resolve(__dirname, 'page-5.html'),
        page6: resolve(__dirname, 'page-6.html'),
      }
    }
  }
})