import { defineConfig } from "vite"

export default defineConfig({
    build: {
      
      manifest: true,
      rollupOptions: {
        input: './ressources/script/main.js'
      }
    }
  })