var http           = require('http'),
    express        = require('express'),
	colors         = require('colors'),
    app            = express(),
	config         = require(__dirname + '/config.json'),
	app_title      = config.app.name,
	port           = config.app.port;
	
//
// Setup Express
//
app.set('views', __dirname + '/ui');
app.set('view engine', 'html');
app.engine('html', require('hbs').__express);

//
// Setup Routes
//
app.get('/', function(req,res) {
	res.render('index.html', {
	 	app_title : app_title
	});
});

app.get('/resume', function(req,res) {
	res.render('resume.html', {
	 	app_title : app_title
	});
});

app.get('/EricGelinas-WebInterfaceEngineer.php', function(req,res) {
	res.redirect(301, '/redirect');
});

app.get('/portfolio', function(req,res) {
	res.render('portfolio.html', {
	 	app_title : app_title
	});
});

app.use('/js', express.static(__dirname + '/ui/js'));
app.use('/style', express.static(__dirname + '/ui/style'));

//
// Go Go Go
//
app.listen = function(port){
  var server = http.createServer(this);
  console.log('\033[2J');
  console.log(('On ' + new Date()));
  console.log('\r\nthe '+ app_title.underline.blue +' example was started on port ' + port.toString().underline.blue);
  console.log('\r\nTo stop press Ctrl+C');
  return server.listen.apply(server, arguments);
};

app.listen(port);