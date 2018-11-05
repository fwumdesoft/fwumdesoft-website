from flask import Flask, render_template, url_for, current_app


# Flask automatically detects this function as the application factory function
def create_app(config_file=None):
    app = Flask(__name__)
    if config_file:
        app.config.from_pyfile(config_file)

    @app.route('/')
    def index():
        return render_template('index.html')

    return app
