const express = require('express');
const app = express();
const host = '0.0.0.0';
const port = '80';

app.get('/', (req, res) => {
    res.send('Hello World');
});


app.listen(host, port);
console.log(`Running on http://${host}:${port}`);
