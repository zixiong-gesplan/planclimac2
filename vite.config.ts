import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        // laravel({
        //     input: ['resources/css/app.css', 'resources/js/app.js'],
        //     refresh:['resources/views/**']
        // })
    ],
    build:{
        manifest: "",
        sourcemap: false,
        outDir: "public/build",
        emptyOutDir: true,
        cssCodeSplit:true,
        lib:{
            name: "app",
            entry: "resources/js/app.js",
            formats: ["es"],
            fileName: "app"
        },
        rollupOptions:{
            
            output:{
                assetFileNames: "assets/app.[ext]"
            }
        }
    }
});
