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

Example php Input generation
Views are based on Twitter Bootstrap 3 HTML templates (default theme)
```
<?php
use Novembre\Input\Inputfactory;

echo $input = Inputfactory::load('text', 'nom')
    ->value("value")
    ->label("Nom")
    ->placeholder("par ex: Dupondt")
    ->required()
    ->html();

echo $input = Inputfactory::load('email', 'monEmail')
    ->label("Email :")
    ->placeholder("placeholder ici")
    ->required()
    ->html();

echo $input = Inputfactory::load('textarea', 'monArea')
    ->label("Message :")
    ->value("Yeah")
    ->html();

echo $checkbox = Inputfactory::load('checkbox', 'maCheckbox')
    ->label("Cliquez ici")
    ->html();

echo $radio = Inputfactory::load('radio', 'maCheckbox')
    ->options(array("Value 1" => "Label 1", "Value 2 " => "Label 2"))
    ->checked(2)
    ->html();

echo $select = Inputfactory::load('select', 'monSelect')
    ->label("Options")
    ->options(array("Value 1" => "Label 1", "Value 2 " => "Label 2"))
    ->selected(2)
    ->help("Complément d'information")
    ->html();

echo $input = Inputfactory::load('file', 'monFile')
    // ->template('plupload')
    ->label("Fichier :")
    ->help("Image uniquement")
    ->multiple()
    // ->required()
    ->html();
?>
