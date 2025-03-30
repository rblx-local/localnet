![Rocknet Logo](https://github.com/user-attachments/assets/04d7a167-a35b-474f-b86b-4d81ec6b3ac4)

<h1 align="center"> Rocknet for Studio </h1>

<p align="center"> A Server-side Implementation for Roblox 2016 Source Code  </p>

<h2 align="center"> Setting the Server Up </h2>

**IMPORTANT:** Its in Alpha Stage, so do not want much from it, its just a basic server for make the game work.

1. Install **[XAMPP](https://www.apachefriends.org/index.html)** and **[HxD](https://mh-nexus.de/en/downloads.php?product=HxD20)** to host the server locally
2. Download the repository
3. Start **HxD** and drag **RobloxStudioBeta.exe** to the window
4. Click **Search -> Replace** at the top and change every string that starts with **roblox.com** with **10char.com**, there should be 26 changed strings
5. Enter your hosts file(should be somewhere in: **System32\Drivers\Etc**) and add these lines:
```
127.0.0.1 10char.com
127.0.0.1 assetgame.10char.com
127.0.0.1 api.10char.com
```
6. Save and Close the file
7. Open **XAMPP** and Start **Apache** and **mySQL**
8. Press **Explorer** and head over to **htdocs** folder
9. Extract the **Rocknet** folders to that place

- Launch the Studio and have fun.
