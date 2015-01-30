from flask import Flask, render_template
app=Flask(__name__)

################ routes proativ cars
@app.route('/concessionaria')
def index():
	return render_template('/concessionaria/index.php')

@app.route('/concessionaria/cadastro')
def cadastro():
	return render_template('concessionaria/cadastro.php')

@app.route('/concessionaria/chevrolet')
def chevrolet():
	return render_template('concessionaria/chevrolet.php')

@app.route('/concessionaria/login')
def login():
	return render_template('concessionaria/login.php')

@app.route('/concessionaria/revisao')
def revisao():
	return render_template('concessionaria/revisao.php')
################ routes proativ cars
if __name__=='__main__':
	app.debug = True
	app.run()