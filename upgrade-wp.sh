#!/bin/bash
wget http://wordpress.org/latest.tar.gz
tar -xvf latest.tar.gz
mv wordpress/* wp
rmdir wordpress
rm latest.tar.gz