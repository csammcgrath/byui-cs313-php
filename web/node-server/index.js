const http = require('http');
const url = require('url');

const PORT = 8888;

http.createServer((request, response) => {
    let userUrl = url.parse(request.url, true);

    if (userUrl.pathname === '/home') {
        response.writeHead(200, {'Content-Type': 'text/html'});

        response.write('<h1>Welcome to the Home Page!</h1>');
    } else if (userUrl.pathname === '/getData') {
        response.writeHead(200, {'Content-Type': 'application/json'});

        response.write(JSON.stringify({
            'name': 'Br. Burton',
            'class': 'CS313'
        }));
    } else {
        response.writeHead(404, {'Content-Type': 'text/html'});

        response.write('<h1>Page not found!</h1>');
    }

    response.end();
}).listen(PORT, () => {
    console.log(`Now listening on port ${PORT}`);
});
