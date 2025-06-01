![My *handmade* Rocknet Logo](https://github.com/user-attachments/assets/23507564-cbfe-4c5c-8360-fefa9a780fe5)

<p align="center">
<img alt="GitHub Repo Size" src="https://img.shields.io/github/repo-size/P0L3NARUBA/Rocknet">
</p>

# Rocknet
*Name was inspired by RakNet*

**Having any problems? you can get help at [our discord server](https://www.discord.gg/rVrYHdrbsp)**<br>

# Table of Contents
1. [💻 Setting up the Server](#-setting-up-the-server)
2. [❤️ Contributors](#%EF%B8%8F-contributors)
3. [🎯 Current Goals](#-current-goals)
4. [⚠️ Current Issues](#%EF%B8%8F-current-issues)

---

# 💻 Setting up the Server
1. Install **[XAMPP](https://www.apachefriends.org/index.html)** to host the server locally
   - Just download Apache and MySQL, other ones are unnecessary.
2. Open a Command Prompt and clone the repository with **[Git](https://git-scm.com/)** with these commands:
```
cd <your xampp path> && git clone https://github.com/P0L3NARUBA/Rocknet && ren htdocs htdocsdefault && ren Rocknet htdocs 
```
3. Open **XAMPP** and Start **Apache** and **MySQL**
4. Enter the hosts file by doing: `"C:\Windows\System32\Drivers\etc\hosts"`
5. Add these lines:
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
127.0.0.1 assetgame.gametest2.robloxlabs.com
```
6. Save the file and close the notepad
7. Now head over to this address from your browser: "http://localhost/phpmyadmin"
8. Create a new database named **rocknetdb**
9. Go inside that database and Press **Import** at the top
10. Press **Choose File** and select **rockdb.sql** and Press **Import** button at the bottom

**IMPORTANT:** Move Original **join.ashx** to any other folder and Rename **joincl.ashx** to **join.ashx** If you're gonna play with Client. (this is temporary though, will change after we found a proper way.)

---

## 🔨 Tools Used
- [rbxsigner](/Tools/rbxsigner) = *unknown*

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

**Want to be in the list and help us?**<br>
Be a contributor by doing a helpful of changes/commits to the repository!

---

## 🎯 Current Goals
- Creating a Frontend

## ⚠️ Current Issues

- Jump Animation is behaving weird
- Emulating Devices works but the thumbstick is unusable
   - **This both two issues are related the FFlags so we need to find the corresponding FFlag's to fix them!**
