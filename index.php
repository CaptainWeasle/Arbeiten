<!DOCTYPE html>

<html lang = de>

	<head> 
        <meta charset = utf-8>  <!-- charset ist das Attribut und utf-8 ist der Wert-->
        
		<title>
			Login Screen
		</title>
	</head>

	<body>
        <header>
            <h1 >
                SPIEL
            </h1>
            <!--Hier wird ein Logo hinzugefügt, wenn ich es nicht schon in der anderen Datei "background" machen werde.-->
        </header>
            
        <main id=loginscreen>
            
            <!--Hier wird sich die gesamte Loginanzeige befinden-->
            
            <form name=login action=loginCheck.php>
                <!--Hier wird sich dann die Programmierung für den Login befinden-->
                <fieldset>
                    
                    <legend>Login</legend>
                    
                        <label for=id_input_login>
                            ID:
                        </label>     
                    
                            <input type=email required name=id_input_login>

                        <label for=passwort_input_login>
                            Passwort:
                        </label>   
                          
                            <input type=passwort required name=passwort_input_login> 
                
                            <input type="checkbox" name=captcha required>
                    
                        <label for=submit_login>
                            Login!
                        </label> 
                            
                            <a href=ingame.php>
                                <input type=submit name=submit_login>
                            </a>
                        
                        <label>
                            <a href=registration.php>
                                Registrieren...
                            </a>
                        </label>
                    
                        
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
            <p>
                made by André hehehe
            </p>
        </footer>
	</body>

</html>

