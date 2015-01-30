from flask import Flask, render_template
app=Flask(__name__)

################ routes proativ cars
@app.route('/')
def index():
	return render_template('/index.php')

@app.route('/cadastro')
def cadastro():
	return render_template('/cadastro.php')

@app.route('/chevrolet')
def chevrolet():
	return render_template('/chevrolet.php')

@app.route('/login')
def login():
	return render_template('/login.php')

@app.route('/revisao')
def revisao():
	return render_template('/revisao.php')
################ routes proativ cars
if __name__=='__main__':
	app.debug = True
	app.run()