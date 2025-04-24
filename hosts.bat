@echo off
>nul 2>&1 "%SystemRoot%\system32\cacls.exe" "%SystemRoot%\system32\config\system"
if '%errorlevel%' NEQ '0' (
    echo Administrator privileges required.
    echo Please run this batch file as Administrator.
    pause
    exit /b
)

set "hostsFile=%SystemRoot%\System32\drivers\etc\hosts"

REM Backup the hosts file
copy "%hostsFile%" "%hostsFile%.bak" >nul 2>&1

REM Add lines to the hosts file
(
echo.
echo.
echo 127.0.0.1 roblox.com
echo 127.0.0.1 www.roblox.com
echo 127.0.0.1 api.roblox.com
echo 127.0.0.1 versioncompatibility.api.roblox.com
echo 127.0.0.1 clientsettings.api.roblox.com
echo 127.0.0.1 assetgame.roblox.com
echo 127.0.0.1 wiki.roblox.com
echo 127.0.0.1 data.roblox.com
echo 127.0.0.1 www.gametest1.robloxlabs.com
echo 127.0.0.1 versioncompatibility.api.gametest1.robloxlabs.com
echo 127.0.0.1 clientsettings.api.gametest1.robloxlabs.com
echo 127.0.0.1 clientsettings.api.gametest2.robloxlabs.com
echo 127.0.0.1 data.gametest2.robloxlabs.com
echo 127.0.0.1 api.gametest1.robloxlabs.com
) >> "%hostsFile%"

echo Lines successfully added to the hosts file.
pause