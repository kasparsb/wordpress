#!/bin/bash

wget http://wordpress.org/latest.tar.gz
tar -xvf latest.tar.gz

if [ "$1" = "--onlythemes" ]; then
    mv wordpress/wp-content/themes/* app/themes
else
    # delete existing wp core
    if [ -d "wp" ]; then
        find wp/. ! -name '.gitignore' -type f,d -exec rm -rf {} +
    else
        mkdir wp
    fi

    if [ "$1" = "--themes" ]; then
        mv wordpress/wp-content/themes/* app/themes
    fi

    mv wordpress/* wp    
fi

rm -rf wordpress
rm latest.tar.gz