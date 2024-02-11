#! /bin/bash

# TODO: use exec.js with gulp.config.json values, calculate cut-dirs, add security for parameters
# path to localhost directory
SOURCE="http://localhost/kittyfish/grav-skeleton-oxygen"
readonly SOURCE

# path to destination dir
TARGET="${PWD}/.wget"
readonly TARGET

# delete destination dir and subdirectories
rm ${TARGET} -r

# make destination dir if it not exists
mkdir ${TARGET} -p

# download site
wget -m -nH -np -q --cut-dirs=2 -k -E --restrict-file-names=unix,nocontrol robots=off ${SOURCE} -P ${TARGET}

# rename files: remove ? query string from actual filenames
find ${TARGET} -type f -name "*\?*" -print0 |
while IFS= read -r -d '' file;
  do 
   mv -f "$file" "`echo $file | cut -d? -f1`";
done

# edit html: search string %3Ffp and replace it with ?fp
find ${TARGET} -type f -name "*.html" -exec sed -i -s -r 's/%3Ffp/?fp/g' {} +

echo "Created: ${TARGET}"