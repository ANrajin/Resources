# Windows CMD commands

1. Navigate into a directory in another drive

cd /d E:\DirectoryName

2. Get the list of folders inside a directory

dir \o:gn
dir \b

3. Get all files form folder inside a directory

dir \s \b \o:gn

-   /S Displays files in specified directory and all subdirectories.
-   /B Uses bare format (no heading information or summary).
-   /O List by files in sorted order.
-   Then in :gn, g sorts by folders and then files, and n puts those files in alphabetical order.
