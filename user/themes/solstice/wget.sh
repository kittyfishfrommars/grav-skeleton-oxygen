#! /bin/bash

# path to localhost directory
SOURCE="http://localhost/s-be/grav-dev/"
readonly SOURCE

# path to output directory
TARGET="${PWD}/static"
readonly TARGET

# clean target directory
rm ${TARGET}/* -r

# download site
wget -m -r -nH -np -q --cut-dirs=2 -lnf -k -E -e robots=off ${SOURCE} -P ${TARGET}

# remove query string from a static resource.
cd ${TARGET}
find . -type f -name "*\?*" -print0 | 
while IFS= read -r -d '' file; 
  do 
    mv -f "$file" "`echo $file | cut -d? -f1`"; 
done

echo "WGET saved to: ${TARGET}"