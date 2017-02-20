# composer-input
Build HTML inputs for Wordpress ExPress Theme.
```
#add this lines on composer.json file
"require": {
    "novembre/input": "dev-master"
},
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/gitnovembre/composer-input",
        "options": {
            "ssh2": {
                "username": "youremail@novembre.com",
                "pubkey_file": "~/.ssh/id_rsa.pub",
                "privkey_file": "~/.ssh/id_rsa"
            }
        }
    }
],
"minimum-stability": "dev"

```

