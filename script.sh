#!/bin/bash
c=1
while [ $c -le 60 ]
do
 wget -O - https://oemcristian.wixsite.com/gburnbook >/dev/null 2>&1
 sleep 1
 (( c++ ))
done
