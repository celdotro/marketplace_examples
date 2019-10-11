# CEL.ro: marketplace_examples
**[[RO](https://github.com/celdotro/marketplace_examples#ro)]** Exemple pentru folosirea API wrapper-ului [marketplaceului](https://github.com/celdotro/marketplace)  
**[[EN](https://github.com/celdotro/marketplace_examples#en)]** Examples for [marketplace's](https://github.com/celdotro/marketplace) API wrapper usage
___
## [RO]

### Despre
Acest proiect contine exemple ce pot fi folosite pentru intelegerea mai buna a [API Wrapper-ului pentru CEL.ro Marketplace](https://github.com/celdotro/marketplace).  
Pentru instructiunile generale legate de utilizarea wrapper-ului, va trebui sa consultati [documentatia](https://github.com/celdotro/marketplace/wiki/Prima-pagina):

* Instalare (WIKI): [https://github.com/celdotro/marketplace/wiki/Instalare#instalare-1](https://github.com/celdotro/marketplace/wiki/Instalare#instalare-1)
* Folosire (WIKI): [https://github.com/celdotro/marketplace/wiki/Instalare#folosire](https://github.com/celdotro/marketplace/wiki/Instalare#folosire)

### Setari principale
Rulati urmatoarea comanda in directorul principal  
```shell
composer install
``` 

### Structura fisierelor si directoarelor
1. Fisierul "api_include.php" aflat la baza structurii include fisierul index al API-ului. De asemenea, contine o sectiune de comentarii in care sunt reluate problemele discutate in "Setari principale". iii. Acesta contine namespaceul si numele clasei de autentificare, precum si metoda statica ce trebuie folosita inainte de apelarea oricarei alte metode din API. Pentru a rula oricare dintre script-uri, va trebui sa inlocuiti numele de utilizator si parola cu cele aferente contului dumneavoastra. De asemenea, daca doriti sa utilizati serverul live, va trebui sa comentati linia de cod:
   ```php
   celmarket\Config::setDemo();
   ```
2. Fiecare director reprezinta o categorie de exemple: Products (Produse), Pages (Pagini), Orders (Comenzi), Invoices (Facturi), AWB  
3. Fiecare fisier este compus din 5 parti  
    i. **comentariu** => pune la dispozitie o scurta descriere a exemplului (in RO si EN)  
    ii. **include** => include api_include.php (este necesar numai pentru exemple)  
    iii. **use** => contine namespaceul si numele clasei folosite din API  
    iv. **functie** => contine instructiunile principale prin care API-ul poate fi folosit. De asemenea, parametrii functiei corespund intocmai celor ai metodei din API  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- instantierea obiectului  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- declararea unui bloc try-catch  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- apeleaza functia necesara si stocheaza valoarea returnata in variabila $response  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- printeaza valoarea returnata sau foloseste echo pentru mesajul de eroare  
    vi. **exemplu** => apeleaza functia cu date aleatorii. In functie de datele pe care le aveti deja, exista posibilitatea ca argumentele functiei sa nu duca la returnarea de valori relevante, de aceea ar trebui sa le schimbati in consecinta.  

### Rulare script
>Exemplu
```shell
php /CALE_CATRE_PROIECT/Orders/1.getOrdersSummary.php
```

### Index
In folderul principal, fisierul *index.php* genereaza automat un cuprins al tuturor directoarelor si fisierelor relevante pentru exemple. Acesta poate fi folosit ca referinta, dar este incurajata rularea din linia de comanda si editarea manuala a fisierelor, proiectul fiind conceput pentru a servi intelegerii modului de utilizare al API wrapper-ului de catre programatori, nu pentru a demonstra facilitatile API-ului.

1. Accesare prin intermediul unui server web
    ```
    http://****/marketplace_examples/index.php
    ```
2. Accesare prin intermediul liniei de comanda
   ```shell
   php index.php
   ```

### Contact
> dp [_ AT _] cel.ro
___
## [EN]

### About
This project contains examples that can be used for a better understanding of [CEL.ro Marketplace API Wrapper](https://github.com/celdotro/marketplace).  
For general instructions about the wrapper's usage, read the [documentation](https://github.com/celdotro/marketplace/wiki/First-page).  

* Install (WIKI): [https://github.com/celdotro/marketplace/wiki/Install#installation-1](https://github.com/celdotro/marketplace/wiki/Install#installation-1)
* Use (WIKI): [https://github.com/celdotro/marketplace/wiki/Install#use](https://github.com/celdotro/marketplace/wiki/Install#use)

### Main settings
Run the following command in the main folder  
```shell
composer install
``` 
### Files and folders structure
1. The file "api_include.php" situated in the path root includes the path for the API index file. It also provides a comment section about the issues presented in "Main settings". It contains the namespace and class name used in the authentication process, and the static method that must be called before calling any other method of the API. In order to use any script you must replace the user name and password with the supplied credentials. Also, if you decide to use the live server, you should comment out the line below
   ```php
   celmarket\Config::setDemo();
   ```
2. Each folder represents a category of examples: Products, Pages, Orders, Invoices and AWBs  
3. Each file has 5 parts  
    i. **comment** => provides a short description of the example (in RO and EN)  
    ii. **include** => includes api_include.php (this is only necessary for the example to work)  
    iii. **use** => contains the used namespace and class from the API  
    iv. **function** => contains the main logic of the API usage. Also, parameters map perfectly with the API method.  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- instantiate object  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- declare try-catch block  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- call the appropriate function and store the returned value in the $response variable  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- print the returned value or echo the error message  
    vi. **example** => calls the function with random data. Depending on your specific case, the provided arguments may not render relevant return values, therefore you should change them accordingly.

### Run script
>Example
```shell
php /PATH_TO_PROJECT/Orders/1.getOrdersSummary.php
```

### Index
The file *index.php* from the main folder automatically generates a contents of all relevant folders and files needed for examples. This can be used as a reference point, but running the scripts from command line and manually editing files are highly recommended because this project's purpose is to help programmers with the process of understanding of how the API wrapper works and not to be a showcase of the API.

1. Access through a web server
    ```
    http://****/marketplace_examples/index.php
    ```
2. Access through the command line
   ```shell
   php index.php
   ```

### Contact
> dp [_ AT _] cel.ro