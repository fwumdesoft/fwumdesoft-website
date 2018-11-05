#!/usr/bin/env bash

##########################################################
# This script symlinks an app's content to the appropriate
# directories for the flask server.
##########################################################

PROJECT_ROOT=$(pwd)
STATIC_PATH=${PROJECT_ROOT}/jsonet_website/static/apps
TEMPLATES_PATH=${PROJECT_ROOT}/jsonet_website/templates/apps

for app in $(ls ./apps/); do
    if [[ ! -L ${STATIC_PATH}/${app} ]]; then
        ln -s "${PROJECT_ROOT}/apps/${app}/static/${app}" "${STATIC_PATH}/${app}"
    fi
    if [[ ! -L ${TEMPLATES_PATH}/${app} ]]; then
        ln -s "${PROJECT_ROOT}/apps/${app}/templates/${app}" "${TEMPLATES_PATH}/${app}"
    fi
done
