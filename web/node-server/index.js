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
    } else if (userUrl.pathname === '/retrieveBasicSum') {
        response.writeHead(200, {'Content-Type': 'application/json'});

        response.write(JSON.stringify({
            'firstValue': 2,
            'secondValue': 2,
            'total': 2 + 2
        }));
    } else if (userUrl.pathname === '/sumValues') {
        let numbers = userUrl.query;

        if (Object.keys(numbers).length === 0) {
            response.writeHead(404, { 'Content-Type': 'text/html' });

            response.write('<h1>Page not found!</h1>');
        } else {
            let sum = Object.values(numbers)[0].reduce((total, number) => total += parseInt(number), 0);

            response.writeHead(200, {'Content-Type': 'application/json'});

            response.write(JSON.stringify({
                'Total': sum
            }));
        }
    } else {
        response.writeHead(404, {'Content-Type': 'text/html'});

        response.write('<h1>Page not found!</h1>');
    }

    response.end();
}).listen(PORT, () => {
    console.log(`Now listening on port ${PORT}`);
});
