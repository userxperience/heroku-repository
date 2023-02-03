const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
