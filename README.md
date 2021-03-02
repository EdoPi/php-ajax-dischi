# PHP DISCHI



**Tecnologie da utilizzata**

- PHP
- JS
- SASS
- VUEJS (facoltativo) + AXIOS  
- json_encode
- require_once

progetto creato con l'utilizzo di MAMP



## Installazioni eseguite
- laravel mix
```  
npm init -y
npm install laravel-mix --save-dev
npx mix watch
```



## Traccia esercizio:

Stampare a schermo una decina di dischi musicali (vedi screenshot) in due modi diversi:

**1^ MILESTONE**: Solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.

**2^ MILESTONE** Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php e li stamperà.


index.php => prima milestone\
index.html => seconda milestone


**Opzionale**:
Attraverso un’altra chiamata ajax, filtrare gli album per genere.
indizio: $_GET