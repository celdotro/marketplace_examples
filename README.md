# marketplace_examples
**[RO]** Exemple pentru folosirea API wrapper-ului [marketplaceului](https://github.com/celdotro/marketplace)  
**[EN]** Examples for [marketplace's](https://github.com/celdotro/marketplace) API wrapper usage
___
# [RO]

## Setari principale
Rulati urmatoarea comanda in directorul principal  
```
composer install
``` 

## Rulare script
>Exemplu
```
php /CALE_CATRE_PROIECT/Orders/1.getOrdersSummary.php
```

## Structura fisierelor si directoarelor
1. Fisierul "api_include.php" aflat la baza structurii include fisierul index al API-ului. De asemenea, contine o sectiune de comentarii in care sunt reluate problemele discutate in "Setari principale".  
2. Fiecare director reprezinta o categorie de exemple: Products (Produse), Pages (Pagini), Orders (Comenzi), Invoices (Facturi), AWB  
3. Fiecare fisier este compus din 6 parti  
    i. **comentariu** => pune la dispozitie o scurta descriere a exemplului (in RO si EN)  
    ii. **include** => include api_include.php (este necesar numai pentru exemple)  
    iii. **auth** => contine namespaceul si numele clasei de autentificare, precum si metoda statica ce trebuie folosita inainte de apelarea oricarei alte metode din API (inlocuiti numele de utilizator si parola cu cele aferente contului dumneavoastra)  
    iv. **use** => contine namespaceul si numele clasei folosite din API  
    v. **functie** => contine instructiunile principale prin care API-ul poate fi folosit. De asemenea, parametrii functieic orespund intocmai celor ai metodei din API  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- instantierea obiectului  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- declararea unui bloc try-catch  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- apeleaza functia necesara si stocheaza valoarea returnata in variabila $response  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- printeaza valoarea returnata sau foloseste echo pentru mesajul de eroare  
    vi. **exemplu** => apeleaza functia cu date aleatorii. In functie de datele pe care le aveti deja, exista posibilitatea ca argumentele functiei sa nu duca la returnarea de valori relevante, de aceea ar trebui sa le schimbati in consecinta.  
___
# [EN]

## Main settings
Run the following command in the main folder  
```
composer install
``` 

## Run script
>Example
```
php /PATH_TO_PROJECT/Orders/1.getOrdersSummary.php
```

## Files and folders structure
1. The file "api_include.php" situated in the path root includes the path for the API index file. It also provides a comment section about the issues presented in "Main settings".  
2. Each folder represents a category of examples: Products, Pages, Orders, Invoices and AWBs  
3. Each file has 6 parts  
    i. **comment** => provides a short description of the example (in RO and EN)  
    ii. **include** => includes api_include.php (this is only necessary for the example to work)  
    iii. **auth** => contains the namespace and class name used in the authentication process, and the static method that must be called before calling any other method of the API (replace the user name and password with the supplied data for your account)  
    iv. **use** => contains the used namespace and class from the API  
    v. **function** => contains the main logic of the API usage. Also, parameters map perfectly with the API method.  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- instantiate object  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- declare try-catch block  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- call the appropriate function and store the returned value in the $response variable  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- print the returned value or echo the error message  
    vi. **example** => calls the function with random data. Depending on your specific case, the provided arguments may not render relevant return values, therefore you should change them accordingly.
