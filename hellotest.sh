#!/bin/bash
dest=/home/forge/versionstorage.conradotest.xyz
folder=${PWD##*/}
time=$(date +%d-%m-%y-%H%M)
zipfile=$dest/$folder-$time.zip
echo $zipfile
zip -r $zipfile ./*
git init
git checkout master
git add .
git commit -m "$time"
git push origin master
