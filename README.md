# # autowordpress

# auto install pour  debian 10  serveur LAMP Wordpress Firewall Fail2ban

  - avant de lancez l'installation 
  - avec l’user créez un dossier /www

```sh
$ mkdir www
```
- basculez en root.


```sh
$ su – 
```
 - Installez unzip 
 
 ```sh
$ apt install unzip  
```
 - télécharger le packet  
 
 ```sh
$ wget https://github.com/bynoix/autowordpress/archive/main.zip
```

- Modifier les fichiers de configuration.

 ```sh
$ chmod +x auto-install
```
- Et lancez le script 
 ```sh
$ ./auto-install
```
- Si vous rencontrez un souci de compatibilité installez dos2unix 
 ```sh
$ apt install dos2unix 
$ dos2unix auto-install
```
