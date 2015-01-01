<?php

return array(

    'username' => 'Nome utente',
    'password' => 'Password',
    'password_confirmation' => 'Conferma la Password',
    'e_mail' => 'Email',
    'username_e_mail' => 'Nome utente o Email',

    'signup' => array(
        'title' => 'Registrati',
        'desc' => 'Registrazione nuovo utente',
        'confirmation_required' => 'Conferma richiesta',
        'submit' => 'Crea un nuovo account',
    ),

    'login' => array(
        'title' => 'Accedi',
        'desc' => 'Inserisci le credenziali di accesso',
        'forgot_password' => '(Password dimenticata?)',
        'remember' => 'Resta connesso',
        'submit' => 'Accedi',
    ),

    'forgot' => array(
        'title' => 'Password dimenticata',
        'submit' => 'Continua',
    ),

    'alerts' => array(
        'account_created' => 'L\'account è stato creato.',
        'instructions_sent'       => 'Controlla la email per le istruzioni di conferma dell\'account.',
        'too_many_attempts' => 'Troppi tentativi. Riprova fra qualche minuto.',
        'wrong_credentials' => 'Nome utente, email o password errati.',
        'not_confirmed' => 'Il tuo account non è stato confermato. Verifica la email per completare la procedura di conferma',
        'confirmation' => 'Account confermato! E\' possibile accedere a sistema.',
        'password_confirmation' => 'Le password inserite non corrispondono.', 
        'wrong_confirmation' => 'Codice di conferma errato.',
        'password_forgot' => 'Ti abbiamo inviato una mail con le istruzioni per il cambio della password.',
        'wrong_password_forgot' => 'Utente non trovato.',
        'password_reset' => 'La password è stata cambiata.',
        'wrong_password_reset' => 'Password errata. Riprova',
        'wrong_token' => 'Il link per il recupero della password non è corretto.',
        'duplicated_credentials' => 'Un utente già usa queste informazioni. Prova con un differente nome utente o email.',
    ),

    'email' => array(
        'account_confirmation' => array(
            'subject' => 'Conferma account',
            'greetings' => 'Ciao :name',
            'body' => 'Per confermare l\'account clicca sul link qui di seguito.',
            'farewell' => 'Saluti',
        ),

        'password_reset' => array(
            'subject' => 'Recupero password',
            'greetings' => 'Ciao :name',
            'body' => 'Per recuperare la password accedi al link di seguito. Se non hai richiesto il reset e pensi sia un errore, non devi fare nulla.',
            'farewell' => 'Saluti',
        ),
    ),

);
