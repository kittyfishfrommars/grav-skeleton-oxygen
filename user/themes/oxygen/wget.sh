#! /bin/bash

# TODO: use exec.js with gulp.config.json values, calculate cut-dirs, add security for parameters

# path to localhost directory
SOURCE="http://localhost/s-be/grav-dev/"
readonly SOURCE

# path to destination directory
TARGET="${PWD}/.wget"
readonly TARGET

# clean destination directory
rm ${TARGET}/* -r

# download site
wget -m -r -nH -np -q --cut-dirs=2 -lnf -k -E -e robots=off ${SOURCE} -P ${TARGET}

# remove query string from static resource.
cd ${TARGET}
find . -type f -name "*\?*" -print0 | 
while IFS= read -r -d '' file; 
  do 
    mv -f "$file" "`echo $file | cut -d? -f1`"; 
done

echo "wget output directory: ${TARGET}"