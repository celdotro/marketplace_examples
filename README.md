# marketplace_examples
**[RO]** Exemple pentru folosirea API-ului marketplaceului  
**[EN]** Examples for marketplace usage
___
# [RO]

## Setari principale
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**api_include.php** => schimbati calea pentru instructiunea include  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**index.php** (API) => schimbati numele de utilizator si parola  

## Structura fisierelor si directoarelor
1. Fisierul "api_include.php" aflat la baza structurii include fisierul index al API-ului. De asemenea, contine o sectiune de comentarii in care sunt reluate problemele discutate in "Setari principale".  
2. Fiecare director reprezinta o categorie de exemple: Products (Produse), Pages (Pagini), Orders (Comenzi), Invoices (Facturi), AWB  
3. Fiecare fisier este compus din 4 parti  
    i. **include** => include api_include.php (este necesar numai pentru exemple)  
    ii. **use** => contine namespaceul si numele clasei folosite din API  
    iii. **functie** => contine instructiunile principale prin care API-ul poate fi folosit. De asemenea, parametrii functieic orespund intocmai celor ai metodei din API  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- instantierea obiectului  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- declararea unui bloc try-catch  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- apeleaza functia necesara si stocheaza valoarea returnata in variabila $response  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- printeaza valoarea returnata sau foloseste echo pentru mesajul de eroare  
    iv. **exemplu** => apeleaza functia cu date aleatorii. In functie de datele pe care le aveti deja, exista posibilitatea ca argumentele functiei sa nu duca la returnarea de valori relevante, de aceea ar trebui sa le schimbati in consecinta.  
___
# [EN]

## Main settings
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**api_include.php** => change include path  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**index.php** (API) => change username and password  

## Files and folders structure
1. The file "api_include.php" situated in the path root includes the path for the API index file. It also provides a comment section about the issues presented in "Main settings".  
2. Each folder represents a category of examples: Products, Pages, Orders, Invoices and AWBs  
3. Each file has 4 parts  
    i. **include** => includes api_include.php (this is only necessary for the example to work)  
    ii. **use** => contains the used namespace and class from the API  
    iii. **function** => contains the main logic of the API usage. Also, parameters map perfectly with the API method.  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- instantiate object  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- declare try-catch block  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- call the appropriate function and store the returned value in the $response variable  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- print the returned value or echo the error message  
    iv. **example** => calls the function with random data. Depending on your specific case, the provided arguments may not render relevant return values, therefore you should change them accordingly.
