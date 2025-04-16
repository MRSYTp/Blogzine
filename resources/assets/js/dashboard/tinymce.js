document.addEventListener("DOMContentLoaded", () => {
    tinymce.init({
        selector: '#newsBody',
        directionality: 'rtl',
        menubar: false,
        plugins: 'anchor autolink charmap codesample emoticons image link media searchreplace table visualblocks wordcount lists',
        toolbar: 'bullist numlist bold italic | styles select  fontsize | formatselect | alignleft aligncenter alignright alignjustify | outdent indent | link image',
// Add any other options you need
        formats: {
            h1: {block: 'h1'},
            h2: {block: 'h2'},
            h3: {block: 'h3'},
            h4: {block: 'h4'},
            h5: {block: 'h5'},
            h6: {block: 'h6'},
            p: {block: 'p'}
        },
        style_formats: [
            {title: 'Heading 1', format: 'h1'},
            {title: 'Heading 2', format: 'h2'},
            {title: 'Heading 3', format: 'h3'},
            {title: 'Heading 4', format: 'h4'},
            {title: 'Heading 5', format: 'h5'},
            {title: 'Heading 6', format: 'h6'},
            {title: 'Paragraph', format: 'p'}
        ]
    });
});
