#!/usr/bin/env bash

##########################################################
# This script symlinks an app's content to the appropriate
# directories for the flask server.
##########################################################

PROJECT_ROOT=$(pwd)
STATIC_PATH="${PROJECT_ROOT}/jsonet_website/static/apps"
TEMPLATES_PATH="${PROJECT_ROOT}/jsonet_website/templates/apps"

for app in $(ls ./apps); do
    cd "${STATIC_PATH}/"
    ln -sf "${PROJECT_ROOT}/apps/${app}/static/${app}"
    cd "${TEMPLATES_PATH}"
    ln -sf "${PROJECT_ROOT}/apps/${app}/templates/${app}"
done
