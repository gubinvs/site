import php from "gulp-connect-php";  

export const phpServer = () => {
    php.server(
        {
            base: `${app.path.srcFolder}`, 
            port: 8888, 
            keepalive: true
        } 
    ); 
} 