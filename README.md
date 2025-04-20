# Rocknet

A Server-side Implementation for Roblox 2016 Source Code<br>Currently it only has a *partial* backend, but we planning to make a frontend too!<br>
**IMPORTANT:** Its in Alpha Stage, so do not want much from it, its just a basic server for make the game work.

**Having any problems? you can get help at [our discord server](https://www.discord.gg/rVrYHdrbsp)**<br>

# Table of Contents
1. [Setting up the Server](#-setting-up-the-server)
2. [Current Goals](#-current-goals)
3. [Current Issues](#%EF%B8%8F-current-issues)
4. [Contributors](#%EF%B8%8F-contributors)

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
```
8. Save the file and close it
9. Now head over to this address from your browser: "http://localhost/phpmyadmin"
10. Create a new database named **rocknetdb**
11. Go inside that database and Press **Import** at the top
12. Press **Choose File** and select **rockdb.sql** and Press **Import** button at the bottom
13. Have fun!

## 🎯 Current Goals
- Improving this project more is my main goal, you can help me to do it!

## ⚠️ Current Issues

- Jump Animation is behaving weird
- Emulating Devices works but the thumbstick is unusable

**This issues are related the FFlags so we need to find the corresponding fflags to fix them!**

---

## ❤️ Contributors
[@xspyy](https://github.com/xspyy)
* Asset Proxy **(index_online_old.php)** and Trustcheck Fixes!
* Character and BodyColors Fetching
   * Also he gave his database, what a kind of him :)
* Avatar Renderer


[@bpr1ch3](https://github.com/bpr1ch3)
* New Files and FFlags

Be a contributor by doing a helpful of changes to the Rocknet!
