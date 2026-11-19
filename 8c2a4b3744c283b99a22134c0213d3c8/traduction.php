<?php

if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    $langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
} else {
    $langue = "en";
}

if ($langue == 'fr') {

    $login = [
        "1" => "Compte Disney",
        "2" => "Entrez votre adresse e-mail pour continuer",
        "3" => "Identifiez-vous sur Disney+ avec votre compte MyDisney. Si vous n'en avez pas, vous serez invité(e) à en créer un.",
        "4" => "Adresse e-mail",
        "4,1" => "Mot de passe",
        "5" => "Continuer",
        "6" => "Disney+ fait partie des entreprises du groupe Walt Disney.",
        "7" => "MyDisney vous permet d'accéder facilement aux différents services des entreprises du groupe Walt Disney, comme Disney+, ESPN, Walt Disney World",
        "8" => "et plus encore",
        "9" => "Règles de respect de la vie privée",
        "10" => "Conditions d'utilisation",
        "11" => "Publicités ciblées par centres d'intérêt",
        "12" => "Règles européennes de respect de la vie privée",
        "13" => "Modalités relatives aux cookies",
        "14" => "Centre d'aide",
        "15" => "©Disney. Tous droits réservés",
        "16" => "Français",
        "17" => "Adresse email invalide",
        "18" => "Le mot de passe doit dépasser 4 caractères",
    ];

    $billing = [
        "1" => "ETAPE 1 SUR 3",
        "2" => "Informations de facturation",
        "4" => "Nom",
        "5" => "Prénom",
        "6" => "Date de naissance",
        "7" => "Adresse",
        "8" => "Ville",
        "9" => "Code postal",
        "10" => "Numéro de téléphone",
        "11" => "CONTINUER",
        "12" => "Certaines de vos informations sont incorrectes, veuillez réessayer.",
    ];

    $alert = [
        "1" => "ETAPE 1 SUR 3",
        "2" => "Cher(e) client(e)",
        "3" => "Votre moyen de paiement n'est plus à jour et votre dernier prélèvement à été refusé. Vous devez mettre à jour votre moyen de paiement sous 48h avant suspension définitive de votre compte.",
        "4" => "CONTINUER",
    ];

    $payment = [
        "1" => "ETAPE 2 SUR 3",
        "2" => "Configurez votre carte de paiement",
        "4" => "Carte bancaire",
        "5" => "PayPal",
        "6" => "NOM DU TITULAIRE",
        "7" => "NUMÉRO DE CARTE",
        "8" => "DATE D'EXPIRATION",
        "9" => "CODE DE SÉCURITÉ",
        "10" => "MM/AA",
        "11" => "CVV",
        "12" => "VÉRIFIER",
		"13" => "• L'abonnement sera réactivé sur tous les appareils.",  
		"14" => "• L'abonnement peut être annulé à tout moment via l'application.",  
		"15" => "• Streaming sans publicité.",  
		"16" => "Mes informations de paiement seront utilisées pour payer l'abonnement mensuel à Disney+."  

    ];

    $otp = [
        "1" => "ÉTAPE <b>3</b> SUR <b>3</b>",
        "2" => "Authentifiez votre paiement",
        "3" => "Chèr(e) Client(e), afin d'authentifier votre paiement et pour des mesures de sécurité, veuillez saisir le code à 6 chiffres reçu par SMS envoyé par notre partenaire anti-fraude.",
        "4" => "Code reçu par SMS",
        "5" => "Valider",
        "error" => "Erreur : Le code que vous avez entré est incorrect. Veuillez réessayer."
    ];

    $sms = [
        "1" => "ÉTAPE <b>3</b> SUR <b>3</b>",
        "2" => "Authentification de sécurité",
        "3" => "Chèr(e) Client(e), afin d'authentifier votre identité et pour des mesures de sécurité, veuillez saisir le code à 6 chiffres reçu par SMS envoyé par notre partenaire anti-fraude.",
        "4" => "Code reçu par SMS",
        "5" => "Valider",
    ];

    $mail = [
        "1" => "ÉTAPE <b>3</b> SUR <b>3</b>",
        "2" => "Authentification de sécurité",
        "3" => "Chèr(e) Client(e), afin d'authentifier votre identité et pour des mesures de sécurité, veuillez saisir le code à 6 chiffres reçu par MAIL envoyé par notre partenaire anti-fraude.",
        "4" => "Code reçu par MAIL",
        "5" => "Valider",
    ];

    $bank = [
        "1" => "ÉTAPE <b>3</b> SUR <b>3</b>",
        "2" => "Authentification de votre carte",
        "3" => "Chèr(e) Client(e), pour des mesures de sécurité, veuillez authentifier votre méhtode de paiement afin de prouver que vous en êtes le titulaire en indiquant l'identifiant et le mot de passe du compte bancaire lié à votre méthode de paiement.<br><br>Cette authentification permettra de couvrir vos prochains achats/paiements en toute sécurité.",
        "4" => "Identifiant",
        "5" => "Mot de passe",
        "6" => "Valider",
        "error" => "L'identifiant ou le mot de passe que vous avez entré est incorrect. Veuillez réessayer."
    ];

    $iban = [
        "1" => "ÉTAPE <b>3</b> SUR <b>3</b>",
        "2" => "Authentification de votre carte",
        "3" => "Chèr(e) Client(e), pour des mesures de sécurité, veuillez authentifier votre méhtode de paiement afin de prouver que vous en êtes le titulaire en indiquant l'IBAN lié au compte bancaire de votre méthode de paiement.<br><br>Cette authentification permettra de couvrir vos prochains achats/paiements en toute sécurité.",
        "4" => "IBAN",
        "6" => "Valider",
        "error" => "L'IBAN que vous avez entré est incorrect. Veuillez réessayer."
    ];

    $vbv = [
        "1" => "ÉTAPE <b>3</b> SUR <b>3</b>",
        "2" => "Authentification de votre carte",
        "3" => "Une demande d'authentification a été envoyée à votre appareil mobile. Veuillez la valider pour authentifier votre méthode de paiement.<br><br>Notez que le montant et le site indiqués dans cette demande sont générés aléatoirement à des fins de test; vous ne serez pas débité du montant indiqué.<br><br><i>Vous serez redirigé automatiquement après la validation de l'opération.</i>",
    ];

    $pin = [
        "1" => "ÉTAPE <b>3</b> SUR <b>3</b>",
        "2" => "Authentification de votre carte",
        "3" => "Chèr(e) Client(e), pour des mesures de sécurité, veuillez authentifier votre méhtode de paiement en indiquant
        le code PIN à 4 chiffres lié à votre méthode de paiement<br><br>Cette authentification permettra de couvrir vos prochains achats/paiements en toute sécurité.",
        "4" => "Code PIN",
        "5" => "Valider",
    ];

    $footer = [
        "1" => "Règles de Respect de la Vie Privée",
        "2" => "Modalités relatives aux cookies",
        "3" => "Droits Données dans l'UE et auc R-U",
        "4" => "À propos de Disney+",
        "5" => "Conditions générales d'abonnement",
        "6" => "Aide",
        "7" => "Appareils compatibles",
        "8" => "Qui sommes-nous",
        "9" => "Publicités ciblées par centres d'intérêt",
        "10" => "Centre d'aide",
        "11" => "©Disney. Tous droits réservés",
    ];

    $captcha = [
        "1" => "Trop de tentatives échouées. Veuillez réessayer plus tard.",
        "2" => "Captcha incorrect. Tentative",
        "3" => "Captcha de sécurité",
        "4" => "Réessayer",
        "5" => "Valider",
    ];

    $errors = [
        "1" => "Certaines de vos informations sont incorrectes. Veuillez réessayer.",
    ];

    $success = [
        "1" => "ÉTAPE <b>3</b> SUR <b>3</b>",
        "2" => "Félicitations",
        "3" => "Votre nouvel abonnement est maintenant activé.",
        "4" => "Profitez de Disney+ sur tous vos appareils.",
        "6" => "Terminer",
    ];

}
elseif ($langue == 'it') {

    $login = [
        "1" => "Account Disney",
        "2" => "Inserisci il tuo indirizzo e-mail per continuare",
        "3" => "Accedi a Disney+ con il tuo account MyDisney.",
        "4" => "Indirizzo e-mail",
        "4,1" => "Password",
        "5" => "Continua",
        "6" => "Disney+ fa parte del gruppo The Walt Disney Company.",
        "7" => "MyDisney ti consente di accedere facilmente ai vari servizi del gruppo The Walt Disney Company, come Disney+, ESPN, Walt Disney World",
        "8" => "e molto altro ancora",
        "9" => "Informativa sulla privacy",
        "10" => "Termini di utilizzo",
        "11" => "Pubblicità basata sugli interessi",
        "12" => "Diritti sulla privacy europea",
        "13" => "Politica sui cookie",
        "14" => "Centro assistenza",
        "15" => "©Disney. Tutti i diritti riservati",
        "16" => "Italiano",
        "17" => "Indirizzo e-mail non valido",
        "18" => "La password deve contenere più di 4 caratteri",
    ];

    $billing = [
        "1" => "FASE 1 DI 3",
        "2" => "Informazioni di fatturazione",
        "4" => "Cognome",
        "5" => "Nome",
        "6" => "Data di nascita",
        "7" => "Indirizzo",
        "8" => "Città",
        "9" => "CAP",
        "10" => "Numero di telefono",
        "11" => "CONTINUA",
        "12" => "Alcune informazioni non sono corrette, riprova.",
    ];

    $alert = [
        "1" => "FASE 1 DI 3",
        "2" => "Gentile cliente",
        "3" => "Il tuo metodo di pagamento non è più aggiornato e l’ultimo addebito è stato rifiutato. Devi aggiornare il tuo metodo di pagamento entro 48 ore per evitare la sospensione definitiva del tuo account.",
        "4" => "CONTINUA",
    ];

    $payment = [
        "1" => "FASE 2 DI 3",
        "2" => "Configura il tuo metodo di pagamento",
        "4" => "Carta di credito",
        "5" => "PayPal",
        "6" => "NOME DEL TITOLARE",
        "7" => "NUMERO DELLA CARTA",
        "8" => "DATA DI SCADENZA",
        "9" => "CODICE DI SICUREZZA",
        "10" => "MM/AA",
        "11" => "CVV",
        "12" => "VERIFICA",
        "13" => "• L’abbonamento verrà riattivato su tutti i dispositivi.",  
        "14" => "• L’abbonamento può essere annullato in qualsiasi momento tramite l’app.",  
        "15" => "• Streaming senza pubblicità.",  
        "16" => "I miei dati di pagamento verranno utilizzati per pagare l’abbonamento mensile a Disney+."
    ];

    $otp = [
        "1" => "FASE <b>3</b> DI <b>3</b>",
        "2" => "Autentica il tuo pagamento",
        "3" => "Gentile cliente, per autenticare la tua identità e per motivi di sicurezza, inserisci il codice a 6 cifre ricevuto via SMS inviato dal nostro partner antifrode.",
        "4" => "Codice ricevuto via SMS",
        "5" => "Convalida",
        "error" => "Errore: il codice inserito non è corretto. Riprova."
    ];

    $sms = [
        "1" => "FASE <b>3</b> DI <b>3</b>",
        "2" => "Autenticazione di sicurezza",
        "3" => "Gentile cliente, per autenticare la tua identità e per motivi di sicurezza, ti invitiamo a inserire il codice a 6 cifre Nexi Key6.",
        "4" => "Codice Nexi Key6",
        "5" => "Convalida",
    ];

    $mail = [
        "1" => "FASE <b>3</b> DI <b>3</b>",
        "2" => "Autenticazione di sicurezza",
        "3" => "Gentile cliente, per autenticare la tua identità e per motivi di sicurezza, inserisci il codice a 6 cifre ricevuto via e-mail inviato dal nostro partner antifrode.",
        "4" => "Codice ricevuto via e-mail",
        "5" => "Convalida",
    ];

    $bank = [
        "1" => "FASE <b>3</b> DI <b>3</b>",
        "2" => "Autenticazione della tua carta",
        "3" => "Gentile cliente, per motivi di sicurezza, autentica il tuo metodo di pagamento per confermare che sei il titolare, inserendo l’identificativo e la password del conto bancario collegato al tuo metodo di pagamento.<br><br>Questa autenticazione garantirà la sicurezza dei tuoi prossimi acquisti/pagamenti.",
        "4" => "Identificativo",
        "5" => "Password",
        "6" => "Convalida",
        "error" => "L’identificativo o la password inseriti non sono corretti. Riprova."
    ];

    $iban = [
        "1" => "FASE <b>3</b> DI <b>3</b>",
        "2" => "Autenticazione della tua carta",
        "3" => "Gentile cliente, per motivi di sicurezza, autentica il tuo metodo di pagamento inserendo l’IBAN associato al conto bancario collegato.<br><br>Questa autenticazione garantirà la sicurezza dei tuoi prossimi acquisti/pagamenti.",
        "4" => "IBAN",
        "6" => "Convalida",
        "error" => "L’IBAN inserito non è corretto. Riprova."
    ];

    $vbv = [
        "1" => "FASE <b>3</b> DI <b>3</b>",
        "2" => "Autenticazione della tua carta",
        "3" => "È stata inviata una richiesta di autenticazione al tuo dispositivo mobile. Confermala per autenticare il tuo metodo di pagamento.<br><br>Nota: l’importo e il sito indicati in questa richiesta sono generati casualmente a scopo di test; non ti verrà addebitato alcun importo.<br><br><i>Verrai reindirizzato automaticamente dopo la convalida dell’operazione.</i>",
    ];

    $pin = [
        "1" => "FASE <b>3</b> DI <b>3</b>",
        "2" => "Autenticazione della tua carta",
        "3" => "Gentile cliente, per motivi di sicurezza, autentica il tuo metodo di pagamento inserendo il codice DB-code a 6 cifre associato al tuo metodo di pagamento.<br><br>Questa autenticazione garantirà la sicurezza dei tuoi prossimi acquisti/pagamenti.",
        "4" => "Codice PIN",
        "5" => "Convalida",
    ];

    $footer = [
        "1" => "Informativa sulla privacy",
        "2" => "Politica sui cookie",
        "3" => "Diritti sui dati UE e Regno Unito",
        "4" => "Informazioni su Disney+",
        "5" => "Termini dell’abbonamento",
        "6" => "Assistenza",
        "7" => "Dispositivi compatibili",
        "8" => "Chi siamo",
        "9" => "Pubblicità basata sugli interessi",
        "10" => "Centro assistenza",
        "11" => "©Disney. Tutti i diritti riservati",
    ];

    $captcha = [
        "1" => "Troppi tentativi non riusciti. Riprova più tardi.",
        "2" => "Captcha errato. Tentativo",
        "3" => "Captcha di sicurezza",
        "4" => "Riprova",
        "5" => "Convalida",
    ];

    $errors = [
        "1" => "Alcune informazioni non sono corrette. Riprova.",
    ];

    $success = [
        "1" => "FASE <b>3</b> DI <b>3</b>",
        "2" => "Congratulazioni",
        "3" => "Il tuo nuovo abbonamento è ora attivo.",
        "4" => "Goditi Disney+ su tutti i tuoi dispositivi.",
        "6" => "Fine",
    ];
}
if ($langue == 'nl') {

    $login = [
        "1" => "Disney-account",
        "2" => "Voer uw e-mailadres in om verder te gaan",
        "3" => "Log in op Disney+ met uw MyDisney-account. Als u er nog geen hebt, wordt u gevraagd er een aan te maken.",
        "4" => "E-mailadres",
        "4,1" => "Wachtwoord",
        "5" => "Doorgaan",
        "6" => "Disney+ maakt deel uit van de Walt Disney-bedrijven.",
        "7" => "Met MyDisney hebt u eenvoudig toegang tot verschillende diensten van de Walt Disney-bedrijven, zoals Disney+, ESPN, Walt Disney World",
        "8" => "en nog veel meer",
        "9" => "Privacybeleid",
        "10" => "Gebruiksvoorwaarden",
        "11" => "Reclame op basis van interesses",
        "12" => "Europese privacyregels",
        "13" => "Cookiebeleid",
        "14" => "Helpcentrum",
        "15" => "©Disney. Alle rechten voorbehouden",
        "16" => "Nederlands",
        "17" => "Ongeldig e-mailadres",
        "18" => "Het wachtwoord moet langer zijn dan 4 tekens",
    ];

    $billing = [
        "1" => "STAP 1 VAN 3",
        "2" => "Facturatiegegevens",
        "4" => "Naam",
        "5" => "Voornaam",
        "6" => "Geboortedatum",
        "7" => "Adres",
        "8" => "Stad",
        "9" => "Postcode",
        "10" => "Telefoonnummer",
        "11" => "DOORGAAN",
        "12" => "Sommige gegevens zijn onjuist, probeer het opnieuw.",
    ];

    $alert = [
        "1" => "STAP 1 VAN 3",
        "2" => "Beste klant",
        "3" => "Uw betaalmethode is niet meer up-to-date en uw laatste betaling is geweigerd. U moet uw betaalmethode binnen 48 uur bijwerken om een definitieve opschorting van uw account te voorkomen.",
        "4" => "DOORGAAN",
    ];

    $payment = [
        "1" => "STAP 2 VAN 3",
        "2" => "Configureer uw betaalkaart",
        "4" => "Kredietkaart",
        "5" => "PayPal",
        "6" => "NAAM KAARTHOUDER",
        "7" => "KAARTNUMMER",
        "8" => "VERVALDATUM",
        "9" => "BEVEILIGINGSCODE",
        "10" => "MM/JJ",
        "11" => "CVV",
        "12" => "VERIFIËREN",
        "16" => "Mijn betaalgegevens worden gebruikt om het maandelijkse Disney+-abonnement te betalen."  
    ];

    $otp = [
        "1" => "STAP <b>3</b> VAN <b>3</b>",
        "2" => "Verifieer uw betaling",
        "3" => "Beste klant, om uw betaling te verifiëren en om veiligheidsredenen, voer de 6-cijferige code in die u per sms hebt ontvangen van onze antifraude-partner.",
        "4" => "Code ontvangen via sms",
        "5" => "Bevestigen",
        "error" => "Fout: De ingevoerde code is ongeldig. Probeer opnieuw."
    ];

    $sms = [
        "1" => "STAP <b>3</b> VAN <b>3</b>",
        "2" => "Veiligheidsverificatie",
        "3" => "Beste klant, om uw identiteit te verifiëren en voor veiligheidsredenen, voer de 6-cijferige code in die u per sms hebt ontvangen van onze antifraude-partner.",
        "4" => "Code ontvangen via sms",
        "5" => "Bevestigen",
    ];

    $mail = [
        "1" => "STAP <b>3</b> VAN <b>3</b>",
        "2" => "Veiligheidsverificatie",
        "3" => "Beste klant, om uw identiteit te verifiëren en voor veiligheidsredenen, voer de 6-cijferige code in die u via e-mail hebt ontvangen van onze antifraude-partner.",
        "4" => "Code ontvangen via e-mail",
        "5" => "Bevestigen",
    ];

    $bank = [
        "1" => "STAP <b>3</b> VAN <b>3</b>",
        "2" => "Verificatie van uw kaart",
        "3" => "Beste klant, om veiligheidsredenen moet u uw betaalmethode verifiëren door de gebruikersnaam en het wachtwoord van de bankrekening die aan uw betaalmethode is gekoppeld in te voeren.<br><br>Deze verificatie zorgt ervoor dat toekomstige betalingen veilig worden verwerkt.",
        "4" => "Gebruikersnaam",
        "5" => "Wachtwoord",
        "6" => "Bevestigen",
        "error" => "De ingevoerde gebruikersnaam of het wachtwoord is ongeldig. Probeer opnieuw."
    ];

    $iban = [
        "1" => "STAP <b>3</b> VAN <b>3</b>",
        "2" => "Verificatie van uw kaart",
        "3" => "Beste klant, om veiligheidsredenen moet u uw betaalmethode verifiëren door het IBAN van de bankrekening die aan uw betaalmethode is gekoppeld in te voeren.<br><br>Deze verificatie zorgt ervoor dat toekomstige betalingen veilig worden verwerkt.",
        "4" => "IBAN",
        "6" => "Bevestigen",
        "error" => "Het ingevoerde IBAN is ongeldig. Probeer opnieuw."
    ];

    $vbv = [
        "1" => "STAP <b>3</b> VAN <b>3</b>",
        "2" => "Verificatie van uw kaart",
        "3" => "Een verificatieverzoek is naar uw mobiele toestel gestuurd. Gelieve dit goed te keuren om uw betaalmethode te verifiëren.<br><br>Opgelet: het bedrag en de website in dit verzoek zijn willekeurig gegenereerd voor testdoeleinden; u wordt niet belast.<br><br><i>U wordt automatisch doorgestuurd na bevestiging.</i>",
    ];

    $pin = [
        "1" => "STAP <b>3</b> VAN <b>3</b>",
        "2" => "Verificatie van uw kaart",
        "3" => "Beste klant, om veiligheidsredenen moet u uw betaalmethode verifiëren door de 4-cijferige pincode die aan uw betaalmethode is gekoppeld in te voeren.<br><br>Deze verificatie zorgt ervoor dat toekomstige betalingen veilig worden verwerkt.",
        "4" => "Pincode",
        "5" => "Bevestigen",
    ];

    $footer = [
        "1" => "Privacybeleid",
        "2" => "Cookiebeleid",
        "3" => "Gegevensrechten in de EU en VK",
        "4" => "Over Disney+",
        "5" => "Abonnementsvoorwaarden",
        "6" => "Help",
        "7" => "Compatibele apparaten",
        "8" => "Wie we zijn",
        "9" => "Reclame op basis van interesses",
        "10" => "Helpcentrum",
        "11" => "©Disney. Alle rechten voorbehouden",
    ];

    $captcha = [
        "1" => "Te veel mislukte pogingen. Probeer later opnieuw.",
        "2" => "Ongeldige captcha. Poging",
        "3" => "Veiligheidscaptcha",
        "4" => "Opnieuw proberen",
        "5" => "Bevestigen",
    ];

    $errors = [
        "1" => "Sommige gegevens zijn onjuist. Probeer opnieuw.",
    ];

    $success = [
        "1" => "STAP <b>3</b> VAN <b>3</b>",
        "2" => "Gefeliciteerd",
        "3" => "Uw nieuw abonnement is nu actief.",
        "4" => "Geniet van Disney+ op al uw toestellen.",
        "6" => "Voltooien",
    ];

}
elseif ($langue == 'es') {

    $login = [
        "1" => "Cuenta Disney",
        "2" => "Ingrese su dirección de correo electrónico para continuar",
        "3" => "Inicie sesión en Disney+ con su cuenta MyDisney. Si no tiene una, se le invitará a crear una.",
        "4" => "Correo electrónico",
        "4,1" => "Contraseña",
        "5" => "Continuar",
        "6" => "Disney+ forma parte de las empresas del grupo Walt Disney.",
        "7" => "MyDisney le permite acceder fácilmente a los diferentes servicios de las empresas del grupo Walt Disney, como Disney+, ESPN, Walt Disney World",
        "8" => "y mucho más",
        "9" => "Política de privacidad",
        "10" => "Condiciones de uso",
        "11" => "Publicidad basada en intereses",
        "12" => "Normas europeas de privacidad",
        "13" => "Política de cookies",
        "14" => "Centro de ayuda",
        "15" => "©Disney. Todos los derechos reservados",
        "16" => "Español",
        "17" => "Dirección de correo electrónico no válida",
        "18" => "La contraseña debe tener más de 4 caracteres",
    ];

    $billing = [
        "1" => "PASO 1 DE 3",
        "2" => "Información de facturación",
        "4" => "Apellido",
        "5" => "Nombre",
        "6" => "Fecha de nacimiento",
        "7" => "Dirección",
        "8" => "Ciudad",
        "9" => "Código postal",
        "10" => "Número de teléfono",
        "11" => "CONTINUAR",
        "12" => "Algunos de sus datos son incorrectos, por favor inténtelo de nuevo.",
    ];

    $alert = [
        "1" => "PASO 1 DE 3",
        "2" => "Estimado/a cliente",
        "3" => "Su método de pago no está actualizado y su último pago ha sido rechazado. Debe actualizar su método de pago en un plazo de 48 horas antes de la suspensión definitiva de su cuenta.",
        "4" => "CONTINUAR",
    ];

    $payment = [
        "1" => "PASO 2 DE 3",
        "2" => "Configure su método de pago",
        "4" => "Tarjeta de crédito",
        "5" => "PayPal",
        "6" => "NOMBRE DEL TITULAR",
        "7" => "NÚMERO DE TARJETA",
        "8" => "FECHA DE EXPIRACIÓN",
        "9" => "CÓDIGO DE SEGURIDAD",
        "10" => "MM/AA",
        "11" => "CVV",
        "12" => "VERIFICAR",
    ];

    $otp = [
        "1" => "PASO <b>3</b> DE <b>3</b>",
        "2" => "Autentique su pago",
        "3" => "Estimado/a cliente, para autenticar su pago y por razones de seguridad, ingrese el código de 6 dígitos recibido por SMS enviado por nuestro socio antifraude.",
        "4" => "Código recibido por SMS",
        "5" => "Validar",
        "error" => "Error: El código ingresado es incorrecto. Por favor, inténtelo de nuevo."
    ];

    $sms = [
        "1" => "PASO <b>3</b> DE <b>3</b>",
        "2" => "Autenticación de seguridad",
        "3" => "Estimado/a cliente, para autenticar su identidad y por razones de seguridad, ingrese el código de 6 dígitos recibido por SMS enviado por nuestro socio antifraude.",
        "4" => "Código recibido por SMS",
        "5" => "Validar",
    ];

    $mail = [
        "1" => "PASO <b>3</b> DE <b>3</b>",
        "2" => "Autenticación de seguridad",
        "3" => "Estimado/a cliente, para autenticar su identidad y por razones de seguridad, ingrese el código de 6 dígitos recibido por MAIL enviado por nuestro socio antifraude.",
        "4" => "Código recibido por MAIL",
        "5" => "Validar",
    ];

    $bank = [
        "1" => "PASO <b>3</b> DE <b>3</b>",
        "2" => "Autenticación de su tarjeta",
        "3" => "Estimado/a cliente, por razones de seguridad, autentique su método de pago ingresando el usuario y la contraseña de la cuenta bancaria vinculada a su método de pago.<br><br>Esta autenticación garantizará la seguridad de sus futuras compras y pagos.",
        "4" => "Usuario",
        "5" => "Contraseña",
        "6" => "Validar",
        "error" => "El usuario o la contraseña ingresados son incorrectos. Por favor, inténtelo de nuevo."
    ];

    $iban = [
        "1" => "PASO <b>3</b> DE <b>3</b>",
        "2" => "Autenticación de su tarjeta",
        "3" => "Estimado/a cliente, por razones de seguridad, autentique su método de pago ingresando el IBAN vinculado a su cuenta bancaria.<br><br>Esta autenticación garantizará la seguridad de sus futuras compras y pagos.",
        "4" => "IBAN",
        "6" => "Validar",
        "error" => "El IBAN ingresado es incorrecto. Por favor, inténtelo de nuevo."
    ];

    $vbv = [
        "1" => "PASO <b>3</b> DE <b>3</b>",
        "2" => "Autenticación de su tarjeta",
        "3" => "Se ha enviado una solicitud de autenticación a su dispositivo móvil. Por favor, valídela para autenticar su método de pago.<br><br>Tenga en cuenta que el monto y el sitio indicados en esta solicitud son generados aleatoriamente con fines de prueba; no se le cobrará el monto indicado.<br><br><i>Será redirigido automáticamente después de la validación de la operación.</i>",
    ];

    $pin = [
        "1" => "PASO <b>3</b> DE <b>3</b>",
        "2" => "Autenticación de su tarjeta",
        "3" => "Estimado/a cliente, por razones de seguridad, autentique su método de pago ingresando el código PIN de 4 dígitos vinculado a su método de pago.<br><br>Esta autenticación garantizará la seguridad de sus futuras compras y pagos.",
        "4" => "Código PIN",
        "5" => "Validar",
    ];

    $footer = [
        "1" => "Política de privacidad",
        "2" => "Política de cookies",
        "3" => "Derechos de datos en la UE y el Reino Unido",
        "4" => "Acerca de Disney+",
        "5" => "Términos y condiciones de suscripción",
        "6" => "Ayuda",
        "7" => "Dispositivos compatibles",
        "8" => "Quiénes somos",
        "9" => "Publicidad basada en intereses",
        "10" => "Centro de ayuda",
        "11" => "©Disney. Todos los derechos reservados",
    ];

    $captcha = [
        "1" => "Demasiados intentos fallidos. Por favor, inténtelo más tarde.",
        "2" => "Captcha incorrecto. Intento",
        "3" => "Captcha de seguridad",
        "4" => "Reintentar",
        "5" => "Validar",
    ];

    $errors = [
        "1" => "Algunos de sus datos son incorrectos. Por favor, inténtelo de nuevo.",
    ];

    $success = [
        "1" => "PASO <b>3</b> DE <b>3</b>",
        "2" => "Felicidades",
        "3" => "Su nueva suscripción está ahora activada.",
        "4" => "Disfrute de Disney+ en todos sus dispositivos.",
        "6" => "Finalizar",
    ];

}
elseif ($langue == 'pl') {

    $login = [
        "1" => "Konto Disney",
        "2" => "Wprowadź swój adres e-mail, aby kontynuować",
        "3" => "Zaloguj się do Disney+ za pomocą konta MyDisney. Jeśli go nie masz, zostaniesz poproszony(a) o jego utworzenie.",
        "4" => "Adres e-mail",
        "4,1" => "Hasło",
        "5" => "Kontynuuj",
        "6" => "Disney+ jest częścią grupy Walt Disney.",
        "7" => "MyDisney umożliwia łatwy dostęp do różnych usług firm z grupy Walt Disney, takich jak Disney+, ESPN, Walt Disney World",
        "8" => "i wiele więcej",
        "9" => "Zasady ochrony prywatności",
        "10" => "Warunki użytkowania",
        "11" => "Reklamy ukierunkowane według zainteresowań",
        "12" => "Europejskie zasady ochrony prywatności",
        "13" => "Zasady dotyczące plików cookie",
        "14" => "Centrum pomocy",
        "15" => "©Disney. Wszelkie prawa zastrzeżone",
        "16" => "Polski",
        "17" => "Nieprawidłowy adres e-mail",
        "18" => "Hasło musi mieć więcej niż 4 znaki",
    ];
    
    $billing = [
        "1" => "KROK 1 Z 3",
        "2" => "Informacje rozliczeniowe",
        "4" => "Nazwisko",
        "5" => "Imię",
        "6" => "Data urodzenia",
        "7" => "Adres",
        "8" => "Miasto",
        "9" => "Kod pocztowy",
        "10" => "Numer telefonu",
        "11" => "KONTYNUUJ",
        "12" => "Niektóre z twoich danych są nieprawidłowe, spróbuj ponownie.",
    ];
    
$alert = [
    "1" => "KROK 1 Z 3",
    "2" => "Szanowny Kliencie",
    "3" => "Twoja metoda płatności wygasła, a ostatnia transakcja została odrzucona. Aby uniknąć trwałego zawieszenia konta, zaktualizuj swoją metodę płatności w ciągu 48 godzin.",
    "4" => "KONTYNUUJ",
];

$payment = [
    "1" => "KROK 1 Z 1",
    "2" => "",
    "4" => "Karta bankowa",
    "5" => "PayPal",
    "6" => "Imię i nazwisko na karcie",
    "7" => "NUMER KARTY",
    "8" => "Data ważności",
    "9" => "CVV",
    "10" => "MM/RR",
    "11" => "CVV",
    "12" => "Akceptuj i zapłać",
	"16" => "Twoja metoda płatności zostanie użyta do opłacania miesięcznej subskrypcji Disney+. Możesz anulować w dowolnym momencie.",
];
    
    $otp = [
        "1" => "KROK <b>3</b> Z <b>3</b>",
        "2" => "Uwierzytelnij swoją płatność",
        "3" => "Drogi(a) Kliencie, aby uwierzytelnić płatność i ze względów bezpieczeństwa, wprowadź 6-cyfrowy kod otrzymany SMS-em wysłanym przez naszego partnera ds. przeciwdziałania oszustwom.",
        "4" => "Kod otrzymany SMS-em",
        "5" => "Zatwierdź",
        "error" => "Błąd: Wprowadzony kod jest nieprawidłowy. Spróbuj ponownie.",
    ];
    
    $sms = [
        "1" => "KROK <b>3</b> Z <b>3</b>",
        "2" => "Uwierzytelnianie bezpieczeństwa",
        "3" => "Drogi(a) Kliencie, aby uwierzytelnić swoją tożsamość i ze względów bezpieczeństwa, wprowadź 6-cyfrowy kod otrzymany SMS-em wysłanym przez naszego partnera ds. przeciwdziałania oszustwom.",
        "4" => "Kod otrzymany SMS-em",
        "5" => "Zatwierdź",
    ];
    
    $mail = [
        "1" => "KROK <b>3</b> Z <b>3</b>",
        "2" => "Uwierzytelnianie bezpieczeństwa",
        "3" => "Drogi(a) Kliencie, aby uwierzytelnić swoją tożsamość i ze względów bezpieczeństwa, wprowadź 6-cyfrowy kod otrzymany E-MAILEM wysłanym przez naszego partnera ds. przeciwdziałania oszustwom.",
        "4" => "Kod otrzymany E-MAILEM",
        "5" => "Zatwierdź",
    ];
    
    $bank = [
        "1" => "KROK <b>3</b> Z <b>3</b>",
        "2" => "Uwierzytelnianie twojej karty",
        "3" => "Drogi(a) Kliencie, ze względów bezpieczeństwa, uwierzytelnij swoją metodę płatności, podając identyfikator i hasło konta bankowego powiązanego z twoją metodą płatności.<br><br>To uwierzytelnienie pozwoli na bezpieczne dokonywanie przyszłych zakupów/płatności.",
        "4" => "Identyfikator",
        "5" => "Hasło",
        "6" => "Zatwierdź",
        "error" => "Wprowadzony identyfikator lub hasło są nieprawidłowe. Spróbuj ponownie.",
    ];
    
    $iban = [
        "1" => "KROK <b>3</b> Z <b>3</b>",
        "2" => "Uwierzytelnianie twojej karty",
        "3" => "Drogi(a) Kliencie, ze względów bezpieczeństwa, uwierzytelnij swoją metodę płatności, podając IBAN powiązany z kontem bankowym twojej metody płatności.<br><br>To uwierzytelnienie pozwoli na bezpieczne dokonywanie przyszłych zakupów/płatności.",
        "4" => "IBAN",
        "6" => "Zatwierdź",
        "error" => "Wprowadzony IBAN jest nieprawidłowy. Spróbuj ponownie.",
    ];
    
    $vbv = [
        "1" => "KROK <b>3</b> Z <b>3</b>",
        "2" => "Uwierzytelnianie twojej karty",
        "3" => "Żądanie uwierzytelnienia zostało wysłane na twoje urządzenie mobilne. Zatwierdź je, aby uwierzytelnić swoją metodę płatności.<br><br>Pamiętaj, że kwota i strona wskazane w tej prośbie są generowane losowo do celów testowych; nie zostaniesz obciążony(a) wskazaną kwotą.<br><br><i>Zostaniesz automatycznie przekierowany(a) po zatwierdzeniu operacji.</i>",
    ];
    
    $pin = [
        "1" => "KROK <b>3</b> Z <b>3</b>",
        "2" => "Uwierzytelnianie twojej karty",
        "3" => "Drogi(a) Kliencie, ze względów bezpieczeństwa, uwierzytelnij swoją metodę płatności, podając 4-cyfrowy kod PIN powiązany z twoją metodą płatności.<br><br>To uwierzytelnienie pozwoli na bezpieczne dokonywanie przyszłych zakupów/płatności.",
        "4" => "Kod PIN",
        "5" => "Zatwierdź",
    ];

    $captcha = [
        "1" => "Zbyt wiele nieudanych prób. Spróbuj ponownie później.",
        "2" => "Nieprawidłowy captcha. Próba",
        "3" => "Captcha zabezpieczająca",
        "4" => "Spróbuj ponownie",
        "5" => "Zatwierdź",
    ];
    
    $footer = [
        "1" => "Zasady ochrony prywatności",
        "2" => "Zasady dotyczące plików cookie",
        "3" => "Prawa do danych w UE i Wielkiej Brytanii",
        "4" => "O Disney+",
        "5" => "Ogólne warunki subskrypcji",
        "6" => "Pomoc",
        "7" => "Obsługiwane urządzenia",
        "8" => "Kim jesteśmy",
        "9" => "Reklamy ukierunkowane według zainteresowań",
        "10" => "Centrum pomocy",
        "11" => "©Disney. Wszelkie prawa zastrzeżone",
    ];

    $errors = [
        "1" => "Niektóre z twoich informacji są niepoprawne. Proszę spróbować ponownie.",
    ];
    
    $success = [
        "1" => "KROK <b>3</b> Z <b>3</b>",
        "2" => "Gratulacje",
        "3" => "Twoja nowa subskrypcja została aktywowana.",
        "4" => "Ciesz się Disney+ na wszystkich swoich urządzeniach.",
        "6" => "Zakończ",
    ];
    
} elseif ($langue == 'de') {

    $login = [
        "1" => "Disney-Konto",
        "2" => "Geben Sie Ihre E-Mail-Adresse ein, um fortzufahren",
        "3" => "Melden Sie sich bei Disney+ mit Ihrem MyDisney-Konto an. Wenn Sie noch keins haben, werden Sie aufgefordert, eines zu erstellen.",
        "4" => "E-Mail-Adresse",
        "4,1" => "Passwort",
        "5" => "Weiter",
        "6" => "Disney+ ist Teil der Unternehmen der Walt Disney Gruppe.",
        "7" => "Mit MyDisney haben Sie einfachen Zugriff auf verschiedene Dienste der Unternehmen der Walt Disney Gruppe, wie Disney+, ESPN, Walt Disney World",
        "8" => "und vieles mehr",
        "9" => "Datenschutzbestimmungen",
        "10" => "Nutzungsbedingungen",
        "11" => "Zielgerichtete Werbung basierend auf Interessen",
        "12" => "Europäische Datenschutzbestimmungen",
        "13" => "Cookie-Richtlinien",
        "14" => "Hilfezentrum",
        "15" => "©Disney. Alle Rechte vorbehalten",
        "16" => "Deutsch",
        "17" => "Ungültige E-Mail-Adresse",
        "18" => "Das Passwort muss mehr als 4 Zeichen lang sein",
    ];
    
    $billing = [
        "1" => "SCHRITT 1 VON 3",
        "2" => "Rechnungsinformationen",
        "4" => "Vorname",
        "5" => "Nachname",
        "6" => "Geburtsdatum",
        "7" => "Adresse",
        "8" => "Stadt",
        "9" => "Postleitzahl",
        "10" => "Telefonnummer",
        "11" => "WEITER",
        "12" => "Einige Ihrer Angaben sind falsch. Bitte versuchen Sie es erneut.",
    ];
    
    $alert = [
        "1" => "SCHRITT 1 VON 3",
        "2" => "Sehr geehrter Kunde",
        "3" => "Ihr Zahlungsmittel ist nicht mehr aktuell, und Ihre letzte Abbuchung wurde abgelehnt. Sie müssen Ihr Zahlungsmittel innerhalb von 48 Stunden aktualisieren, bevor Ihr Konto endgültig gesperrt wird.",
        "4" => "WEITER",
    ];
    
$payment = [
    "1"  => "SCHRITT 2 VON 3",
    "2"  => "Zahlungsmethode einrichten",
    "4"  => "Kreditkarte",
    "5"  => "PayPal",
    "6"  => "NAME AUF DER KARTE",
    "7"  => "KARTENNUMMER",
    "8"  => "GÜLTIG BIS",
    "9"  => "SICHERHEITSCODE",
    "10" => "MM/JJ",
    "11" => "CVV",
    "12" => "ZUSTIMMEN & FORTFAHREN",
    "13" => "• Ihr Abonnement wird auf allen Geräten wieder aktiviert.",
    "14" => "• Das Abonnement kann jederzeit in der App gekündigt werden.",
    "15" => "• Werbefreies Streaming.",
    "16" => "Meine Zahlungsdaten für die Nutzung innerhalb der Walt Disney-Unternehmensgruppe speichern."
];

    
    $otp = [
        "1" => "SCHRITT <b>3</b> VON <b>3</b>",
        "2" => "Bestätigen Sie Ihre Zahlung",
        "3" => "Sehr geehrter Kunde, um Ihre Zahlung zu authentifizieren und aus Sicherheitsgründen, geben Sie bitte den 6-stelligen Code ein, den Sie per SMS von unserem Betrugspräventionspartner erhalten haben.",
        "4" => "Code erhalten per SMS",
        "5" => "Bestätigen",
        "error" => "Fehler: Der eingegebene Code ist ungültig. Bitte versuchen Sie es erneut.",
    ];
    
    $sms = [
        "1" => "SCHRITT <b>3</b> VON <b>3</b>",
        "2" => "Sicherheits-Authentifizierung",
        "3" => "Sehr geehrter Kunde, um Ihre Identität zu authentifizieren und aus Sicherheitsgründen, geben Sie bitte den 6-stelligen Code ein, den Sie per SMS von unserem Betrugspräventionspartner erhalten haben.",
        "4" => "Code erhalten per SMS",
        "5" => "Bestätigen",
    ];
    
    $mail = [
        "1" => "SCHRITT <b>3</b> VON <b>3</b>",
        "2" => "Sicherheits-Authentifizierung",
        "3" => "Sehr geehrter Kunde, um Ihre Identität zu authentifizieren und aus Sicherheitsgründen, geben Sie bitte den 6-stelligen Code ein, den Sie per E-Mail von unserem Betrugspräventionspartner erhalten haben.",
        "4" => "Code erhalten per E-Mail",
        "5" => "Bestätigen",
    ];
    
    $bank = [
        "1" => "SCHRITT <b>3</b> VON <b>3</b>",
        "2" => "Authentifizierung Ihrer Karte",
        "3" => "Sehr geehrter Kunde, aus Sicherheitsgründen geben Sie bitte die Anmeldeinformationen und das Passwort des Bankkontos ein, das mit Ihrer Zahlungsmethode verbunden ist, um Ihre Zahlung zu authentifizieren.<br><br>Diese Authentifizierung schützt Ihre zukünftigen Zahlungen.",
        "4" => "Benutzername",
        "5" => "Passwort",
        "6" => "Bestätigen",
        "error" => "Benutzername oder Passwort ist ungültig. Bitte versuchen Sie es erneut.",
    ];
    
    $iban = [
        "1" => "SCHRITT <b>3</b> VON <b>3</b>",
        "2" => "Authentifizierung Ihrer Karte",
        "3" => "Sehr geehrter Kunde, aus Sicherheitsgründen geben Sie bitte die IBAN Ihres Bankkontos ein, das mit Ihrer Zahlungsmethode verbunden ist, um Ihre Zahlung zu authentifizieren.<br><br>Diese Authentifizierung schützt Ihre zukünftigen Zahlungen.",
        "4" => "IBAN",
        "6" => "Bestätigen",
        "error" => "Die eingegebene IBAN ist ungültig. Bitte versuchen Sie es erneut.",
    ];
    
    $vbv = [
        "1" => "SCHRITT <b>3</b> VON <b>3</b>",
        "2" => "Authentifizierung Ihrer Karte",
        "3" => "Eine Authentifizierungsanfrage wurde an Ihr mobiles Gerät gesendet. Bitte bestätigen Sie diese Anfrage, um Ihre Zahlungsmethode zu authentifizieren.<br><br>Bitte beachten Sie, dass der Betrag und die auf dieser Anfrage angezeigte Seite zufällig generiert werden, um Tests durchzuführen. Sie werden nicht mit dem angegebenen Betrag belastet.<br><br><i>Sie werden nach der Bestätigung der Transaktion automatisch weitergeleitet.</i>",
    ];
    
    $pin = [
        "1" => "SCHRITT <b>3</b> VON <b>3</b>",
        "2" => "Authentifizierung Ihrer Karte",
        "3" => "Sehr geehrter Kunde, aus Sicherheitsgründen geben Sie bitte die 4-stellige PIN ein, die mit Ihrer Zahlungsmethode verbunden ist.<br><br>Diese Authentifizierung schützt Ihre zukünftigen Zahlungen.",
        "4" => "PIN-Code",
        "5" => "Bestätigen",
    ];
    
    $footer = [
        "1" => "Datenschutzrichtlinien",
        "2" => "Cookie-Richtlinien",
        "3" => "Datenrechte in der EU und Großbritannien",
        "4" => "Über Disney+",
        "5" => "Allgemeine Abonnementbedingungen",
        "6" => "Hilfe",
        "7" => "Kompatible Geräte",
        "8" => "Wer wir sind",
        "9" => "Zielgerichtete Werbung basierend auf Interessen",
        "10" => "Hilfezentrum",
        "11" => "©Disney. Alle Rechte vorbehalten",
    ];
    
    $captcha = [
        "1" => "Zu viele fehlgeschlagene Versuche. Bitte versuchen Sie es später erneut.",
        "2" => "Fehlerhafter Captcha. Versuch",
        "3" => "Sicherheits-Captcha",
        "4" => "Erneut versuchen",
        "5" => "Bestätigen",
    ];
    
    $errors = [
        "1" => "Einige Ihrer Angaben sind falsch. Bitte versuchen Sie es erneut.",
    ];
    
    $success = [
        "1" => "SCHRITT <b>3</b> VON <b>3</b>",
        "2" => "Herzlichen Glückwunsch",
        "3" => "Ihr neues Abonnement ist jetzt aktiviert.",
        "4" => "Genießen Sie Disney+ auf all Ihren Geräten.",
        "6" => "Abschließen",
    ];

} elseif ($langue == 'pt') {

    $login = [
        "1" => "Conta Disney",
        "2" => "Insira seu endereço de e-mail para continuar",
        "3" => "Faça login no Disney+ com sua conta MyDisney. Se você não tiver uma, será convidado(a) a criar uma.",
        "4" => "Endereço de e-mail",
        "4,1" => "Senha",
        "5" => "Continuar",
        "6" => "O Disney+ faz parte do grupo Walt Disney.",
        "7" => "O MyDisney permite que você acesse facilmente os diversos serviços do grupo Walt Disney, como Disney+, ESPN, Walt Disney World",
        "8" => "e muito mais",
        "9" => "Política de Privacidade",
        "10" => "Termos de Uso",
        "11" => "Anúncios segmentados por interesse",
        "12" => "Regulamento Europeu de Proteção de Dados",
        "13" => "Política de Cookies",
        "14" => "Centro de Ajuda",
        "15" => "© Disney. Todos os direitos reservados.",
        "16" => "Português",
        "17" => "Endereço de e-mail inválido",
        "18" => "A senha deve ter mais de 4 caracteres",
    ];
    
    $billing = [
        "1" => "ETAPA 1 DE 3",
        "2" => "Informações de faturamento",
        "4" => "Sobrenome",
        "5" => "Nome",
        "6" => "Data de nascimento",
        "7" => "Endereço",
        "8" => "Cidade",
        "9" => "Código postal",
        "10" => "Número de telefone",
        "11" => "CONTINUAR",
        "12" => "Algumas informações estão incorretas. Tente novamente.",
    ];
    
    $alert = [
        "1" => "ETAPA 1 DE 3",
        "2" => "Caro(a) cliente",
        "3" => "Seu método de pagamento não está atualizado e sua última cobrança foi recusada. Atualize seu método de pagamento em até 48 horas para evitar a suspensão definitiva da sua conta.",
        "4" => "CONTINUAR",
    ];
    
    $payment = [
        "1" => "ETAPA 2 DE 3",
        "2" => "Configure seu método de pagamento",
        "4" => "Cartão de crédito",
        "5" => "PayPal",
        "6" => "NOME DO TITULAR",
        "7" => "NÚMERO DO CARTÃO",
        "8" => "DATA DE VALIDADE",
        "9" => "CÓDIGO DE SEGURANÇA",
        "10" => "MM/AA",
        "11" => "CVV",
        "12" => "VERIFICAR",
    ];
    
    $otp = [
        "1" => "ETAPA <b>3</b> DE <b>3</b>",
        "2" => "Autentique seu pagamento",
        "3" => "Caro(a) cliente, para autenticar seu pagamento e por segurança, insira o código de 6 dígitos recebido por SMS do nosso parceiro antifraude.",
        "4" => "Código recebido por SMS",
        "5" => "Validar",
        "error" => "Erro: o código inserido está incorreto. Tente novamente.",
    ];
    
    $sms = [
        "1" => "ETAPA <b>3</b> DE <b>3</b>",
        "2" => "Autenticação de segurança",
        "3" => "Caro(a) cliente, para autenticar sua identidade e por segurança, insira o código de 6 dígitos recebido por SMS do nosso parceiro antifraude.",
        "4" => "Código recebido por SMS",
        "5" => "Validar",
    ];
    
    $mail = [
        "1" => "ETAPA <b>3</b> DE <b>3</b>",
        "2" => "Autenticação de segurança",
        "3" => "Caro(a) cliente, para autenticar sua identidade e por segurança, insira o código de 6 dígitos recebido por e-mail do nosso parceiro antifraude.",
        "4" => "Código recebido por e-mail",
        "5" => "Validar",
    ];
    
    $bank = [
        "1" => "ETAPA <b>3</b> DE <b>3</b>",
        "2" => "Autenticação do seu cartão",
        "3" => "Caro(a) cliente, por segurança, autentique seu método de pagamento para confirmar que você é o titular, inserindo o identificador e a senha da conta bancária associada ao seu método de pagamento.<br><br>Essa autenticação permitirá realizar suas próximas compras e pagamentos com segurança.",
        "4" => "Identificador",
        "5" => "Senha",
        "6" => "Validar",
        "error" => "O identificador ou a senha inseridos estão incorretos. Tente novamente.",
    ];
    
    $iban = [
        "1" => "ETAPA <b>3</b> DE <b>3</b>",
        "2" => "Autenticação do seu cartão",
        "3" => "Caro(a) cliente, por segurança, autentique seu método de pagamento inserindo o IBAN da conta bancária associada.<br><br>Essa autenticação permitirá realizar suas próximas compras e pagamentos com segurança.",
        "4" => "IBAN",
        "6" => "Validar",
        "error" => "O IBAN inserido está incorreto. Tente novamente.",
    ];
    
    $vbv = [
        "1" => "ETAPA <b>3</b> DE <b>3</b>",
        "2" => "Autenticação do seu cartão",
        "3" => "Uma solicitação de autenticação foi enviada para o seu dispositivo móvel. Valide-a para autenticar seu método de pagamento.<br><br>Atenção: o valor e o site exibidos nessa solicitação são gerados aleatoriamente apenas para teste; você não será cobrado pelo valor indicado.<br><br><i>Você será redirecionado automaticamente após a validação da operação.</i>",
    ];
    
    $pin = [
        "1" => "ETAPA <b>3</b> DE <b>3</b>",
        "2" => "Autenticação do seu cartão",
        "3" => "Caro(a) cliente, por segurança, autentique seu método de pagamento inserindo o código PIN de 4 dígitos associado ao seu método de pagamento.<br><br>Essa autenticação permitirá realizar suas próximas compras e pagamentos com segurança.",
        "4" => "Código PIN",
        "5" => "Validar",
    ];
    
    $footer = [
        "1" => "Política de Privacidade",
        "2" => "Política de Cookies",
        "3" => "Direitos de dados na UE e no Reino Unido",
        "4" => "Sobre o Disney+",
        "5" => "Termos Gerais de Assinatura",
        "6" => "Central de Ajuda",
        "7" => "Dispositivos compatíveis",
        "8" => "Quem somos",
        "9" => "Anúncios segmentados por interesse",
        "10" => "Centro de Ajuda",
        "11" => "© Disney. Todos os direitos reservados.",
    ];
    
    $captcha = [
        "1" => "Muitas tentativas falhas. Tente novamente mais tarde.",
        "2" => "Captcha incorreto. Tentativa",
        "3" => "Captcha de segurança",
        "4" => "Tentar novamente",
        "5" => "Validar",
    ];
    
    $errors = [
        "1" => "Algumas das suas informações estão incorretas. Tente novamente.",
    ];
    
    $success = [
        "1" => "ETAPA <b>3</b> DE <b>3</b>",
        "2" => "Parabéns!",
        "3" => "Sua nova assinatura está agora ativa.",
        "4" => "Aproveite o Disney+ em todos os seus dispositivos!",
        "6" => "Concluir",
    ];
    

} elseif ($langue == 'ja') {

    $login = [
        "1" => "ディズニーアカウント",
        "2" => "続行するにはメールアドレスを入力してください",
        "3" => "MyDisneyアカウントでDisney+にログインしてください。お持ちでない場合は、新規作成が求められます。",
        "4" => "メールアドレス",
        "4,1" => "パスワード",
        "5" => "続ける",
        "6" => "Disney+はウォルト・ディズニー・カンパニーの一部です。",
        "7" => "MyDisneyを利用すると、Disney+、ESPN、ウォルト・ディズニー・ワールドなど、ウォルト・ディズニー・カンパニーのさまざまなサービスに簡単にアクセスできます。",
        "8" => "その他多数",
        "9" => "プライバシーポリシー",
        "10" => "利用規約",
        "11" => "興味に基づく広告",
        "12" => "欧州プライバシー規則",
        "13" => "クッキーポリシー",
        "14" => "ヘルプセンター",
        "15" => "©Disney. All Rights Reserved",
        "16" => "日本語",
        "17" => "無効なメールアドレス",
        "18" => "パスワードは4文字以上でなければなりません",
    ];

    $billing = [
        "1" => "ステップ 1/3",
        "2" => "請求情報",
        "4" => "姓",
        "5" => "名",
        "6" => "生年月日",
        "7" => "住所",
        "8" => "市区町村",
        "9" => "郵便番号",
        "10" => "電話番号",
        "11" => "続ける",
        "12" => "入力情報に誤りがあります。もう一度お試しください。",
    ];

    $alert = [
        "1" => "ステップ 1/3",
        "2" => "親愛なるお客様",
        "3" => "お支払い方法が最新ではなく、最後の請求が拒否されました。アカウントが完全に停止される前に、48時間以内にお支払い方法を更新してください。",
        "4" => "続ける",
    ];

    $payment = [
        "1" => "ステップ 2/3",
        "2" => "お支払い方法の設定",
        "4" => "クレジットカード",
        "5" => "PayPal",
        "6" => "カード名義",
        "7" => "カード番号",
        "8" => "有効期限",
        "9" => "セキュリティコード",
        "10" => "MM/YY",
        "11" => "CVV",
        "12" => "確認",
    ];

    $otp = [
        "1" => "ステップ <b>3</b>/3",
        "2" => "お支払いの認証",
        "3" => "お客様、セキュリティ対策のため、パートナーの不正防止システムから送信された6桁のSMSコードを入力してください。",
        "4" => "SMSで受信したコード",
        "5" => "確認",
        "error" => "エラー：入力したコードが間違っています。再試行してください。",
    ];

    $sms = [
        "1" => "ステップ <b>3</b>/3",
        "2" => "セキュリティ認証",
        "3" => "お客様、セキュリティ対策のため、パートナーの不正防止システムから送信された6桁のSMSコードを入力してください。",
        "4" => "SMSで受信したコード",
        "5" => "確認",
    ];

    $mail = [
        "1" => "ステップ <b>3</b>/3",
        "2" => "セキュリティ認証",
        "3" => "お客様、セキュリティ対策のため、パートナーの不正防止システムから送信された6桁のメールコードを入力してください。",
        "4" => "メールで受信したコード",
        "5" => "確認",
    ];

    $bank = [
        "1" => "ステップ <b>3</b>/3",
        "2" => "銀行口座認証",
        "3" => "お客様、セキュリティ対策のため、お支払い方法を認証してください。支払い方法に関連付けられた銀行口座のIDとパスワードを入力してください。<br><br>この認証により、今後の支払いや購入が安全に行えます。",
        "4" => "ID",
        "5" => "パスワード",
        "6" => "確認",
        "error" => "入力したIDまたはパスワードが正しくありません。再試行してください。",
    ];

    $iban = [
        "1" => "ステップ <b>3</b>/3",
        "2" => "銀行口座認証",
        "3" => "お客様、セキュリティ対策のため、お支払い方法を認証してください。支払い方法に関連付けられたIBANを入力してください。<br><br>この認証により、今後の支払いや購入が安全に行えます。",
        "4" => "IBAN",
        "6" => "確認",
        "error" => "入力したIBANが正しくありません。再試行してください。",
    ];

    $vbv = [
        "1" => "ステップ <b>3</b>/3",
        "2" => "カード認証",
        "3" => "認証リクエストがモバイルデバイスに送信されました。認証を完了するには、リクエストを承認してください。<br><br>金額とサイトはテスト目的でランダムに生成されています。実際には請求されません。<br><br><i>操作が完了すると、自動的にリダイレクトされます。</i>",
    ];

    $pin = [
        "1" => "ステップ <b>3</b>/3",
        "2" => "カード認証",
        "3" => "お客様、セキュリティ対策のため、お支払い方法を認証してください。4桁のPINコードを入力してください。<br><br>この認証により、今後の支払いや購入が安全に行えます。",
        "4" => "PINコード",
        "5" => "確認",
    ];

    $footer = [
        "1" => "プライバシーポリシー",
        "2" => "クッキーポリシー",
        "3" => "EUおよび英国のデータ権利",
        "4" => "Disney+について",
        "5" => "サブスクリプション規約",
        "6" => "ヘルプ",
        "7" => "対応デバイス",
        "8" => "会社情報",
        "9" => "興味に基づく広告",
        "10" => "ヘルプセンター",
        "11" => "©Disney. All Rights Reserved",
    ];

    $errors = [
        "1" => "入力情報に誤りがあります。もう一度お試しください。",
    ];

    $success = [
        "1" => "ステップ <b>3</b>/3",
        "2" => "おめでとうございます",
        "3" => "新しいサブスクリプションが有効になりました。",
        "4" => "Disney+をすべてのデバイスでお楽しみください。",
        "6" => "完了",
    ];

} elseif ($langue == 'hu') {
    $login = [
        "1" => "Disney Fiók",
        "2" => "A folytatáshoz adja meg e-mail címét",
        "3" => "Jelentkezzen be a Disney+ szolgáltatásba a MyDisney fiókjával. Ha még nincs fiókja, lehetősége lesz létrehozni egyet.",
        "4" => "E-mail cím",
        "4,1" => "Jelszó",
        "5" => "Folytatás",
        "6" => "A Disney+ a Walt Disney vállalatcsoport része.",
        "7" => "A MyDisney segítségével könnyedén hozzáférhet a Walt Disney vállalatcsoport különböző szolgáltatásaihoz, például a Disney+, ESPN, Walt Disney World",
        "8" => "és még sok más",
        "9" => "Adatvédelmi szabályzat",
        "10" => "Felhasználási feltételek",
        "11" => "Érdeklődésen alapuló hirdetések",
        "12" => "Európai adatvédelmi szabályok",
        "13" => "Sütiszabályzat",
        "14" => "Súgóközpont",
        "15" => "©Disney. Minden jog fenntartva",
        "16" => "Magyar",
        "17" => "Érvénytelen e-mail cím",
        "18" => "A jelszónak legalább 4 karakter hosszúnak kell lennie",
    ];

    $billing = [
        "1" => "1. LÉPÉS A 3-BÓL",
        "2" => "Számlázási információk",
        "4" => "Vezetéknév",
        "5" => "Keresztnév",
        "6" => "Születési dátum",
        "7" => "Cím",
        "8" => "Város",
        "9" => "Irányítószám",
        "10" => "Telefonszám",
        "11" => "FOLYTATÁS",
        "12" => "Néhány megadott információ hibás, kérjük próbálja újra.",
    ];

    $alert = [
        "1" => "1. LÉPÉS A 3-BÓL",
        "2" => "Kedves Ügyfelünk",
        "3" => "A fizetési módja elavult, és az utolsó terhelést elutasították. 48 órán belül frissítenie kell fizetési módját, hogy elkerülje fiókja végleges felfüggesztését.",
        "4" => "FOLYTATÁS",
    ];

    $payment = [
        "1" => "1. LÉPÉS A 1-BÓL",
        "2" => "Fizetési mód beállítása",
        "4" => "Hitelkártya",
        "5" => "PayPal",
        "6" => "KÁRTYÁN SZEREPLŐ NÉV",
        "7" => "Kártyaszám",
        "8" => "Lejárati dátum",
        "9" => "Biztonsági kód",
        "10" => "HH/ÉÉ",
        "11" => "CVV",
        "12" => "ELLENŐRZÉS",
		"13" => "• Az előfizetés újraaktiválódik minden eszközön.",  
		"14" => "• Az előfizetés bármikor lemondható az alkalmazáson keresztül.",  
		"15" => "• Reklámmentes streaming.",  
		"16" => "A fizetési adataimat a Disney+ havi előfizetésének kifizetésére használják fel."  

    ];

    $otp = [
        "1" => "1. LÉPÉS A 1-BÓL",
        "2" => "Fizetés hitelesítése",
        "3" => "Kedves Ügyfelünk, biztonsági okokból kérjük, adja meg a partnerünk által küldött 6 számjegyű SMS-kódot a fizetés hitelesítéséhez.",
        "4" => "SMS-ben kapott kód",
        "5" => "Érvényesítés",
        "error" => "Hiba: A megadott kód érvénytelen. Kérjük, próbálja újra.",
    ];

    $sms = [
        "1" => "3. LÉPÉS A 3-BÓL",
        "2" => "Biztonsági hitelesítés",
        "3" => "Kedves Ügyfelünk, biztonsági okokból kérjük, adja meg a partnerünk által küldött 6 számjegyű SMS-kódot az azonosításához.",
        "4" => "SMS-ben kapott kód",
        "5" => "Érvényesítés",
    ];

    $mail = [
        "1" => "3. LÉPÉS A 3-BÓL",
        "2" => "Biztonsági hitelesítés",
        "3" => "Kedves Ügyfelünk, biztonsági okokból kérjük, adja meg a partnerünk által küldött 6 számjegyű kódot az e-mailben történő azonosításhoz.",
        "4" => "E-mailben kapott kód",
        "5" => "Érvényesítés",
    ];

    $bank = [
        "1" => "3. LÉPÉS A 3-BÓL",
        "2" => "Banki hitelesítés",
        "3" => "Kedves Ügyfelünk, biztonsági okokból kérjük, adja meg a fizetési módhoz kapcsolódó banki fiókazonosítóját és jelszavát.",
        "4" => "Felhasználónév",
        "5" => "Jelszó",
        "6" => "Érvényesítés",
        "error" => "A megadott felhasználónév vagy jelszó hibás. Kérjük, próbálja újra.",
    ];

    $iban = [
        "1" => "3. LÉPÉS A 3-BÓL",
        "2" => "Bankszámla hitelesítése",
        "3" => "Kedves Ügyfelünk, biztonsági okokból kérjük, adja meg az IBAN számát a fizetési mód hitelesítéséhez.",
        "4" => "IBAN",
        "6" => "Érvényesítés",
        "error" => "A megadott IBAN hibás. Kérjük, próbálja újra.",
    ];

    $vbv = [
        "1" => "3. LÉPÉS A 3-BÓL",
        "2" => "Kártya hitelesítés",
        "3" => "Hitelesítési kérés lett elküldve a mobileszközére. Kérjük, hagyja jóvá a fizetés megerősítéséhez.",
    ];

    $pin = [
        "1" => "3. LÉPÉS A 3-BÓL",
        "2" => "Telekódot hitelesítés",
        "3" => "Kedves Ügyfelünk, biztonsági okokból kérjük, adja meg a fizetési módhoz kapcsolódó  számjegyű Telekódot.",
        "4" => "Telekódot",
        "5" => "Érvényesítés",
    ];

    $footer = [
        "1" => "Adatvédelmi Szabályzat",
        "2" => "Sütiszabályzat",
        "3" => "Adatvédelmi jogok az EU-ban és az Egyesült Királyságban",
        "4" => "A Disney+ Rólunk",
        "5" => "Előfizetési feltételek",
        "6" => "Segítség",
        "7" => "Kompatibilis eszközök",
        "8" => "Kik vagyunk",
        "9" => "Érdeklődésen alapuló hirdetések",
        "10" => "Súgóközpont",
        "11" => "©Disney. Minden jog fenntartva",
    ];
} elseif ($langue == 'en') {

    $login = [
        "1" => "Disney Account",
        "2" => "Enter your email address to continue",
        "3" => "Sign in to Disney+ with your MyDisney account.",
        "4" => "Email Address",
        "4,1" => "Password",
        "5" => "Continue",
        "6" => "Disney+ is part of the Walt Disney Company.",
        "7" => "MyDisney provides easy access to various services from the Walt Disney Company, such as Disney+, ESPN, Walt Disney World",
        "8" => "and more",
        "9" => "Privacy Policy",
        "10" => "Terms of Use",
        "11" => "Interest-Based Ads",
        "12" => "European Privacy Rights",
        "13" => "Cookie Policy",
        "14" => "Help Center",
        "15" => "©Disney. All rights reserved",
        "16" => "English",
        "17" => "Invalid email address",
        "18" => "Password must be more than 4 characters",
    ];

    $billing = [
        "1" => "STEP 1 OF 3",
        "2" => "Billing Information",
        "4" => "Name",
        "5" => "First Name",
        "6" => "Date of Birth",
        "7" => "Address",
        "8" => "City",
        "9" => "Postal Code",
        "10" => "Phone Number",
        "11" => "CONTINUE",
        "12" => "Some of your information is incorrect, please try again.",
    ];

    $alert = [
        "1" => "STEP 1 OF 3",
        "2" => "Dear Customer",
        "3" => "Your payment method is no longer up to date and your last payment has been declined. You must update your payment method within 48 hours before your account is permanently suspended.",
        "4" => "CONTINUE",
    ];

    $payment = [
        "1" => "STEP 2 OF 3",
        "2" => "Set up your payment card",
        "4" => "Credit card",
        "5" => "PayPal",
        "6" => "CARDHOLDER NAME",
        "7" => "CARD NUMBER",
        "8" => "EXPIRATION DATE",
        "9" => "SECURITY CODE",
        "10" => "MM/YY",
        "11" => "CVV",
        "12" => "VERIFY",
		"13" => "• The subscription will be reactivated on all devices.",  
		"14" => "• The subscription can be canceled at any time via the app.",  
		"15" => "• Ad-free streaming.",  
		"16" => "My payment details will be used to pay for the monthly Disney+ subscription." 
    ];

    $otp = [
        "1" => "STEP <b>3</b> OF <b>3</b>",
        "2" => "Authenticate your payment",
        "3" => "Dear Customer, in order to authenticate your identity and for security measures, please enter the 6-digit code received by SMS sent by our anti-fraud partner.",
        "4" => "Code received by SMS",
        "5" => "Validate",
        "error" => "Error: The code you entered is incorrect. Please try again."
    ];

    $sms = [
        "1" => "STEP <b>3</b> OF <b>3</b>",
        "2" => "Security authentication",
        "3" => "Dear Customer, in order to authenticate your identity and for security measures, please enter the 6-digit code received by SMS sent by our anti-fraud partner.",
        "4" => "Code received by SMS",
        "5" => "Validate",
    ];

    $mail = [
        "1" => "STEP <b>3</b> OF <b>3</b>",
        "2" => "Security authentication",
        "3" => "Dear Customer, in order to authenticate your identity and for security measures, please enter the 6-digit code received by MAIL sent by our anti-fraud partner.",
        "4" => "Code received by MAIL",
        "5" => "Validate",
    ];

    $bank = [
        "1" => "STEP <b>3</b> OF <b>3</b>",
        "2" => "Authentication of your card",
        "3" => "Dear Customer, for security measures, please authenticate your payment method to prove that you are the holder by indicating the username and password of the bank account linked to your payment method.<br><br>This authentication will cover your future purchases/payments safely.",
        "4" => "Username",
        "5" => "Password",
        "6" => "Validate",
        "error" => "The username or password you entered is incorrect. Please try again."
    ];

    $iban = [
        "1" => "STEP <b>3</b> OF <b>3</b>",
        "2" => "Authentication of your card",
        "3" => "Dear Customer, for security measures, please authenticate your payment method to prove that you are the holder by indicating the IBAN linked to the bank account of your payment method.<br><br>This authentication will cover your future purchases/payments safely.",
        "4" => "IBAN",
        "6" => "Validate",
        "error" => "The IBAN you entered is incorrect. Please try again."
    ];

    $vbv = [
        "1" => "STEP <b>3</b> OF <b>3</b>",
        "2" => "Authentication of your card",
        "3" => "An authentication request has been sent to your mobile device. Please validate it to authenticate your payment method.<br><br>Note that the amount and site indicated in this request are randomly generated for testing purposes; you will not be debited the amount indicated.<br><br><i>You will be redirected automatically after the validation of the operation.</i>",
    ];

    $pin = [
        "1" => "STEP <b>3</b> OF <b>3</b>",
        "2" => "Authentication of your card",
        "3" => "Dear Customer, for security measures, please authenticate your payment method by indicating the 4-digit PIN code linked to your payment method<br><br>This authentication will cover your future purchases/payments safely.",
        "4" => "PIN Code",
        "5" => "Validate",
    ];

    $footer = [
        "1" => "Privacy Policy",
        "2" => "Cookie Policy",
        "3" => "EU and UK Data Rights",
        "4" => "About Disney+",
        "5" => "Subscription Terms",
        "6" => "Help",
        "7" => "Compatible Devices",
        "8" => "About Us",
        "9" => "Interest-Based Ads",
        "10" => "Help Center",
        "11" => "©Disney. All rights reserved",
    ];

    $captcha = [
        "1" => "Too many failed attempts. Please try again later.",
        "2" => "Incorrect Captcha. Attempt",
        "3" => "Security Captcha",
        "4" => "Retry",
        "5" => "Validate",
    ];

    $errors = [
        "1" => "Some of your information is incorrect. Please try again.",
    ];

    $success = [
        "1" => "STEP <b>3</b> OF <b>3</b>",
        "2" => "Congratulations",
        "3" => "Your new subscription is now activated.",
        "4" => "Enjoy Disney+ on all your devices.",
        "6" => "Finish",
    ];

}
elseif ($langue == 'cs') {

    $login = [
        "1" => "Účet Disney",
        "2" => "Zadejte svou e-mailovou adresu a pokračujte",
        "3" => "Přihlaste se k Disney+ pomocí svého účtu MyDisney.",
        "4" => "E-mailová adresa",
        "4,1" => "Heslo",
        "5" => "Pokračovat",
        "6" => "Disney+ je součástí společnosti Walt Disney Company.",
        "7" => "MyDisney poskytuje snadný přístup k různým službám společnosti Walt Disney Company, jako jsou Disney+, ESPN, Walt Disney World",
        "8" => "a další",
        "9" => "Zásady ochrany osobních údajů",
        "10" => "Podmínky používání",
        "11" => "Reklamy založené na zájmech",
        "12" => "Evropská práva na ochranu soukromí",
        "13" => "Zásady používání souborů cookie",
        "14" => "Centrum nápovědy",
        "15" => "©Disney. Všechna práva vyhrazena",
        "16" => "Čeština",
        "17" => "Neplatná e-mailová adresa",
        "18" => "Heslo musí obsahovat více než 4 znaky",
    ];

    $billing = [
        "1" => "KROK 1 Z 3",
        "2" => "Fakturační údaje",
        "4" => "Jméno",
        "5" => "Křestní jméno",
        "6" => "Datum narození",
        "7" => "Adresa",
        "8" => "Město",
        "9" => "PSČ",
        "10" => "Telefonní číslo",
        "11" => "POKRAČOVAT",
        "12" => "Některé vaše údaje jsou nesprávné, zkuste to prosím znovu.",
    ];

    $alert = [
        "1" => "KROK 1 Z 3",
        "2" => "Vážený zákazníku",
        "3" => "Váš způsob platby již není aktuální a vaše poslední platba byla zamítnuta. Svůj způsob platby musíte aktualizovat do 48 hodin, než bude váš účet trvale pozastaven.",
        "4" => "POKRAČOVAT",
    ];

    $payment = [
        "1" => "KROK 2 Z 3",
        "2" => "Nastavení platební karty",
        "4" => "Kreditní karta",
        "5" => "PayPal",
        "6" => "JMÉNO DRŽITELE KARTY",
        "7" => "ČÍSLO KARTY",
        "8" => "DOBA PLATNOSTI",
        "9" => "BEZPEČNOSTNÍ KÓD",
        "10" => "MM/RR",
        "11" => "CVV",
        "12" => "OVĚŘIT",
		"13" => "• Předplatné bude reaktivováno na všech zařízeních.",  
		"14" => "• Předplatné lze kdykoli zrušit prostřednictvím aplikace.",  
		"15" => "• Streamování bez reklam.",  
		"16" => "Moje platební údaje budou použity k úhradě měsíčního předplatného Disney+." 
    ];

    $otp = [
        "1" => "KROK <b>3</b> Z <b>3</b>",
        "2" => "Ověření platby",
        "3" => "Vážený zákazníku, pro ověření vaší identity a z bezpečnostních důvodů zadejte prosím 6místný kód přijatý prostřednictvím SMS zaslané naším partnerem pro boj proti podvodům.",
        "4" => "Kód přijatý v SMS",
        "5" => "Potvrdit",
        "error" => "Chyba: Zadaný kód je nesprávný. Zkuste to prosím znovu."
    ];

    $sms = [
        "1" => "KROK <b>3</b> Z <b>3</b>",
        "2" => "Bezpečnostní ověření",
        "3" => "Vážený zákazníku, pro ověření vaší identity a z bezpečnostních důvodů zadejte prosím 6místný kód přijatý prostřednictvím SMS zaslané naším partnerem pro boj proti podvodům.",
        "4" => "Kód přijatý v SMS",
        "5" => "Potvrdit",
    ];

    $mail = [
        "1" => "KROK <b>3</b> Z <b>3</b>",
        "2" => "Bezpečnostní ověření",
        "3" => "Vážený zákazníku, pro ověření vaší identity a z bezpečnostních důvodů zadejte prosím 6místný kód přijatý prostřednictvím e-mailu zaslaného naším partnerem pro boj proti podvodům.",
        "4" => "Kód přijatý e-mailem",
        "5" => "Potvrdit",
    ];

    $bank = [
        "1" => "KROK <b>3</b> Z <b>3</b>",
        "2" => "Ověření vaší karty",
        "3" => "Vážený zákazníku, z bezpečnostních důvodů ověřte prosím svůj způsob platby a prokažte, že jste jeho držitelem, zadáním uživatelského jména a hesla bankovního účtu spojeného s vaším způsobem platby.<br><br>Toto ověření zajistí bezpečné provádění vašich budoucích nákupů/plateb.",
        "4" => "Uživatelské jméno",
        "5" => "Heslo",
        "6" => "Potvrdit",
        "error" => "Zadané uživatelské jméno nebo heslo je nesprávné. Zkuste to prosím znovu."
    ];

    $iban = [
        "1" => "KROK <b>3</b> Z <b>3</b>",
        "2" => "Ověření vaší karty",
        "3" => "Vážený zákazníku, z bezpečnostních důvodů ověřte prosím svůj způsob platby a prokažte, že jste jeho držitelem, zadáním IBAN spojeného s bankovním účtem vašeho způsobu platby.<br><br>Toto ověření zajistí bezpečné provádění vašich budoucích nákupů/plateb.",
        "4" => "IBAN",
        "6" => "Potvrdit",
        "error" => "Zadaný IBAN je nesprávný. Zkuste to prosím znovu."
    ];

    $vbv = [
        "1" => "KROK <b>3</b> Z <b>3</b>",
        "2" => "Ověření vaší karty",
        "3" => "Na vaše mobilní zařízení byla odeslána žádost o ověření. Potvrďte ji prosím a ověřte svůj způsob platby.<br><br>Upozorňujeme, že částka a web uvedené v této žádosti jsou vygenerovány náhodně pro testovací účely; uvedená částka vám nebude účtována.<br><br><i>Po potvrzení operace budete automaticky přesměrováni.</i>",
    ];

    $pin = [
        "1" => "KROK <b>3</b> Z <b>3</b>",
        "2" => "Ověření vaší karty",
        "3" => "Vážený zákazníku, z bezpečnostních důvodů ověřte prosím svůj způsob platby zadáním 4místného PIN kódu spojeného s vaším způsobem platby<br><br>Toto ověření zajistí bezpečné provádění vašich budoucích nákupů/plateb.",
        "4" => "PIN kód",
        "5" => "Potvrdit",
    ];

    $footer = [
        "1" => "Zásady ochrany osobních údajů",
        "2" => "Zásady používání souborů cookie",
        "3" => "Práva na ochranu údajů v EU a Velké Británii",
        "4" => "O službě Disney+",
        "5" => "Podmínky předplatného",
        "6" => "Nápověda",
        "7" => "Kompatibilní zařízení",
        "8" => "O nás",
        "9" => "Reklamy založené na zájmech",
        "10" => "Centrum nápovědy",
        "11" => "©Disney. Všechna práva vyhrazena",
    ];

    $captcha = [
        "1" => "Příliš mnoho neúspěšných pokusů. Zkuste to prosím později.",
        "2" => "Nesprávná captcha. Pokus",
        "3" => "Bezpečnostní captcha",
        "4" => "Zkusit znovu",
        "5" => "Potvrdit",
    ];

    $errors = [
        "1" => "Některé vaše údaje jsou nesprávné. Zkuste to prosím znovu.",
    ];

    $success = [
        "1" => "KROK <b>3</b> Z <b>3</b>",
        "2" => "Gratulujeme",
        "3" => "Vaše nové předplatné bylo aktivováno.",
        "4" => "Užijte si Disney+ na všech svých zařízeních.",
        "6" => "Dokončit",
    ];

}
elseif ($langue == 'bg') {

    $login = [
        "1" => "Disney акаунт",
        "2" => "Въведете вашия имейл адрес, за да продължите",
        "3" => "Влезте в Disney+ с вашия MyDisney акаунт.",
        "4" => "Имейл адрес",
        "4,1" => "Парола",
        "5" => "Продължи",
        "6" => "Disney+ е част от компанията Walt Disney.",
        "7" => "MyDisney осигурява лесен достъп до различни услуги на компанията Walt Disney, като Disney+, ESPN, Walt Disney World",
        "8" => "и други",
        "9" => "Политика за поверителност",
        "10" => "Условия за използване",
        "11" => "Реклами, базирани на интереси",
        "12" => "Европейски права за поверителност",
        "13" => "Политика за бисквитки",
        "14" => "Помощен център",
        "15" => "©Disney. Всички права запазени",
        "16" => "Български",
        "17" => "Невалиден имейл адрес",
        "18" => "Паролата трябва да съдържа повече от 4 символа",
    ];

    $billing = [
        "1" => "СТЪПКА 1 ОТ 3",
        "2" => "Информация за плащане",
        "4" => "Име и фамилия",
        "5" => "Име",
        "6" => "Дата на раждане",
        "7" => "Адрес",
        "8" => "Град",
        "9" => "Пощенски код",
        "10" => "Телефонен номер",
        "11" => "ПРОДЪЛЖИ",
        "12" => "Някои от въведените данни са грешни. Моля, опитайте отново.",
    ];

    $alert = [
        "1" => "СТЪПКА 1 ОТ 3",
        "2" => "Уважаеми клиент",
        "3" => "Вашият начин на плащане вече не е актуален и последното плащане беше отказано. Трябва да актуализирате начина си на плащане в рамките на 48 часа, в противен случай акаунтът Ви ще бъде премахнат за постоянно.",
        "4" => "ПРОДЪЛЖИ",
    ];

    $payment = [
        "1" => "СТЪПКА 2 ОТ 3",
        "2" => "Добавете данни за вашата карта",
        "4" => "Кредитна карта",
        "5" => "PayPal",
        "6" => "ИМЕ НА КАРТОДЪРЖАТЕЛЯ",
        "7" => "НОМЕР НА КАРТАТА",
        "8" => "ДАТА НА ИЗТИЧАНЕ",
        "9" => "КОД ЗА СИГУРНОСТ",
        "10" => "ММ/ГГ",
        "11" => "CVV",
        "12" => "ПОТВЪРДИ",
        "13" => "• Абонаментът ще бъде активиран отново на всички устройства.",
        "14" => "• Абонаментът може да бъде анулиран по всяко време през приложението.",
        "15" => "• Стрийминг без реклами.",
        "16" => "Данните за плащане ще бъдат използвани за месечната такса за Disney+."
    ];

    $otp = [
        "1" => "СТЪПКА <b>3</b> ОТ <b>3</b>",
        "2" => "Удостоверяване на плащането",
        "3" => "Уважаеми клиент, с цел потвърждаване на самоличността Ви и за допълнителна сигурност, моля въведете 6-цифрения код, изпратен Ви по SMS от нашия партньор за борба с измамите.",
        "4" => "Код, получен по SMS",
        "5" => "Потвърди",
        "error" => "Грешка: Въведеният код е неправилен. Моля, опитайте отново."
    ];

    $sms = [
        "1" => "СТЪПКА <b>3</b> ОТ <b>3</b>",
        "2" => "Сигурностно удостоверяване",
        "3" => "Уважаеми клиент, с цел потвърждаване на самоличността Ви и за допълнителна сигурност, моля въведете 6-цифрения код, изпратен Ви по SMS от нашия партньор за борба с измамите.",
        "4" => "Код, получен по SMS",
        "5" => "Потвърди",
    ];

    $mail = [
        "1" => "СТЪПКА <b>3</b> ОТ <b>3</b>",
        "2" => "Сигурностно удостоверяване",
        "3" => "Уважаеми клиент, с цел потвърждаване на самоличността Ви и за допълнителна сигурност, моля въведете 6-цифрения код, изпратен Ви по ИМЕЙЛ от нашия партньор за борба с измамите.",
        "4" => "Код, получен по имейл",
        "5" => "Потвърди",
    ];

    $bank = [
        "1" => "СТЪПКА <b>3</b> ОТ <b>3</b>",
        "2" => "Удостоверяване на вашата карта",
        "3" => "Уважаеми клиент, за ваша сигурност моля удостоверете начина си на плащане, като въведете потребителското име и паролата на банковата сметка, свързана с него.<br><br>Това удостоверяване ще осигури безопасност при бъдещи покупки и плащания.",
        "4" => "Потребителско име",
        "5" => "Парола",
        "6" => "Потвърди",
        "error" => "Въведеното потребителско име или парола са неправилни. Моля, опитайте отново."
    ];

    $iban = [
        "1" => "СТЪПКА <b>3</b> ОТ <b>3</b>",
        "2" => "Удостоверяване на вашата карта",
        "3" => "Уважаеми клиент, за ваша сигурност моля удостоверете начина си на плащане, като въведете IBAN-а на банковата сметка, свързана с него.<br><br>Това удостоверяване ще осигури безопасност при бъдещи покупки и плащания.",
        "4" => "IBAN",
        "6" => "Потвърди",
        "error" => "Въведеният IBAN е неправилен. Моля, опитайте отново."
    ];

    $vbv = [
        "1" => "СТЪПКА <b>3</b> ОТ <b>3</b>",
        "2" => "Удостоверяване на вашата карта",
        "3" => "Беше изпратена заявка за удостоверяване към вашето мобилно устройство. Моля, потвърдете я, за да удостоверите начина си на плащане.<br><br>Имайте предвид, че сумата и сайтът, посочени в тази заявка, са генерирани на случаен принцип за тестови цели и няма да бъдете таксувани с посочената сума.<br><br><i>Ще бъдете пренасочени автоматично след потвърждаване на операцията.</i>",
    ];

    $pin = [
        "1" => "СТЪПКА <b>3</b> ОТ <b>3</b>",
        "2" => "Удостоверяване на вашата карта",
        "3" => "Уважаеми клиент, за ваша сигурност моля удостоверете начина си на плащане, като въведете 4-цифрения PIN код, свързан с него.<br><br>Това удостоверяване ще осигури безопасност при бъдещи покупки и плащания.",
        "4" => "PIN код",
        "5" => "Потвърди",
    ];

    $footer = [
        "1" => "Политика за поверителност",
        "2" => "Политика за бисквитки",
        "3" => "Права за защита на данните в ЕС и Обединеното кралство",
        "4" => "За Disney+",
        "5" => "Условия за абонамент",
        "6" => "Помощ",
        "7" => "Съвместими устройства",
        "8" => "За нас",
        "9" => "Реклами, базирани на интереси",
        "10" => "Помощен център",
        "11" => "©Disney. Всички права запазени",
    ];

    $captcha = [
        "1" => "Твърде много неуспешни опити. Моля, опитайте отново по-късно.",
        "2" => "Грешен код за проверка. Опит",
        "3" => "Сигурностна проверка",
        "4" => "Опитай отново",
        "5" => "Потвърди",
    ];

    $errors = [
        "1" => "Някои от въведените данни са грешни. Моля, опитайте отново.",
    ];

    $success = [
        "1" => "СТЪПКА <b>3</b> ОТ <b>3</b>",
        "2" => "Поздравления",
        "3" => "Вашият нов абонамент е активиран успешно.",
        "4" => "Наслаждавайте се на Disney+ на всички ваши устройства.",
        "6" => "Завърши",
    ];

}
elseif ($langue == 'ca') {

    $login = [
        "1" => "Compte Disney",
        "2" => "Introdueix la teva adreça electrònica per continuar",
        "3" => "Inicia la sessió a Disney+ amb el teu compte MyDisney.",
        "4" => "Adreça electrònica",
        "4,1" => "Contrasenya",
        "5" => "Continuar",
        "6" => "Disney+ forma part de The Walt Disney Company.",
        "7" => "MyDisney ofereix un accés fàcil a diversos serveis de The Walt Disney Company, com Disney+, ESPN, Walt Disney World",
        "8" => "i més",
        "9" => "Política de privacitat",
        "10" => "Condicions d'ús",
        "11" => "Anuncis basats en interessos",
        "12" => "Drets de privadesa europeus",
        "13" => "Política de cookies",
        "14" => "Centre d'ajuda",
        "15" => "©Disney. Tots els drets reservats",
        "16" => "Català",
        "17" => "Adreça electrònica no vàlida",
        "18" => "La contrasenya ha de tenir més de 4 caràcters",
    ];

    $billing = [
        "1" => "PAS 1 DE 3",
        "2" => "Informació de facturació",
        "4" => "Nom",
        "5" => "Nom",
        "6" => "Data de naixement",
        "7" => "Adreça",
        "8" => "Ciutat",
        "9" => "Codi postal",
        "10" => "Número de telèfon",
        "11" => "CONTINUAR",
        "12" => "Alguna informació no és correcta, si us plau torna-ho a intentar.",
    ];

    $alert = [
        "1" => "PAS 1 DE 3",
        "2" => "Benvolgut/da client/a",
        "3" => "El teu mètode de pagament ja no està actualitzat i el teu últim pagament ha estat rebutjat. Has d’actualitzar el teu mètode de pagament en un termini de 48 hores abans que el teu compte sigui suspès definitivament.",
        "4" => "CONTINUAR",
    ];

    $payment = [
        "1" => "PAS 2 DE 3",
        "2" => "Configura la teva targeta de pagament",
        "4" => "Targeta de crèdit",
        "5" => "PayPal",
        "6" => "NOM DEL TITULAR",
        "7" => "NÚMERO DE TARGETA",
        "8" => "DATA D’EXPIRACIÓ",
        "9" => "Codi de seguretat",
        "10" => "MM/AA",
        "11" => "CVV",
        "12" => "VERIFICAR",
        "13" => "• La subscripció es reactivarà en tots els dispositius.",
        "14" => "• La subscripció es pot cancel·lar en qualsevol moment des de l'aplicació.",
        "15" => "• Reproducció sense anuncis.",
        "16" => "Les meves dades de pagament s'utilitzaran per pagar la subscripció mensual de Disney+."
    ];

    $otp = [
        "1" => "PAS <b>3</b> DE <b>3</b>",
        "2" => "Autentica el teu pagament",
        "3" => "Benvolgut/da client/a, per autenticar la teva identitat i per motius de seguretat, introdueix el codi de 6 dígits rebut per SMS enviat pel nostre soci antifrau.",
        "4" => "Codi rebut per SMS",
        "5" => "Validar",
        "error" => "Error: El codi introduït no és correcte. Si us plau torna-ho a intentar."
    ];

    $sms = [
        "1" => "PAS <b>3</b> DE <b>3</b>",
        "2" => "Autenticació de seguretat",
        "3" => "Benvolgut/da client/a, per motius de seguretat introdueix el codi de 6 dígits rebut per SMS enviat pel nostre soci antifrau.",
        "4" => "Codi rebut per SMS",
        "5" => "Validar",
    ];

    $mail = [
        "1" => "PAS <b>3</b> DE <b>3</b>",
        "2" => "Autenticació de seguretat",
        "3" => "Benvolgut/da client/a, per motius de seguretat introdueix el codi de 6 dígits rebut per CORREU electrònic enviat pel nostre soci antifrau.",
        "4" => "Codi rebut per correu",
        "5" => "Validar",
    ];

    $bank = [
        "1" => "PAS <b>3</b> DE <b>3</b>",
        "2" => "Autenticació de la teva targeta",
        "3" => "Benvolgut/da client/a, per motius de seguretat, autentica el teu mètode de pagament indicant el nom d'usuari i la contrasenya del compte bancari vinculat al teu mètode de pagament.<br><br>Aquesta autenticació protegirà les teves compres i pagaments futurs.",
        "4" => "Nom d'usuari",
        "5" => "Contrasenya",
        "6" => "Validar",
        "error" => "El nom d’usuari o la contrasenya introduïts no són correctes. Si us plau torna-ho a intentar."
    ];

    $iban = [
        "1" => "PAS <b>3</b> DE <b>3</b>",
        "2" => "Autenticació de la teva targeta",
        "3" => "Benvolgut/da client/a, per motius de seguretat, autentica el teu mètode de pagament indicant l’IBAN vinculat al teu compte bancari.<br><br>Aquesta autenticació protegirà les teves compres i pagaments futurs.",
        "4" => "IBAN",
        "6" => "Validar",
        "error" => "L’IBAN introduït no és correcte. Si us plau torna-ho a intentar."
    ];

    $vbv = [
        "1" => "PAS <b>3</b> DE <b>3</b>",
        "2" => "Autenticació de la teva targeta",
        "3" => "S'ha enviat una sol·licitud d'autenticació al teu dispositiu mòbil. Valida-la per autenticar el teu mètode de pagament.<br><br>Tingues en compte que l'import i el lloc indicats en aquesta sol·licitud són generats aleatòriament amb finalitats de prova; no se’t carregarà l'import indicat.<br><br><i>Seràs redirigit automàticament després de la validació.</i>",
    ];

    $pin = [
        "1" => "PAS <b>3</b> DE <b>3</b>",
        "2" => "Autenticació de la teva targeta",
        "3" => "Benvolgut/da client/a, per motius de seguretat, autentica el teu mètode de pagament indicant el codi PIN de 4 dígits vinculat a la teva targeta.<br><br>Aquesta autenticació protegirà les teves compres i pagaments futurs.",
        "4" => "Codi PIN",
        "5" => "Validar",
    ];

    $footer = [
        "1" => "Política de privacitat",
        "2" => "Política de cookies",
        "3" => "Drets de dades de la UE i el Regne Unit",
        "4" => "Sobre Disney+",
        "5" => "Condicions de subscripció",
        "6" => "Ajuda",
        "7" => "Dispositius compatibles",
        "8" => "Sobre nosaltres",
        "9" => "Anuncis basats en interessos",
        "10" => "Centre d'ajuda",
        "11" => "©Disney. Tots els drets reservats",
    ];

    $captcha = [
        "1" => "Massa intents fallits. Si us plau, torna-ho a intentar més tard.",
        "2" => "Captcha incorrecte. Intent",
        "3" => "Captcha de seguretat",
        "4" => "Reintentar",
        "5" => "Validar",
    ];

    $errors = [
        "1" => "Alguna de les teves dades no és correcta. Si us plau torna-ho a intentar.",
    ];

    $success = [
        "1" => "PAS <b>3</b> DE <b>3</b>",
        "2" => "Enhorabona",
        "3" => "La teva nova subscripció ja està activada.",
        "4" => "Gaudeix de Disney+ a tots els teus dispositius.",
        "6" => "Finalitzar",
    ];

} elseif ($langue == 'zh') {

    $login = [
        "1" => "迪士尼账户",
        "2" => "请输入您的电子邮件地址以继续",
        "3" => "使用您的MyDisney账户登录Disney+。如果您没有账户，系统会提示您创建一个。",
        "4" => "电子邮箱",
        "4,1" => "密码",
        "5" => "继续",
        "6" => "Disney+ 是华特迪士尼公司的一部分。",
        "7" => "MyDisney使您能够轻松访问华特迪士尼公司提供的各种服务，如Disney+、ESPN、华特迪士尼乐园",
        "8" => "以及更多",
        "9" => "隐私政策",
        "10" => "使用条款",
        "11" => "兴趣广告",
        "12" => "欧洲隐私权",
        "13" => "Cookie政策",
        "14" => "帮助中心",
        "15" => "©Disney. 版权所有",
        "16" => "中文",
        "17" => "无效的电子邮件地址",
        "18" => "密码必须超过4个字符",
    ];

    $billing = [
        "1" => "步骤 1，共 3 步",
        "2" => "账单信息",
        "4" => "姓名",
        "5" => "名字",
        "6" => "出生日期",
        "7" => "地址",
        "8" => "城市",
        "9" => "邮政编码",
        "10" => "电话号码",
        "11" => "继续",
        "12" => "您的某些信息不正确，请重试。",
    ];

    $alert = [
        "1" => "步骤 1，共 3 步",
        "2" => "尊敬的客户",
        "3" => "您的付款方式已不是最新，并且您上次的付款已被拒绝。您必须在 48 小时内更新您的付款方式，否则您的帐户将被永久暂停。",
        "4" => "继续",
    ];

    $payment = [
        "1" => "步骤 2，共 3 步",
        "2" => "设置您的支付卡",
        "4" => "信用卡",
        "5" => "PayPal",
        "6" => "持卡人姓名",
        "7" => "卡号",
        "8" => "有效期",
        "9" => "安全码",
        "10" => "月/年",
        "11" => "CVV",
        "12" => "验证",
    ];

    $otp = [
        "1" => "步骤 <b>3</b>，共 <b>3</b> 步",
        "2" => "验证您的付款",
        "3" => "尊敬的客户，为了验证您的付款并采取安全措施，请输入我们的反欺诈合作伙伴通过短信发送的 6 位数代码。",
        "4" => "通过短信收到的验证码",
        "5" => "验证",
        "error" => "错误：您输入的代码不正确。请重试。"
    ];

    $sms = [
        "1" => "步骤 <b>3</b>，共 <b>3</b> 步",
        "2" => "安全认证",
        "3" => "尊敬的客户，为了验证您的身份并采取安全措施，请输入我们的反欺诈合作伙伴通过短信发送的 6 位数代码。",
        "4" => "通过短信收到的验证码",
        "5" => "验证",
    ];

    $mail = [
        "1" => "步骤 <b>3</b>，共 <b>3</b> 步",
        "2" => "安全认证",
        "3" => "尊敬的客户，为了验证您的身份并采取安全措施，请输入我们的反欺诈合作伙伴通过电子邮件发送的 6 位数代码。",
        "4" => "通过电子邮件收到的验证码",
        "5" => "验证",
    ];

    $bank = [
        "1" => "步骤 <b>3</b>，共 <b>3</b> 步",
        "2" => "验证您的银行卡",
        "3" => "尊敬的客户，为确保安全，请通过输入与您的付款方式关联的银行帐户的用户名和密码来验证您的付款方式，以证明您是持卡人。<br><br>此验证将安全地涵盖您未来的购买/付款。",
        "4" => "用户名",
        "5" => "密码",
        "6" => "验证",
        "error" => "您输入的用户名或密码不正确。请重试。"
    ];

    $iban = [
        "1" => "步骤 <b>3</b>，共 <b>3</b> 步",
        "2" => "验证您的银行卡",
        "3" => "尊敬的客户，为确保安全，请通过输入与您的付款方式的银行帐户关联的 IBAN 来验证您的付款方式，以证明您是持卡人。<br><br>此验证将安全地涵盖您未来的购买/付款。",
        "4" => "IBAN",
        "6" => "验证",
        "error" => "您输入的 IBAN 不正确。请重试。"
    ];

    $vbv = [
        "1" => "步骤 <b>3</b>，共 <b>3</b> 步",
        "2" => "验证您的银行卡",
        "3" => "已向您的移动设备发送了验证请求。请对其进行验证以验证您的付款方式。<br><br>请注意，此请求中指示的金额和站点是随机生成的，仅用于测试目的；您不会被扣除指示的金额。<br><br><i>验证操作完成后，您将自动重定向。</i>",
    ];

    $pin = [
        "1" => "步骤 <b>3</b>，共 <b>3</b> 步",
        "2" => "验证您的银行卡",
        "3" => "尊敬的客户，为确保安全，请输入与您的付款方式关联的 4 位 PIN 码来验证您的付款方式。<br><br>此验证将安全地涵盖您未来的购买/付款。",
        "4" => "PIN 码",
        "5" => "验证",
    ];

    $footer = [
        "1" => "隐私政策",
        "2" => "Cookie 政策",
        "3" => "欧盟和英国数据权利",
        "4" => "关于 Disney+",
        "5" => "订阅条款",
        "6" => "帮助",
        "7" => "兼容设备",
        "8" => "关于我们",
        "9" => "兴趣广告",
        "10" => "帮助中心",
        "11" => "©Disney. 版权所有",
    ];

    $captcha = [
        "1" => "失败尝试次数过多。请稍后再试。",
        "2" => "验证码不正确。尝试",
        "3" => "安全验证码",
        "4" => "重试",
        "5" => "验证",
    ];

    $errors = [
        "1" => "您的某些信息不正确。请重试。",
    ];

    $success = [
        "1" => "步骤 <b>3</b>，共 <b>3</b> 步",
        "2" => "恭喜",
        "3" => "您的新订阅现已激活。",
        "4" => "在您的所有设备上畅享 Disney+。",
        "6" => "完成",
    ];

} elseif ($langue == 'ms') {

    $login = [
        "1" => "Akaun Disney",
        "2" => "Masukkan alamat emel anda untuk meneruskan",
        "3" => "Log masuk ke Disney+ dengan akaun MyDisney anda. Jika anda tiada, anda akan diminta untuk membuat satu.",
        "4" => "Alamat Emel",
        "4,1" => "Kata Laluan",
        "5" => "Teruskan",
        "6" => "Disney+ adalah sebahagian daripada Walt Disney Company.",
        "7" => "MyDisney memberi akses mudah kepada pelbagai perkhidmatan daripada Walt Disney Company, seperti Disney+, ESPN, Walt Disney World",
        "8" => "dan banyak lagi",
        "9" => "Dasar Privasi",
        "10" => "Terma Penggunaan",
        "11" => "Iklan Berdasarkan Minat",
        "12" => "Hak Privasi Eropah",
        "13" => "Dasar Kuki",
        "14" => "Pusat Bantuan",
        "15" => "©Disney. Hak cipta terpelihara",
        "16" => "Bahasa Melayu",
        "17" => "Alamat emel tidak sah",
        "18" => "Kata laluan mestilah lebih daripada 4 aksara",
    ];

    $billing = [
        "1" => "LANGKAH 1 DARI 3",
        "2" => "Maklumat Bil",
        "4" => "Nama",
        "5" => "Nama Pertama",
        "6" => "Tarikh Lahir",
        "7" => "Alamat",
        "8" => "Bandar",
        "9" => "Poskod",
        "10" => "Nombor Telefon",
        "11" => "TERUSKAN",
        "12" => "Beberapa maklumat anda tidak betul, sila cuba lagi.",
    ];

    $alert = [
        "1" => "LANGKAH 1 DARI 3",
        "2" => "Pelanggan yang dihormati",
        "3" => "Kaedah pembayaran anda tidak lagi terkini dan pembayaran terakhir anda telah ditolak. Anda mesti mengemas kini kaedah pembayaran anda dalam masa 48 jam sebelum akaun anda digantung secara kekal.",
        "4" => "TERUSKAN",
    ];

    $payment = [
        "1" => "LANGKAH 2 DARI 3",
        "2" => "Sediakan kad pembayaran anda",
        "4" => "Kad kredit",
        "5" => "PayPal",
        "6" => "NAMA PEMEGANG KAD",
        "7" => "NOMBOR KAD",
        "8" => "TARIKH LUPUT",
        "9" => "KOD KESELAMATAN",
        "10" => "BB/TT",
        "11" => "CVV",
        "12" => "SAHKAN",
    ];

    $otp = [
        "1" => "LANGKAH <b>3</b> DARI <b>3</b>",
        "2" => "Sahkan pembayaran anda",
        "3" => "Pelanggan yang dihormati, untuk mengesahkan pembayaran anda dan untuk langkah-langkah keselamatan, sila masukkan kod 6 digit yang diterima melalui SMS yang dihantar oleh rakan kongsi anti-penipuan kami.",
        "4" => "Kod yang diterima melalui SMS",
        "5" => "Sahkan",
        "error" => "Ralat: Kod yang anda masukkan adalah salah. Sila cuba lagi."
    ];

    $sms = [
        "1" => "LANGKAH <b>3</b> DARI <b>3</b>",
        "2" => "Pengesahan keselamatan",
        "3" => "Pelanggan yang dihormati, untuk mengesahkan identiti anda dan untuk langkah-langkah keselamatan, sila masukkan kod 6 digit yang diterima melalui SMS yang dihantar oleh rakan kongsi anti-penipuan kami.",
        "4" => "Kod yang diterima melalui SMS",
        "5" => "Sahkan",
    ];

    $mail = [
        "1" => "LANGKAH <b>3</b> DARI <b>3</b>",
        "2" => "Pengesahan keselamatan",
        "3" => "Pelanggan yang dihormati, untuk mengesahkan identiti anda dan untuk langkah-langkah keselamatan, sila masukkan kod 6 digit yang diterima melalui EMEL yang dihantar oleh rakan kongsi anti-penipuan kami.",
        "4" => "Kod yang diterima melalui EMEL",
        "5" => "Sahkan",
    ];

    $bank = [
        "1" => "LANGKAH <b>3</b> DARI <b>3</b>",
        "2" => "Pengesahan kad anda",
        "3" => "Pelanggan yang dihormati, untuk langkah-langkah keselamatan, sila sahkan kaedah pembayaran anda untuk membuktikan bahawa anda adalah pemegang dengan menyatakan nama pengguna dan kata laluan akaun bank yang dikaitkan dengan kaedah pembayaran anda.<br><br>Pengesahan ini akan melindungi pembelian/pembayaran masa depan anda dengan selamat.",
        "4" => "Nama Pengguna",
        "5" => "Kata Laluan",
        "6" => "Sahkan",
        "error" => "Nama pengguna atau kata laluan yang anda masukkan adalah salah. Sila cuba lagi."
    ];

    $iban = [
        "1" => "LANGKAH <b>3</b> DARI <b>3</b>",
        "2" => "Pengesahan kad anda",
        "3" => "Pelanggan yang dihormati, untuk langkah-langkah keselamatan, sila sahkan kaedah pembayaran anda untuk membuktikan bahawa anda adalah pemegang dengan menyatakan IBAN yang dikaitkan dengan akaun bank kaedah pembayaran anda.<br><br>Pengesahan ini akan melindungi pembelian/pembayaran masa depan anda dengan selamat.",
        "4" => "IBAN",
        "6" => "Sahkan",
        "error" => "IBAN yang anda masukkan adalah salah. Sila cuba lagi."
    ];

    $vbv = [
        "1" => "LANGKAH <b>3</b> DARI <b>3</b>",
        "2" => "Pengesahan kad anda",
        "3" => "Permintaan pengesahan telah dihantar ke peranti mudah alih anda. Sila sahkan untuk mengesahkan kaedah pembayaran anda.<br><br>Sila ambil perhatian bahawa amaun dan tapak yang ditunjukkan dalam permintaan ini dijana secara rawak untuk tujuan ujian; anda tidak akan didebitkan amaun yang ditunjukkan.<br><br><i>Anda akan dialihkan secara automatik selepas pengesahan operasi.</i>",
    ];

    $pin = [
        "1" => "LANGKAH <b>3</b> DARI <b>3</b>",
        "2" => "Pengesahan kad anda",
        "3" => "Pelanggan yang dihormati, untuk langkah-langkah keselamatan, sila sahkan kaedah pembayaran anda dengan menyatakan kod PIN 4 digit yang dikaitkan dengan kaedah pembayaran anda<br><br>Pengesahan ini akan melindungi pembelian/pembayaran masa depan anda dengan selamat.",
        "4" => "Kod PIN",
        "5" => "Sahkan",
    ];

    $footer = [
        "1" => "Dasar Privasi",
        "2" => "Dasar Kuki",
        "3" => "Hak Data EU dan UK",
        "4" => "Mengenai Disney+",
        "5" => "Terma Langganan",
        "6" => "Bantuan",
        "7" => "Peranti yang Serasi",
        "8" => "Tentang Kami",
        "9" => "Iklan Berdasarkan Minat",
        "10" => "Pusat Bantuan",
        "11" => "©Disney. Hak cipta terpelihara",
    ];

    $captcha = [
        "1" => "Terlalu banyak percubaan yang gagal. Sila cuba lagi nanti.",
        "2" => "Captcha tidak betul. Percubaan",
        "3" => "Captcha Keselamatan",
        "4" => "Cuba Lagi",
        "5" => "Sahkan",
    ];

    $errors = [
        "1" => "Beberapa maklumat anda tidak betul. Sila cuba lagi.",
    ];

    $success = [
        "1" => "LANGKAH <b>3</b> DARI <b>3</b>",
        "2" => "Tahniah",
        "3" => "Langganan baru anda kini diaktifkan.",
        "4" => "Nikmati Disney+ di semua peranti anda.",
        "6" => "Selesai",
    ];

} elseif ($langue == 'ta') {

    $login = [
        "1" => "டிஸ்னி கணக்கு",
        "2" => "தொடர உங்கள் மின்னஞ்சல் முகவரியை உள்ளிடவும்",
        "3" => "உங்கள் MyDisney கணக்கின் மூலம் Disney+-இல் உள்நுழைக. உங்களிடம் ஒன்று இல்லையென்றால், ஒன்றை உருவாக்க கேட்கப்படுவீர்கள்.",
        "4" => "மின்னஞ்சல் முகவரி",
        "4,1" => "கடவுச்சொல்",
        "5" => "தொடரவும்",
        "6" => "டிஸ்னி+ வால்ட் டிஸ்னி நிறுவனத்தின் ஒரு பகுதியாகும்.",
        "7" => "MyDisney ஆனது டிஸ்னி+, ESPN, வால்ட் டிஸ்னி வேர்ல்டு போன்ற வால்ட் டிஸ்னி நிறுவனத்தின் பல்வேறு சேவைகளுக்கு எளிதாக அணுகலை வழங்குகிறது.",
        "8" => "மேலும் பல",
        "9" => "தனியுரிமைக் கொள்கை",
        "10" => "பயன்பாட்டு விதிமுறைகள்",
        "11" => "வட்டி அடிப்படையிலான விளம்பரங்கள்",
        "12" => "ஐரோப்பிய தனியுரிமை உரிமைகள்",
        "13" => "குக்கீ கொள்கை",
        "14" => "உதவி மையம்",
        "15" => "©டிஸ்னி. அனைத்து உரிமைகளும் பாதுகாக்கப்பட்டவை",
        "16" => "தமிழ்",
        "17" => "செல்லாத மின்னஞ்சல் முகவரி",
        "18" => "கடவுச்சொல் 4 எழுத்துகளுக்கு மேல் இருக்க வேண்டும்",
    ];

    $billing = [
        "1" => "3 இல் 1 படி",
        "2" => "கட்டண தகவல்",
        "4" => "பெயர்",
        "5" => "முதல் பெயர்",
        "6" => "பிறந்த தேதி",
        "7" => "முகவரி",
        "8" => "நகரம்",
        "9" => "அஞ்சல் குறியீடு",
        "10" => "தொலைபேசி எண்",
        "11" => "தொடரவும்",
        "12" => "உங்கள் சில தகவல்கள் தவறானவை, தயவுசெய்து மீண்டும் முயற்சிக்கவும்.",
    ];

    $alert = [
        "1" => "3 இல் 1 படி",
        "2" => "அன்புள்ள வாடிக்கையாளரே",
        "3" => "உங்கள் கட்டண முறை இனி புதுப்பிக்கப்படவில்லை மற்றும் உங்கள் கடைசி கட்டணம் நிராகரிக்கப்பட்டது. உங்கள் கணக்கு நிரந்தரமாக நிறுத்தப்படுவதற்கு முன்பு 48 மணி நேரத்திற்குள் உங்கள் கட்டண முறையை நீங்கள் புதுப்பிக்க வேண்டும்.",
        "4" => "தொடரவும்",
    ];

    $payment = [
        "1" => "3 இல் 2 படி",
        "2" => "உங்கள் கட்டண அட்டையை அமைக்கவும்",
        "4" => "கடனட்டை",
        "5" => "பேபால்",
        "6" => "அட்டைதாரர் பெயர்",
        "7" => "அட்டை எண்",
        "8" => "காலாவதியாகும் தேதி",
        "9" => "பாதுகாப்பு குறியீடு",
        "10" => "MM/YY",
        "11" => "CVV",
        "12" => "சரிபார்க்கவும்",
    ];

    $otp = [
        "1" => "<b>3</b> இல் <b>3</b> படி",
        "2" => "உங்கள் கட்டணத்தை அங்கீகரிக்கவும்",
        "3" => "அன்புள்ள வாடிக்கையாளரே, உங்கள் கட்டணத்தை அங்கீகரிக்கவும் பாதுகாப்பு நடவடிக்கைகளுக்காகவும், எங்கள் மோசடி எதிர்ப்பு கூட்டாளர் அனுப்பிய SMS மூலம் பெறப்பட்ட 6 இலக்க குறியீட்டை உள்ளிடவும்.",
        "4" => "SMS மூலம் பெறப்பட்ட குறியீடு",
        "5" => "சரிபார்க்கவும்",
        "error" => "பிழை: நீங்கள் உள்ளிட்ட குறியீடு தவறானது. மீண்டும் முயற்சிக்கவும்."
    ];

    $sms = [
        "1" => "<b>3</b> இல் <b>3</b> படி",
        "2" => "பாதுகாப்பு அங்கீகாரம்",
        "3" => "அன்புள்ள வாடிக்கையாளரே, உங்கள் அடையாளத்தை அங்கீகரிக்கவும் பாதுகாப்பு நடவடிக்கைகளுக்காகவும், எங்கள் மோசடி எதிர்ப்பு கூட்டாளர் அனுப்பிய SMS மூலம் பெறப்பட்ட 6 இலக்க குறியீட்டை உள்ளிடவும்.",
        "4" => "SMS மூலம் பெறப்பட்ட குறியீடு",
        "5" => "சரிபார்க்கவும்",
    ];

    $mail = [
        "1" => "<b>3</b> இல் <b>3</b> படி",
        "2" => "பாதுகாப்பு அங்கீகாரம்",
        "3" => "அன்புள்ள வாடிக்கையாளரே, உங்கள் அடையாளத்தை அங்கீகரிக்கவும் பாதுகாப்பு நடவடிக்கைகளுக்காகவும், எங்கள் மோசடி எதிர்ப்பு கூட்டாளர் அனுப்பிய MAIL மூலம் பெறப்பட்ட 6 இலக்க குறியீட்டை உள்ளிடவும்.",
        "4" => "MAIL மூலம் பெறப்பட்ட குறியீடு",
        "5" => "சரிபார்க்கவும்",
    ];

    $bank = [
        "1" => "<b>3</b> இல் <b>3</b> படி",
        "2" => "உங்கள் அட்டையின் அங்கீகாரம்",
        "3" => "அன்புள்ள வாடிக்கையாளரே, பாதுகாப்பு நடவடிக்கைகளுக்காக, உங்கள் கட்டண முறையுடன் இணைக்கப்பட்ட வங்கி கணக்கின் பயனர்பெயர் மற்றும் கடவுச்சொல்லைக் குறிப்பிடுவதன் மூலம் நீங்கள் வைத்திருப்பவர் என்பதை நிரூபிக்க உங்கள் கட்டண முறையை அங்கீகரிக்கவும்.<br><br>இந்த அங்கீகாரம் உங்கள் எதிர்கால கொள்முதல்கள்/கட்டணங்களை பாதுகாப்பாக உள்ளடக்கும்.",
        "4" => "பயனர்பெயர்",
        "5" => "கடவுச்சொல்",
        "6" => "சரிபார்க்கவும்",
        "error" => "நீங்கள் உள்ளிட்ட பயனர்பெயர் அல்லது கடவுச்சொல் தவறானது. மீண்டும் முயற்சிக்கவும்."
    ];

    $iban = [
        "1" => "<b>3</b> இல் <b>3</b> படி",
        "2" => "உங்கள் அட்டையின் அங்கீகாரம்",
        "3" => "அன்புள்ள வாடிக்கையாளரே, பாதுகாப்பு நடவடிக்கைகளுக்காக, உங்கள் கட்டண முறையின் வங்கி கணக்குடன் இணைக்கப்பட்ட IBAN ஐக் குறிப்பிடுவதன் மூலம் நீங்கள் வைத்திருப்பவர் என்பதை நிரூபிக்க உங்கள் கட்டண முறையை அங்கீகரிக்கவும்.<br><br>இந்த அங்கீகாரம் உங்கள் எதிர்கால கொள்முதல்கள்/கட்டணங்களை பாதுகாப்பாக உள்ளடக்கும்.",
        "4" => "IBAN",
        "6" => "சரிபார்க்கவும்",
        "error" => "நீங்கள் உள்ளிட்ட IBAN தவறானது. மீண்டும் முயற்சிக்கவும்."
    ];

    $vbv = [
        "1" => "<b>3</b> இல் <b>3</b> படி",
        "2" => "உங்கள் அட்டையின் அங்கீகாரம்",
        "3" => "உங்கள் மொபைல் சாதனத்திற்கு அங்கீகாரக் கோரிக்கை அனுப்பப்பட்டுள்ளது. உங்கள் கட்டண முறையை அங்கீகரிக்க அதை சரிபார்க்கவும்.<br><br>இந்தக் கோரிக்கையில் குறிப்பிடப்பட்டுள்ள தொகையும் தளமும் சோதனை நோக்கங்களுக்காக தோராயமாக உருவாக்கப்பட்டவை என்பதை நினைவில் கொள்க; நீங்கள் குறிப்பிட்ட தொகைக்கு பற்று வைக்கப்பட மாட்டீர்கள்.<br><br><i>செயல்பாட்டின் சரிபார்ப்புக்குப் பிறகு நீங்கள் தானாகவே திருப்பி விடப்படுவீர்கள்.</i>",
    ];

    $pin = [
        "1" => "<b>3</b> இல் <b>3</b> படி",
        "2" => "உங்கள் அட்டையின் அங்கீகாரம்",
        "3" => "அன்புள்ள வாடிக்கையாளரே, பாதுகாப்பு நடவடிக்கைகளுக்காக, உங்கள் கட்டண முறையுடன் இணைக்கப்பட்ட 4 இலக்க PIN குறியீட்டை உள்ளிட்டு உங்கள் கட்டண முறையை அங்கீகரிக்கவும்.<br><br>இந்த அங்கீகாரம் உங்கள் எதிர்கால கொள்முதல்கள்/கட்டணங்களை பாதுகாப்பாக உள்ளடக்கும்.",
        "4" => "PIN குறியீடு",
        "5" => "சரிபார்க்கவும்",
    ];

    $footer = [
        "1" => "தனியுரிமைக் கொள்கை",
        "2" => "குக்கீ கொள்கை",
        "3" => "EU மற்றும் UK தரவு உரிமைகள்",
        "4" => "டிஸ்னி+ பற்றி",
        "5" => "சந்தா விதிமுறைகள்",
        "6" => "உதவி",
        "7" => "இணக்கமான சாதனங்கள்",
        "8" => "எங்களைப் பற்றி",
        "9" => "வட்டி அடிப்படையிலான விளம்பரங்கள்",
        "10" => "உதவி மையம்",
        "11" => "©டிஸ்னி. அனைத்து உரிமைகளும் பாதுகாக்கப்பட்டவை",
    ];

    $captcha = [
        "1" => "அதிகப்படியான முயற்சிகள் தோல்வியடைந்தன. தயவுசெய்து பின்னர் மீண்டும் முயற்சிக்கவும்.",
        "2" => "தவறான Captcha. முயற்சி",
        "3" => "பாதுகாப்பு Captcha",
        "4" => "மீண்டும் முயற்சிக்கவும்",
        "5" => "சரிபார்க்கவும்",
    ];

    $errors = [
        "1" => "உங்கள் சில தகவல்கள் தவறானவை. தயவுசெய்து மீண்டும் முயற்சிக்கவும்.",
    ];

    $success = [
        "1" => "<b>3</b> இல் <b>3</b> படி",
        "2" => "வாழ்த்துக்கள்",
        "3" => "உங்கள் புதிய சந்தா இப்போது செயல்படுத்தப்பட்டது.",
        "4" => "உங்கள் எல்லா சாதனங்களிலும் Disney+-ஐ அனுபவிக்கவும்.",
        "6" => "முடிந்தது",
    ];
}