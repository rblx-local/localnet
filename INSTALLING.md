# Cookbook for the Rocknet
1. Install **[XAMPP](https://www.apachefriends.org/index.html)** to host the server locally
   - Just download Apache and MySQL, other ones are unnecessary.
2. Open a Command Prompt and clone the repository with **[Git](https://git-scm.com/)** with these commands:
```
cd <your xampp path> && git clone https://github.com/P0L3NARUBA/Rocknet && ren htdocs htdocs-alt && ren Rocknet htdocs 
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
127.0.0.1 setup.roblox.com
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

**P.S:** *version-rocknet* can be *version-md5hash* too so you can add more security.