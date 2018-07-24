from flask import Flask

app = Flask(__name__)


@app.route('/')
def hello_world():
    return "Hello, World!"


@app.route('/test')
def test_page():
    return "Testing..."


@app.route('/var/<name>')
def name_page(name):
    return "Hello, {}!".format(name)
