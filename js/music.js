// 引入模块
var fs = require('fs');
var ejs = require('ejs');
var mysql = require('mysql');
var express = require('express');
var bodyParser = require('body-parser');

// 连接MySQL数据库
var client = mysql.createConnection({
    host: 'localhost',
    port:"3306",
    user: 'root',
    password: '',
    database: 'music'
});
// 判断数据库是否连接成功
client.connect(function(err){
    if(err){
        console.log('[query] - :'+err);
        return;
    }
    console.log('[connection connect]  Mysql数据库连接成功!');
});

// 创建服务器
var app = express();
app.use(bodyParser.urlencoded({
    extended: false
}));
// 启动服务器
app.listen(8080, function () {
    console.log('服务器运行在 http://127.0.0.1:8080');
});

// 显示图书列表
app.get('/', function (request, response) {
    // 读取模板文件
    fs.readFile('try.html', 'utf8', function (error, html) {
		fs.readFile('css/style.css', 'utf8', function (error, css) {
        // 执行SQL语句
        client.query('SELECT * FROM songs', function (error, results) {
            // 响应信息
            response.send(ejs.render(html, {
                data: results
            }));
        });
    });
	});
});