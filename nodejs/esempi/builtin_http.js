const http=require('http')

const server = http.createServer(function (req, res) {
    if (req.url == '/') {
        res.end('Benvenuto nella mia Home Page, sus')
    }
});
server.listen(3000);