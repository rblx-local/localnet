# Rocknet

A Server-side Implementation for Roblox 2016 Source Code<br>

**Having any problems? you can get help at [our discord server](https://www.discord.gg/rVrYHdrbsp)**<br>

# Table of Contents
1. [Setting up the Server](#-setting-up-the-server)
2. [Contributors](#%EF%B8%8F-contributors)
3. [Current Goals](#-current-goals)
4. [Current Issues](#%EF%B8%8F-current-issues)

---

# 💻 Setting up the Server
1. Install **[XAMPP](https://www.apachefriends.org/index.html)** to host the server locally
   - Just download Apache and MySQL, other ones are unnecessary.
2. Download the repository
3. Open **XAMPP** and Start **Apache** and **MySQL**
4. Press **Explorer** and head over to **htdocs** folder
5. Extract the **Rocknet** folders to that place
6. Enter the hosts file by doing: `"C:\Windows\System32\Drivers\etc\hosts"`
7. Add these lines:
```
127.0.0.1 roblox.com 
127.0.0.1 www.roblox.com 
127.0.0.1 api.roblox.com
127.0.0.1 versioncompatibility.api.roblox.com
127.0.0.1 clientsettings.api.roblox.com
127.0.0.1 assetgame.roblox.com
127.0.0.1 wiki.roblox.com
127.0.0.1 data.roblox.com
127.0.0.1 www.gametest1.robloxlabs.com
127.0.0.1 versioncompatibility.api.gametest1.robloxlabs.com
127.0.0.1 clientsettings.api.gametest1.robloxlabs.com
127.0.0.1 clientsettings.api.gametest2.robloxlabs.com
127.0.0.1 data.gametest2.robloxlabs.com
127.0.0.1 api.gametest1.robloxlabs.com
```
8. Save the file and close it
9. Now head over to this address from your browser: "http://localhost/phpmyadmin"
10. Create a new database named **rocknetdb**
11. Go inside that database and Press **Import** at the top
12. Press **Choose File** and select **rockdb.sql** and Press **Import** button at the bottom
13. Have fun!

### Other
To run **RCCService**, do the following steps:
1. Go into Trunk2016\RCCSeevice and Open a Command Prompt
2. Type these in:
```
RCCService.exe -Content:../../../content -Console -verbose -placeid:1818 -port 64989
```

4. Done!

To open the **WindowsClient**, watch these steps:
1. Copy RobloxPlayerBeta.exe MD5 Hash by doing Right Click > 7-Zip > CRC SHA > MD5 and put that into **GetAllowedMD5Hashes/index.php**
2. Go to Trunk2016\WindowsClient
3. Open a Command Prompt and type these in:
```
RobloxPlayerBeta.exe --joinScriptUrl "http://roblox.com/Game/join.ashx?token=494857454146494148494a494a464941574a4649574a464a4941414146415746&id=-1" --authenticationUrl "http://roblox.com/Login/Negotiate.ashx" --authenticationTicket "494857454146494148494a494a464941574a4649574a464a4941414146415746"
```
4. Done!

---

## ❤️ Contributors
[@xspyy](https://github.com/xspyy)
* Asset Proxy **(index_online_old.php)**
* Character and BodyColors Fetching
* Toolbox Page and System
* Database
* Avatar Thumbnail

[@bpr1ch3](https://github.com/bpr1ch3)
* New Files and FFlags

[@eprominecraft](https://github.com/eprominecraft)
* Client

Be a contributor by doing a helpful of changes to the Rocknet!

---

## 🎯 Current Goals
- Fix the Client and make it work properly.
- Make a Frontend (HARD)
- Add all the features (HARD)

## ⚠️ Current Issues

- Jump Animation is behaving weird
- Emulating Devices works but the thumbstick is unusable
   - **This issues are related the FFlags so we need to find the corresponding fflags to fix them!**
