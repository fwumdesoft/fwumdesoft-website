from flask import Blueprint, render_template

bp = Blueprint('apps', __name__, url_prefix='/apps')


@bp.route('/hexsweeper')
def hexsweeper():
    return render_template('apps/hexsweeper/hexsweeper.html')
