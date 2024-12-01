import vuePlugin from 'eslint-plugin-vue';
import parser from 'vue-eslint-parser';

export default [
    {
        files: ['**/*.vue'],
        languageOptions: {
            parser,
            ecmaVersion: 2021,
            sourceType: 'module',
        },
        plugins: {
            vue: vuePlugin,
        },
        rules: {
            ...vuePlugin.configs['vue3-recommended'].rules,
        },
    },
    {
        files: ['**/*.js'],
        languageOptions: {
            ecmaVersion: 2021,
            sourceType: 'module',
        },
    },
];
