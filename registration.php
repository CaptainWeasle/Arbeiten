<!DOCTYPE html>

<html lang=de>
    
    <head>
         <meta charset=utf-8>
        
        <title>
            Spiel - Registration
        </title>
    </head>
    
    
    <body>
        <header>
        
        </header>
        
        
        <main id=registration>  
            <form>
                <fieldset>
                    <legend>Registration</legend>
                    
                    <label for=id_input_registration>
                        ID:
                    </label>
                    
                        <input type=email name=id_input_registration required>
                    
                    <label for=passwort_input_registration>
                        Passwort:
                    </label>
                        
                        <input type=password name=passwort_input_registration required>
                   
                    <label for=passwort_input_registration2>
                        Passwort wiederholen:
                    </label>
                        
                        <input type=password name=passwort_input_registration2 required>
                    
                        <input type="checkbox" name=captcha required>
                    
                    <label for=submit_registration>
                        Registrieren!
                    </label>
                        <a href=index.php>
                            <input type=submit name=submit_registration>
                        </a>
                        
                </fieldset>
            </form>
        </main>
        
        
        <aside>
            <p>
                <a href=settings.php> <!--Link zu den Einstellungen-->
                    Hier 
                </a>
                    gehts zu den Einstellungen
            </p>
            
            <p>
                <a href=registration.php>
                    Hier
                </a>
                    kann man sich registrieren
            </p>
            
            <p>
                <a href=index.php>
                    Hier
                </a>
                    kann man sich anmelden
            </p>
        </aside>
        
        
        <footer>
        
        </footer>
    </body>
    
</html>


<!--Kommentar: Bei <input type=checkbox> wollt ich ein captcha hinzufügen, welches man wie gewohnt lüsen darf um die registrieren zu vollenden. Ich wusste nicht, wie man ein Captcha macht, deswegen hab ich gedacht dass kann so gehn...Offensichtlich habe mich mir zu diesem Zeitpunkt nicht die Mühe gemacht im Internet nachzugucken--> 
  