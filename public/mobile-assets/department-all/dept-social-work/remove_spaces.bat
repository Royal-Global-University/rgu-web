
@echo off
setlocal enabledelayedexpansion

for %%f in (*.*) do (
    set "filename=%%f"
    set "newname=!filename: =-!"
    if not "!filename!"=="!newname!" (
        ren "%%f" "!newname!"
    )
)

echo Renaming complete.
pause
